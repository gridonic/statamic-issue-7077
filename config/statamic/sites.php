<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [
        'en' => [
            'name' => 'English',
            'locale' => 'en_US',
            'url' => '/',
        ],

        'de' => [
            'name' => 'German',
            'locale' => 'de_DE',
            'url' => '/de/',
        ],

        'fr' => [
            'name' => 'French',
            'locale' => 'fr_FR',
            'url' => '/fr/',
        ],

        'it' => [
            'name' => 'Italian',
            'locale' => 'it_IT',
            'url' => '/it/',
        ],

    ],
];
