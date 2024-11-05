<?php

namespace ContainerNVWpkuc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_InMemory_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport.in_memory.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'InMemory'.\DIRECTORY_SEPARATOR.'InMemoryTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClockInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'ClockInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'Clock.php';

        return $container->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory(($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
    }
}
