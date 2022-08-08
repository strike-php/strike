<?php

return [
    'channels' => [
        'single' => [
            'driver' => 'single',
            'path' => dirname(__DIR__, 2) . '/var/log/app.log',
        ],
    ],
];
