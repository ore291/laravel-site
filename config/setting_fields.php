<?php

return [
    'app' => [
        'title' => 'General',
        'desc'  => 'All the general settings for application.',
        'icon'  => 'fas fa-cube',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'app_name', // unique name for field
                'label' => 'App Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Laravel Starter', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'address', // unique name for field
                'label' => 'Address', // you know what label it is
                'rules' => 'required|max:255', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '##########', // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'site_logo', // unique name for field
                'label' => 'Site Logo', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'site_favicon', // unique name for field
                'label' => 'Site Favicon', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
            
            // [
            //     'type'  => 'text', // input fields type
            //     'data'  => 'string', // data type, string, int, boolean
            //     'name'  => 'footer_text', // unique name for field
            //     'label' => 'Footer Text', // you know what label it is
            //     'rules' => 'required|min:2', // validation rule of laravel
            //     'class' => '', // any class for input
            //     'value' => '<a href="https://github.com/nasirkhan/laravel-starter/">Built with ♥ from Bangladesh</a>', // default value if you want
            // ],
            // [
            //     'type'  => 'checkbox', // input fields type
            //     'data'  => 'text', // data type, string, int, boolean
            //     'name'  => 'show_copyright', // unique name for field
            //     'label' => 'Show Copyright', // you know what label it is
            //     'rules' => '', // validation rule of laravel
            //     'class' => '', // any class for input
            //     'value' => '1', // default value if you want
            // ],
        ],
    ],
    'email' => [
        'title' => 'Email',
        'desc'  => 'Email settings for app',
        'icon'  => 'fas fa-envelope',

        'elements' => [
            [
                'type'  => 'email', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'email', // unique name for field
                'label' => 'Email', // you know what label it is
                'rules' => 'required|email', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'info@example.com', // default value if you want
            ],
        ],

    ],
    'ads' => [
        'title' => 'Ads Panel',
        'desc'  => 'Ads upload for app',
        'icon'  => 'fas fa-volume',

        'elements' => [
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'home_page_1', // unique name for field
                'label' => 'Home Page first AD space', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'home_page_2', // unique name for field
                'label' => 'Home Page second AD space', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'home_page_3', // unique name for field
                'label' => 'Home Page third AD space', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'football_ad', // unique name for field
                'label' => 'Football predictions page ad', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'other_sports_ad', // unique name for field
                'label' => 'Other Sports predictions page ad', // you know what label it is
                'rules' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation rule of laravel
                'class' => '', // any class for input
                 // default value if you want
            ],
           
        ],

    ],
    'bank' => [
        'title' => 'Bank Settings',
        'desc'  => 'Bank settings for app',
        'icon'  => 'fas fa-building',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'fw_public_key', // unique name for field
                'label' => 'FlutterWave Public API Key', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'FLWPUBK_TEST-3b100333c526f8573b7e7c85ee5310b8-X', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'fw_secret_key', // unique name for field
                'label' => 'FlutterWave Secret API Key', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'FLWSECK_TEST-e482ebb4d6add3df13f04170fcdcc4cf-X', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'paystack_key', // unique name for field
                'label' => 'Paystack API key', // you know what label it is
                'rules' => 'required|nullable|max:255', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'pk_test_9da36d88c1d36b3beaab17754e6a92d2ad64ccaf', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'paystack_secret_key', // unique name for field
                'label' => 'Paystack Secret key', // you know what label it is
                'rules' => 'required|nullable|max:255', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'sk_test_5dbaccf801146c4e853762c6d634bbbfb83bcee4', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'ng_bank_acct', // unique name for field
                'label' => 'Nigerian Bank Account', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '##########', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'ng_bank_name', // unique name for field
                'label' => 'Nigerian Bank Name', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'ng_bank_user', // unique name for field
                'label' => 'Account Holder Name', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'mpesa_bank_acct', // unique name for field
                'label' => 'Mpesa Bank Account', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '##########', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'mpesa_user_name', // unique name for field
                'label' => 'Mpesa Account Holder Name', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'transfer_comfirm_number', // unique name for field
                'label' => 'Number to Comfirm Bank Transers', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
        ],

    ],
    'social' => [
        'title' => 'Social Profiles',
        'desc'  => 'Link of all the social profiles.',
        'icon'  => 'fas fa-users',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'telegram_url', // unique name for field
                'label' => 'Telegram Group URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'ng_whatsapp', // unique name for field
                'label' => 'Nigerian Call and Whatsapp', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'kenya_whatsapp', // unique name for field
                'label' => 'Kenya Call and Whatsapp', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'twitter_url', // unique name for field
                'label' => 'Twitter Profile URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'instagram_url', // unique name for field
                'label' => 'Instagram Account URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'linkedin_url', // unique name for field
                'label' => 'LinkedIn URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'facebook_url', // unique name for field
                'label' => 'Facebook Group URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
        ],

    ],
    'meta' => [
        'title' => 'Meta ',
        'desc'  => 'Application Meta Data',
        'icon'  => 'fas fa-globe-asia',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_site_name', // unique name for field
                'label' => 'Meta Site Name', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Awesome Laravel | A Laravel Starter Project', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_description', // unique name for field
                'label' => 'Meta Description', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'A CMS like modular starter application project built with Laravel 9.', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_keyword', // unique name for field
                'label' => 'Meta Keyword', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Web Application, Laravel,Laravel starter,Bootstrap,Admin,Template,Open,Source, nasir khan, nasirkhan', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_image', // unique name for field
                'label' => 'Meta Image', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'img/default_banner.jpg', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_fb_app_id', // unique name for field
                'label' => 'Meta Facebook App Id', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '569561286532601', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_twitter_site', // unique name for field
                'label' => 'Meta Twitter Site Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '@nasir8891', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_twitter_creator', // unique name for field
                'label' => 'Meta Twitter Creator Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '@nasir8891', // default value if you want
            ],
        ],
    ],
    'analytics' => [
        'title' => 'Analytics',
        'desc'  => 'Application Analytics',
        'icon'  => 'fas fa-chart-line',

        'elements' => [
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'google_analytics', // unique name for field
                'label' => 'Google Analytics', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                // 'value' => '123', // any class for input
                'value' => '<!-- Global site tag (gtag.js) - Google Analytics -->
                            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36770598-2"></script>
                            <script>
                            window.dataLayer = window.dataLayer || [];
                            function gtag(){dataLayer.push(arguments);}
                            gtag("js", new Date());

                            gtag("config", "UA-36770598-2");
                            </script>
                            ', // default value if you want
                'help'     => 'Paste the tracking code in this field.', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
        ],

    ],
];
