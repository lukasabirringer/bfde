<?php

return [
    'stages' => [
        'production' => [
            'git' => 'git@github.com:lukasabirringer/bfde.git',

            'connection' => [
                'host'     => 's95.goserver.host',
                'username' => 'web186',
                'password' => 'NZz8qnQh',
                // 'key'       => '',
                // 'keytext'   => '',
                // 'keyphrase' => '',
                // 'agent'     => '',
                'timeout'  => 10,
            ],

            'remote' => [
                'root' => '/home/www/beachfelder.de/_dev/bfde',
            ],

            'commands' => [
                'composer install',
            ],

            'shared' => [
                'directories' => [
                    'public',
                    'storage',
                ],
                'files'       => [
                    '.env',
                ],
            ],

            'config' => [
                'dependencies' => [
                    'php' => '>=5.6',
                    'git' => true,
                ],
                'keep'         => 4,
            ],
        ],
    ],
];
