<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client-side Language Lines
    |--------------------------------------------------------------------------
    |
    | These are messages made available to the client browser via JavaScript.
    | To compile this file run: php artisan october:util compile lang
    |
    */

    'markdowneditor' => [
        'formatting' => 'Oblikovanje',
        'quote' => 'Citat',
        'code' => 'Koda',
        'header1' => 'Naslov 1',
        'header2' => 'Naslov 2',
        'header3' => 'Naslov 3',
        'header4' => 'Naslov 4',
        'header5' => 'Naslov 5',
        'header6' => 'Naslov 6',
        'bold' => 'Krepko',
        'italic' => 'Ležeče',
        'unorderedlist' => 'Seznam',
        'orderedlist' => 'Oštevilčeni seznam',
        'video' => 'Video',
        'image' => 'Slika',
        'link' => 'Povezava',
        'horizontalrule' => 'Vstavite vodoravno črto',
        'fullscreen' => 'Celozaslonski način',
        'preview' => 'Predogled',
    ],

    'mediamanager' => [
        'insert_link' => 'Vstavite povezavo medija',
        'insert_image' => 'Vstavite sliko medija',
        'insert_video' => 'Vsavite video medija',
        'insert_audio' => 'Vstavite zvok medija',
        'invalid_file_empty_insert' => 'Prosimo, izberite datoteko za vnos povezav.',
        'invalid_file_single_insert' => 'Prosimo, izberite posamezno datoteko.',
        'invalid_image_empty_insert' => 'Prosimo, izberite slike za vstavitev.',
        'invalid_video_empty_insert' => 'Prosimo, izberite video datoteko za vstavitev.',
        'invalid_audio_empty_insert' => 'Prosimo, izberite zvočno datoteko za vstavitev.',
    ],

    'alert' => [
        'confirm_button_text' => 'OK',
        'cancel_button_text' => 'Prekliči',
        'widget_remove_confirm' => 'Ste prepričani, da želite odstraniti ta pripomoček?'
    ],

    'datepicker' => [
        'previousMonth' => 'Prejšnji mesec',
        'nextMonth' => 'Naslednji mesec',
        'months' => ['Januar', 'Februar', 'Marec', 'April', 'Maj', 'Junij', 'Julij', 'Avgust', 'September', 'Oktober', 'November', 'December'],
        'weekdays' => ['Nedelja', 'Ponedeljek', 'Torek', 'Sreda', 'Četrtek', 'Petek', 'Sobota'],
        'weekdaysShort' => ['Ned', 'Pon', 'Tor', 'Sre', 'Čet', 'Pet', 'Sob']
    ],

    'filter' => [
        'group' => [
            'all' => 'vse'
        ],
        'dates' => [
            'all' => 'vse',
            'filter_button_text' => 'Filter',
            'reset_button_text'  => 'Ponastavitev',
            'date_placeholder' => 'Datum',
            'after_placeholder' => 'Po',
            'before_placeholder' => 'Pred'
        ]
    ],

    'eventlog' => [
        'show_stacktrace' => 'Prikaži sled sklada',
        'hide_stacktrace' => 'Skrij sled sklada',
        'tabs' => [
            'formatted' => 'Oblikovano',
            'raw' => 'Izvorno',
        ],
        'editor' => [
            'title' => 'Urejevalnik izvorne kode',
            'description' => 'Vaš operacijski sistem bi moral biti nastavljen za poslušanje ene od shem URL.',
            'openWith' => 'Odpri z',
            'remember_choice' => 'Zapomni si izbrano opcijo za to sejo',
            'open' => 'Odpri',
            'cancel' => 'Prekliči'
        ]
    ]
];
