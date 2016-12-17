<?php

return [
    'dkim' => [
        'params' => [
            'd' => 'example.com', // domain
            'h' => 'from:to:subject', // headers to sign
            's' => 'k1', // domain key selector
        ]
    ],
    'service_manager' => [
        'aliases' => [
            'DkimSigner' => \Dkim\Signer\Signer::class
        ],
        'factories' => [
            \Dkim\Signer\Signer::class => \Dkim\Factory\Signer::class,
        ]
    ]
];
