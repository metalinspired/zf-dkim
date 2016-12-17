<?php

namespace Dkim\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Signer implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {

        return new \Dkim\Signer\Signer($serviceLocator->get('Config'));
    }

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null) {

        return new \Dkim\Signer\Signer($container->get('Config'));
    }

}
