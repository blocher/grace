<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\Twitter;

use Buzz\Browser;
use Buzz\Client\Curl;
use Buzz\Message\Form\FormRequest;
use Buzz\Message\Form\FormUpload;
use Endroid\Twitter\Exception\InvalidParametersException;
use Endroid\Twitter\Exception\InvalidResponseException;
use Endroid\Twitter\Exception\InvalidTokenTypeException;

class Twitter
{
    /**
     * @var string
     */
    const BASE_URL = 'https://api.twitter.com/1.1';

    /**
     * @var string
     */
    const TOKEN_URL = '/oauth2/token';

    /**
     * @var string
     */
    protected $apiUrl;

    /**
     * @var string
     */
    protected $consumerKey;

    /**
     * @var string
     */
    protected $consumerSecret;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $accessTokenSecret;

    /**
     * @var Browser
     */
    protected $browser;

    /**
     * Class constructor.
     *
     * @param string $consumerKey
     * @param string $consumerSecret
     * @param string|null $accessToken
     * @param string|null $accessTokenSecret
     * @param string|null $apiUrl
     * @param string|null $proxy
     * @param int|null $timeout
     * @param bool|null $verifyPeer
     */
    public function __construct(
        $consumerKey,
        $consumerSecret,
        $accessToken = null,
        $accessTokenSecret = null,
        $apiUrl = null,
        $proxy = null,
        $timeout = null,
        $verifyPeer = true
    ) {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->accessToken = $accessToken;
        $this->accessTokenSecret = $accessTokenSecret;
        $this->apiUrl = $apiUrl ?: self::BASE_URL;

        $curl = new Curl();
        $curl->setTimeout($timeout);
        $curl->setProxy($proxy);
        $curl->setVerifyPeer($verifyPeer);
        $this->browser = new Browser($curl);
    }

    /**
     * Performs a query to the Twitter API.
     *
     * @param string $name
     * @param string $method
     * @param string $format
     * @param array  $parameters
     *
     * @return \Buzz\Message\Response
     */
    public function query($name, $method = 'GET', $format = 'json', $parameters = [])
    {
        $baseUrl = $this->apiUrl.$name.'.'.$format;

        $headers = [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: '.$this->getAuthorization($baseUrl, $method, $parameters),
        ];

        $queryParameters = $this->getQueryParameters($parameters);
        if ($queryParameters) {
            $baseUrl .= "?$queryParameters";
        }

        return $this->call($method, $baseUrl, $headers);
    }

    /**
     * Returns the user timeline.
     *
     * @param array $parameters
     *
     * @return mixed
     */
    public function getTimeline($parameters)
    {
        $response = $this->query('/statuses/user_timeline', 'GET', 'json', $parameters);

        return json_decode($response->getContent());
    }

    /**
     * @param string $filePath
     * @return mixed
     */
    public function uploadMedia($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \InvalidArgumentException('No or invalid file set!');
        }

        $baseUrl = 'https://upload.twitter.com/1.1/media/upload.json';

        $headers = [
            'Content-Type: multipart/form-data',
            'Authorization: ' . $this->getAuthorization($baseUrl, 'POST'),
        ];

        $request = new FormRequest();
        $request->setField('media', new FormUpload($filePath));
        $request->setHeaders($headers);
        $request->setMethod('POST');
        $request->setHost('https://upload.twitter.com');
        $request->setResource('/1.1/media/upload.json');

        $response = $this->browser->send($request);

        return json_decode($response->getContent());
    }

    /**
     * Returns the header authorization row.
     *
     * @param string $baseUrl
     * @param string $method
     * @param array  $parameters
     *
     * @return string
     */
    protected function getAuthorization($baseUrl, $method = 'GET', $parameters = [])
    {
        if (!empty($this->accessToken) && !empty($this->accessTokenSecret)) {
            return $this->getOAuthHeader($baseUrl, $method, $parameters);
        }

        return $this->getBearerHeader();
    }

    /**
     * Returns the header authorization OAuth value.
     *
     * @param string $baseUrl
     * @param string $method
     * @param array  $parameters
     *
     * @return string
     *
     * @throws InvalidParametersException
     */
    protected function getOAuthHeader($baseUrl, $method = 'GET', $parameters = [])
    {
        if (empty($this->accessToken) ||
            empty($this->accessTokenSecret) ||
            empty($this->consumerKey) ||
            empty($this->consumerSecret)
        ) {
            $mandatoryParameters = ['accessToken', 'accessTokenSecret', 'consumerKey', 'consumerSecret'];
            throw new InvalidParametersException(
                sprintf('Twitter needs these mandatory parameters: %s', implode(', ', $mandatoryParameters))
            );
        }

        $oAuthParameters = [
            'oauth_consumer_key' => $this->consumerKey,
            'oauth_nonce' => time(),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => time(),
            'oauth_token' => $this->accessToken,
            'oauth_version' => '1.0',
        ];

        // Build parameters string
        $oAuthParameters = array_merge($parameters, $oAuthParameters);
        ksort($oAuthParameters);
        $queryParameters = $this->getQueryParameters($oAuthParameters);
        $parameterQueryParts = explode('&', $queryParameters);

        // Build signature string
        $signatureString = strtoupper($method).'&'.rawurlencode($baseUrl).'&'.rawurlencode($queryParameters);
        $signatureKey = rawurlencode($this->consumerSecret).'&'.rawurlencode($this->accessTokenSecret);
        $signature = base64_encode(hash_hmac('sha1', $signatureString, $signatureKey, true));

        // Create headers containing oauth
        $parameterQueryParts[] = 'oauth_signature='.rawurlencode($signature);

        return 'OAuth '.implode(', ', $parameterQueryParts);
    }

    /**
     * Returns the header authorization Bearer value.
     *
     * @return string
     *
     * @throws InvalidResponseException
     * @throws InvalidTokenTypeException
     */
    public function getBearerHeader()
    {
        $headers = [
            'Authorization: '.$this->getBasicHeader(),
            'Content-Type: application/x-www-form-urlencoded',
        ];

        $response = $this->call('POST', self::BASE_URL.self::TOKEN_URL, $headers, 'grant_type=client_credentials');
        $content = $response->getContent();
        $result = json_decode($content, true);

        if (!is_array($result) || empty($result['token_type']) || empty($result['access_token'])) {
            throw new InvalidResponseException(
                sprintf('Twitter response is invalid: %s', $content)
            );
        }
        if ($result['token_type'] !== 'bearer') {
            throw new InvalidTokenTypeException(sprintf('Twitter token type is invalid: %s.', $result['token_type']));
        }

        return 'Bearer '.$result['access_token'];
    }

    /**
     * Returns the header authorization Basic value.
     *
     * @return string
     *
     * @throws InvalidParametersException
     */
    protected function getBasicHeader()
    {
        if (empty($this->consumerKey) || empty($this->consumerSecret)) {
            $mandatoryParameters = ['consumerKey', 'consumerSecret'];
            throw new InvalidParametersException(
                sprintf('Twitter needs these mandatory parameters: %s', implode(', ', $mandatoryParameters))
            );
        }

        return 'Basic '.base64_encode($this->consumerKey.':'.$this->consumerSecret);
    }

    /**
     * Returns the query parameters.
     *
     * @param array $parameters
     *
     * @return string
     */
    protected function getQueryParameters($parameters = [])
    {
        $query = '';
        if (count($parameters) > 0) {
            $queryParts = [];
            foreach ($parameters as $key => $value) {
                $queryParts[] = $key.'='.rawurlencode($value);
            }
            $query = implode('&', $queryParts);
        }

        return $query;
    }

    /**
     * Calls API through the browser client.
     *
     * @param $method
     * @param $baseUrl
     * @param array  $headers
     * @param string $content
     *
     * @return \Buzz\Message\Response
     */
    protected function call($method, $baseUrl, $headers = [], $content = '')
    {
        if (strtoupper($method) == 'GET') {
            return $this->browser->get($baseUrl, $headers);
        } else {
            return $this->browser->post($baseUrl, $headers, $content);
        }
    }
}
