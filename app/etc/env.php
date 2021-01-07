<?php
return [
    'backend' => [
        'frontName' => 'managepanel'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'aec235d2afddd16003f271b02b277fbd'
    ],
    'db' => [
        'table_prefix' => 'soft_',
        'connection' => [
            'default' => [
                'host' => '127.0.0.1',
                'dbname' => 'magentodatabase',
                'username' => 'admin',
                'password' => 'P2atx31Y',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        [
            'save' => 'memcached',
            'save_path' => '127.0.0.1:11211'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '10d_'
            ],
            'page_cache' => [
                'id_prefix' => '10d_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1,
        'wp_gtm_categories' => 1
    ],
    'downloadable_domains' => [
        'bioayurveda.in'
    ],
    'install' => [
        'date' => 'Thu, 01 Oct 2020 08:29:53 +0000'
    ]
];
