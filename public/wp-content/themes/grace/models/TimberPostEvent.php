<?php
  class TimberPostEvent extends TimberPost {

    public $event;


    //event fields
    public $post_id;
    public $timezone_name;
    public $recurrence_rules;
    public $exception_rules;
    public $allday;
    public $instant_event;
    public $recurrence_dates;
    public $exception_dates;
    public $venue;
    public $country;
    public $address;
    public $city;
    public $province;
    public $postal_code;
    public $show_map;
    public $contact_name;
    public $contact_phone;
    public $contact_email;
    public $contact_url;
    public $cost;
    public $ticket_url;
    public $ical_feed_url;
    public $ical_source_url;
    public $ical_organizer;
    public $ical_contact;
    public $ical_uid;
    public $longitude;
    public $latitude;
    public $show_coordinates;
    public $categories;
    public $tags;
    public $start;
    public $end;


    function __construct($event) {
      $id = get_class($event)=="WP_Post" ? $event->ID : $event->get('post_id');
      if (get_class($event)=="WP_Post") {
        $event = eventsSearch()->getEvent($id);
      }

      $this->event = $event;
      parent::__construct($id);
      $this->setEventAttributes();

    }

    function setEventAttributes() {


      $fields = [
        'post_id',
        'timezone_name',
        'recurrence_rules',
        'exception_rules',
        'allday',
        'instant_event',
        'recurrence_dates',
        'exception_dates',
        'venue',
        'country',
        'address',
        'city',
        'province',
        'postal_code',
        'show_map',
        'contact_name',
        'contact_phone',
        'contact_email',
        'contact_url',
        'cost',
        'ticket_url',
        'ical_feed_url',
        'ical_source_url',
        'ical_organizer',
        'ical_contact',
        'ical_uid',
        'longitude',
        'latitude',
        'show_coordinates',
        'categories',
        'tags',
        'start',
        'end',
      ];
      foreach ($fields as $field) {
        $this->$field = $this->event->get($field);
      }

    }

    public function calendarArray() {

      $calendar = [];
      $calendar['post_id'] = $this->ID;
      $calendar['title'] = $this->post_title;
      $calendar['permalink'] = $this->link();
      $calendar['time'] = $this->start->format('Y-m-d H:i:s');
      $calendar['year'] = $this->start->format('Y');
      $calendar['month'] = $this->start->format('m');
      $calendar['day'] = $this->start->format('d');
      $calendar['type'] = $this->post_type;
      $calendar['excerpt'] = $this->excerpt();
      $calendar['address'] = trim ($this->venue . ' ' . $this->address . '; ' . $this->city . ', ' . $this->province . ' ' . $this->postal_code);
      $calendar['enddate'] = $this->end->format('Y-m-d H:i:s');
      $calendar['formatted_date'] = $calendar['year'].'-'.$calendar['month'].'-'.$calendar['day'];

      return $calendar;
    }









  }