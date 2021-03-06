<?php
namespace Mare\Service\Controller;

use Interop\Container\ContainerInterface;
use Mare\Controller\Site\PartialController;
use Laminas\ServiceManager\Factory\FactoryInterface;

class PartialControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        return new PartialController($services->get('Mare\Mare'));
    }
}
