<?php

  class MailchimpIntegration {


    private $mc;
    private $api_key;
    private $list_ids;

    private function ip() {
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
          $ip = $_SERVER['REMOTE_ADDR'];
      }
      return $ip;
    }

    public function __construct() {

      //getting the api key, list id from ACF Options Page
      $this->api_key = get_field('mailchimp_api_key','option');
      $this->list_ids = get_field('mailchimp_list_ids','option');

      $this->api_key = empty($this->api_key) ? 'dd2b1cb3f856d67427e314b8be4aeb3a-us13' : $this->api_key;
      $this->list_ids = empty($this->list_ids) ? ['4943e24031', '72250d5800'] : $this->list_ids;

      $this->mc = new \Mailchimp\Mailchimp($this->api_key );

    }

    /** Provides a uniform way of returning results from API key wheter succesful or not **/
    private function result($result='', $list_id='', $e=null) {

      $res = new stdClass();
      $res->result = $result;
      $res->list_id = $list_id;

      if (!$e) {

        $res->status = 'ok';
        $res->error = false;
        $res->message = 'success';
        return $res;
      }

      $res->status = 'error';
      $res->error = true;
      $res->message = json_decode($e->getMessage());
      return $res;
    }

    /** Subscribes or updates email depending wheter it is already in system.
    ** You may pass array of merge fields to second paramater,
    ** or first name, lastname, and zip as paramater 2 and 3respectivley
    **/
    public function subscribe_or_update($email='',$first_name='',$last_name='') {

      $res = [];
      $res['results'] = [];
      $res['status'] = 'ok';

      foreach ($this->list_ids as $list_id) {

        $merge_fields = [];
        $merge_fields['EMAIL'] = $email;
        $merge_fields['LNAME'] = $last_name;
        $merge_fields['FNAME'] = $first_name;
        $merge_fields['NAME'] = $first_name . ' ' . $last_name;
        $merge_fields['FROM_WEB'] = 'TRUE';

        try {

          $result = $this->mc->put(
            'lists/' . $list_id . '/members/' . md5(strtolower($email)),
            [
              "email_address" => $email,
              "status" => "subscribed",
              "status_if_new" => "subscribed",
              "merge_fields" => $merge_fields,
              "ip_signup" => $this->ip(),
            ]
          );

          $res['results'][] = $this->result($result, $list_id);
          $res['subscriber_id'] = $result->get('id');



        } catch (Exception $e) {
          $res['status']='error';

        }

      }

      return $res;

    }


  }