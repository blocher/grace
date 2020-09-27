<?php

use Carbon\Carbon;
use Sabre\VObject;

class ImportEvents
{

    public function __construct()
    {

        $this->bootstrap();
        $this->import();
    }

    protected function bootstrap()
    {

        if (php_sapi_name() != 'cli') {
            throw new Exception('This application must be run on the command line.');
        }

        date_default_timezone_set('America/New_York');
        if ( ! array_key_exists('SERVER_NAME', $_SERVER) or empty($_SERVER['SERVER_NAME'])) {
            $_SERVER['SERVER_NAME'] = 'CLI';
        }

        ini_set('memory_limit', '7000M');
        require_once('vendor/autoload.php');
        if ( ! defined('ABSPATH')) {
            require_once('public_html/wp-load.php');
        }

    }

    protected function import()
    {

        $start_time = new Carbon('now', new DateTimeZone('America/New_York'));
        $start_time->subDays(15);

        $end_time = new Carbon('now', new DateTimeZone('America/New_York'));
        $end_time->addDays(120);

        $cal       =
            file_get_contents("https://GraceAlex.breezechms.com/events/feed/WX7N9LgpV6FfjcJWTBmBDtyzIG6fgNwDsZ17a8Sov5PS9EVr5%2BsEkkasuuRfc7r4seMKZOMcjXh3nXv%2F43ZqjQ%3D%3D/9rp1LZrzydKiAKs0036jD2OMxbTgSsmjDLD3DGXn%2BPYCVo4cLHOuqd0vX2FzjFpJtQk8erZy6ZiqZbz7MenfFw%3D%3D");

        $vcalendar = VObject\Reader::read($cal);
        $vcalendar = $vcalendar->expand($start_time, $end_time);
        $ids = [];
        foreach ($vcalendar->VEVENT as $event) {
            $status      = 'publish';
            $start       = (new Carbon($event->DTSTART, "America/Detroit"))->setTimezone('America/New_York');
            $end         = (new Carbon($event->DTEND, "America/Detroit"))->setTimezone('America/New_York');
            $location    = $event->LOCATION ?? null;
            $title       = (string)$event->SUMMARY;
            $description =
                ! empty($event->DESCRIPTION) && $event->DESCRIPTION != "No Description" ? $event->DESCRIPTION : '';
            $uid = $event->UID;


            $wp_event                             = [];
            $wp_event['event_title_google']       = $title;
            $wp_event['event_description_google'] = $description;
            $wp_event['event_start_time_google']  = $start->format("Y-m-d H:i:s");
            $wp_event['event_end_time_google']    = $end->format("Y-m-d H:i:s");
            $wp_event['event_location_google']    = $location;
            $wp_event['google_id']                = (string)$uid;

            $args = array(
                'meta_query'  => [
                    [
                        'key'     => 'google_id',
                        'value'   => $uid,
                        'compare' => '=',
                    ],
                ],
                'post_type'   => 'event',
                'post_status' => ['publish', 'pending', 'draft', 'future', 'private', 'trash'],
            );

            $posts = get_posts($args);
            $id    = count($posts) > 0 ? $posts[0]->ID : 0;

            $args = [
                'ID'          => $id,
                'post_date'   => $start->format('c'),
                'post_title'  => $title,
                'post_status' => $status,
                'post_type'   => 'event',

            ];


            $id = wp_insert_post($args, true);

            foreach ($wp_event as $key => $value) {
                update_field($key, $value, $id);
            }

            post_process_event($id);
            $ids[] = $id;
            error_log("Imported " . $title . ' ' . $start->format('c') . PHP_EOL);
        }

        error_log("Imported or updated " . count($ids) . ' events ' . PHP_EOL);

        $args = [
            'post_date'   => [
                'after' => $start_time->format('c'),
                'before' => $end_time->format('c'),
            ],
            'post_type'   => 'event',
            'nopaging' => true,
            'meta_query' => [
                [
                    'key'     => 'google_id',
                    'value'   => '@GraceAlex.breezechms.com',
                    'compare' => 'LIKE'
                ]
            ],
            'post__not_in' => $ids,

        ];
        $for_deletion = get_posts($args);

        foreach ($for_deletion as $post) {
            wp_delete_post($post->ID);
        }

        error_log("Imported or updated " . count($ids) . ' events ' . PHP_EOL);
        error_log("Deleted " . count($for_deletion) . ' events' . PHP_EOL);


    }

}

new ImportEvents();
