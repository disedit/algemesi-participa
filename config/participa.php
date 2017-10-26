<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Council details
    |--------------------------------------------------------------------------
    */

    /* The name of the city */
    'municipality' => 'Algemesí',

    /* The name of the council */
    'council_name' => 'Ajuntament d\'Algemesí',

    /* The council's home page */
    'council_url' => 'http://www.algemesi.es',

    /* The council's logo / coat of arms */
    'council_logo' => 'council.png',

    /* The e-mail where users can contact for support */
    'contact_email' => 'incidencies@algemesiparticipa.es',

    /* The council's address */
    'contact_address' => 'Plaça Major, 3 - 46680 Algemesí',

    /* The council's contact phone */
    'contact_phone' => '96 201 90 00',

    /* The council's facebook page and app ID */
    'facebook' => 'https://www.facebook.com/ajuntament.algemesi',
    'facebook_app_id' => '180444172483336',

    /* The council's twitter account */
    'twitter' => 'algemesi_net',

    /*
    |--------------------------------------------------------------------------
    | Application settings
    |--------------------------------------------------------------------------
    */

    /* Main logo to display on all pages */
    'logo' => 'logo.png',

    /* Maximum votes a single IP may cast */
    'max_per_ip' => 20,

    /* Maxiumum times a single IP can fail an ID attempt */
    'max_failed_lookups' => 100,

    /* Maximum SMS a single voter ID may request */
    'sms_max_attempts' => 3,

    /* Whether voting should be anonymous or not */
    'anonymous_voting' => false,

    /* Whether admins may look up IDs to troubleshoot in-person voting */
    'enable_ID_lookup' => true,

    /* Minumum age at which citizens may participate */
    'min_age' => 16,

    /* Whether to display total census number on public result pages */
    'display_census_number' => true,

    /* Should SMS verification be required for online voting? */
    'disable_SMS_verification' => false,

    /* Primary color of the application */
    'primary_color' => '#4A7E63',

    /* Set up Google Analytics tracking */
    'google_analytics_ID' => 'UA-106217417-1',

    /*
    |--------------------------------------------------------------------------
    | Languages
    |--------------------------------------------------------------------------
    |
    | A list of available locales for the application. This array will be
    | used to display the language switcher's dropdown menu
    |
    */

    'languages' => [
        'ca' => 'Valencià',
        'es' => 'Castellano',
        'en' => 'English'
    ]
];
