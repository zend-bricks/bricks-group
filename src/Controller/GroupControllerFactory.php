<?php

namespace ZendBricks\BricksGroup\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use ZendBricks\BricksUser\Api\GroupApiInterface;

class GroupControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $api = $container->get(GroupApiInterface::SERVICE_NAME);
        return new $requestedName($api);
    }   
}
