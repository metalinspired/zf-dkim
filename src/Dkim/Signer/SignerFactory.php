<?php

namespace Dkim\Signer;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SignerFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {

        return new Signer($serviceLocator->get('Config'));
    }

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null) {

        return new Signer($container->get('Config'));
    }

}
