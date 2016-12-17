<?php

namespace Dkim;

class Module {

    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig() {
        return array(
            'aliases' => [
                'DkimSigner' => \Dkim\Signer\Signer::class
            ],
            'factories' => array(
                \Dkim\Signer\Signer::class => \Dkim\Factory\Signer::class,
            )
        );
    }

}
