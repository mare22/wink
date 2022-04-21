<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Wink Database Connection
    |--------------------------------------------------------------------------
    |
    | This is the database connection you want Wink to use while storing &
    | reading your content. By default Wink assumes you've prepared a
    | new connection called "wink". However, you can change that
    | to anything you want.
    |
    */

    'database_connection' => env('WINK_DB_CONNECTION', 'wink'),

    /*
    |--------------------------------------------------------------------------
    | Wink Uploads Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Wink will use to put file uploads, you can use
    | any of the disks defined in your config/filesystems.php file. You may
    | also configure the path where the files should be stored.
    |
    */

    'storage_disk' => env('WINK_STORAGE_DISK', 'local'),

    'storage_path' => env('WINK_STORAGE_PATH', 'public/wink/images'),

    /*
    |--------------------------------------------------------------------------
    | Wink Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Wink will be accessible from. By default it
    | will be accessible on the same domain as your app.
    |
    */

    'domain' => env('WINK_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Wink Path
    |--------------------------------------------------------------------------
    |
    | This is the URI prefix where Wink will be accessible from. Feel free to
    | change this path to anything you like.
    |
    */

    'path' => env('WINK_PATH', 'wink'),

    /*
    |--------------------------------------------------------------------------
    | Wink Middleware Group
    |--------------------------------------------------------------------------
    |
    | This is the middleware group that Wink uses.
    |
    */

    'middleware_group' => env('WINK_MIDDLEWARE_GROUP', 'web'),

    /*
    |--------------------------------------------------------------------------
    | Wink Post Preview Path
    |--------------------------------------------------------------------------
    |
    | Wink uses this path to display a preview link in the editor. While
    | building the link tag, the {postSlug} placeholder will be replaced
    | by the actual post slug.
    |
    */

    'preview_path' => '/{postSlug}',

    'editor' => [

        /*
        |--------------------------------------------------------------------------
        | Default editor (for when you don't want options)
        |--------------------------------------------------------------------------
        |
        | Wink usually allows either markdown or rich text editing. If you're
        | setting up an environment where you only want one or the other
        | you can specify that here. (options: null, 'markdown', 'rich')
        |
        */

        'default' => null,

    ],


    /*
    |--------------------------------------------------------------------------
    | Languages if we create blog for multiple languages
    |--------------------------------------------------------------------------
    |
    | Author can select language when creating blog, and it would be store in
    | post table in language column. If user do not select language default
    | will be english.
    |
    */
    'languages' => [
        "ab" => "Abkhazian",
        "aa" => "Afar",
        "af" => "Afrikaans",
        "sq" => "Albanian",
        "am" => "Amharic",
        "ar" => "Arabic",
        "hy" => "Armenian",
        "as" => "Assamese",
        "ay" => "Aymara",
        "az" => "Azerbaijani",
        "ba" => "Bashkir",
        "eu" => "Basque",
        "bn" => "Bengali, Bangla",
        "dz" => "Bhutani",
        "bh" => "Bihari",
        "bi" => "Bislama",
        "br" => "Breton",
        "bg" => "Bulgarian",
        "my" => "Burmese",
        "be" => "Byelorussian",
        "km" => "Cambodian",
        "ca" => "Catalan",
        "zh" => "Chinese",
        "co" => "Corsican",
        "hr" => "Croatian",
        "cs" => "Czech",
        "da" => "Danish",
        "nl" => "Dutch",
        "en" => "English, American",
        "eo" => "Esperanto",
        "et" => "Estonian",
        "fo" => "Faeroese",
        "fj" => "Fiji",
        "fi" => "Finnish",
        "fr" => "French",
        "fy" => "Frisian",
        "gd" => "Gaelic (Scots Gaelic)",
        "gl" => "Galician",
        "ka" => "Georgian",
        "de" => "German",
        "el" => "Greek",
        "kl" => "Greenlandic",
        "gn" => "Guarani",
        "gu" => "Gujarati",
        "ha" => "Hausa",
        "iw" => "Hebrew",
        "hi" => "Hindi",
        "hu" => "Hungarian",
        "is" => "Icelandic",
        "id" => "Indonesian",
        "ia" => "Interlingua",
        "ie" => "Interlingue",
        "ik" => "Inupiak",
        "ga" => "Irish",
        "it" => "Italian",
        "ja" => "Japanese",
        "jw" => "Javanese",
        "kn" => "Kannada",
        "ks" => "Kashmiri",
        "kk" => "Kazakh",
        "rw" => "Kinyarwanda",
        "ky" => "Kirghiz",
        "rn" => "Kirundi",
        "ko" => "Korean",
        "ku" => "Kurdish",
        "lo" => "Laothian",
        "la" => "Latin",
        "lv" => "Latvian, Lettish",
        "ln" => "Lingala",
        "lt" => "Lithuanian",
        "mk" => "Macedonian",
        "mg" => "Malagasy",
        "ms" => "Malay",
        "ml" => "Malayalam",
        "mt" => "Maltese",
        "mi" => "Maori",
        "mr" => "Marathi",
        "mo" => "Moldavian",
        "mn" => "Mongolian",
        "na" => "Nauru",
        "ne" => "Nepali",
        "nb" => "Bokmål, Norwegian",
        "oc" => "Occitan",
        "or" => "Oriya",
        "om" => "Oromo, Afan",
        "ps" => "Pashto, Pushto",
        "fa" => "Persian",
        "pl" => "Polish",
        "pt" => "Portuguese",
        "pa" => "Punjabi",
        "qu" => "Quechua",
        "rm" => "Rhaeto-Romance",
        "ro" => "Romanian",
        "ru" => "Russian",
        "sm" => "Samoan",
        "sg" => "Sangro",
        "sa" => "Sanskrit",
        "sr" => "Serbian",
        "sh" => "Serbo-Croatian",
        "st" => "Sesotho",
        "tn" => "Setswana",
        "sn" => "Shona",
        "sd" => "Sindhi",
        "si" => "Singhalese",
        "ss" => "Siswati",
        "sk" => "Slovak",
        "sl" => "Slovenian",
        "so" => "Somali",
        "es" => "Spanish",
        "su" => "Sudanese",
        "sw" => "Swahili",
        "sv" => "Swedish",
        "tl" => "Tagalog",
        "tg" => "Tajik",
        "ta" => "Tamil",
        "tt" => "Tatar",
        "te" => "Tegulu",
        "th" => "Thai",
        "bo" => "Tibetan",
        "ti" => "Tigrinya",
        "to" => "Tonga",
        "ts" => "Tsonga",
        "tr" => "Turkish",
        "tk" => "Turkmen",
        "tw" => "Twi",
        "uk" => "Ukrainian",
        "ur" => "Urdu",
        "uz" => "Uzbek",
        "vi" => "Vietnamese",
        "vo" => "Volapuk",
        "cy" => "Welsh",
        "wo" => "Wolof",
        "xh" => "Xhosa",
        "ji" => "Yiddish",
        "yo" => "Yoruba",
        "zu" => "Zulu"
    ]
];
