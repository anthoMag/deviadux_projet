<?php

namespace ContainerX4hxJaR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CartesController' shared autowired service.
     *
     * @return \App\Controller\CartesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CartesController.php';

        $container->services['App\\Controller\\CartesController'] = $instance = new \App\Controller\CartesController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\CartesController', $container));

        return $instance;
    }
}
