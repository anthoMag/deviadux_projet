<?php

namespace ContainerX4hxJaR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFirstControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FirstController' shared autowired service.
     *
     * @return \App\Controller\FirstController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FirstController.php';

        $container->services['App\\Controller\\FirstController'] = $instance = new \App\Controller\FirstController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\FirstController', $container));

        return $instance;
    }
}
