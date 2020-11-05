<?php

/** All Constatns Will be added here instead of app_data constants */
/** Access the constant values - echo Config::get('concrete.email.default.address'); */
/** Any changes made in the cms will override the changes in generated_overrides - concrete.php  */
return [
    'debug'       => [
        'detail'         => 'debug',
        'display_errors' => true,
    ],
    'marketplace' => [
        'enabled' => false,
    ],
    'email'       => [
        'enabled' => true,
        'default' => [
            'address' => 'badar.rashdi@gmail.com',
            'name'    => 'concrete5-8',
        ],
    ],

    'client_admin_group_name' => 'Client',
    'tentwenty_org_url'       => 'https://www.tentwenty.me/',

    /* for cms background image  */
    'white_label'             => [
        'background_url' => 'http://php4net.com/wp-content/uploads/2018/02/house-726185.jpg' /* file path to url */
    ],
    'cache'                   => [
        // 'blocks'                   => false,
        // 'assets'                   => false,
        // 'theme_css'                => false,
        // 'overrides'                => false,
        // 'pages'                    => '0',
        // 'full_page_lifetime'       => 'default',
        // 'full_page_lifetime_value' => null,
        // 'clear'                    => [
        //     'thumbnails' => false,
        // ],
    ],
    'theme'                   => [
        'compress_preprocessor_output' => false,
        'generate_less_sourcemap'      => false,
    ],
    'seo'                     => [
        'url_rewriting'             => false,
        'url_rewriting_all'         => false,
        'trailing_slash'            => false,
        'title_format'              => '%2$s | %1$s',
        'title_segment_separator'   => ' | ',
        'paging_string'             => 'page',
        'redirect_to_canonical_url' => 0,
    ],
    'misc'                     => [
        'generator_tag_display_in_header' => false,
    ],
];
