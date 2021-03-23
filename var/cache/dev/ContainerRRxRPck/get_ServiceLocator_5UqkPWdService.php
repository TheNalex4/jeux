<?php

namespace ContainerRRxRPck;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5UqkPWdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5UqkPWd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5UqkPWd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\GameController::createGame' => ['privates', '.service_locator.K7kl0SA', 'get_ServiceLocator_K7kl0SAService', true],
            'App\\Controller\\GameController::newGame' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\GameController::showGame' => ['privates', '.service_locator.Ek4zuIR', 'get_ServiceLocator_Ek4zuIRService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::modification' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\GameController:createGame' => ['privates', '.service_locator.K7kl0SA', 'get_ServiceLocator_K7kl0SAService', true],
            'App\\Controller\\GameController:newGame' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\GameController:showGame' => ['privates', '.service_locator.Ek4zuIR', 'get_ServiceLocator_Ek4zuIRService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:modification' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\GameController::createGame' => '?',
            'App\\Controller\\GameController::newGame' => '?',
            'App\\Controller\\GameController::showGame' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::modification' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\GameController:createGame' => '?',
            'App\\Controller\\GameController:newGame' => '?',
            'App\\Controller\\GameController:showGame' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:modification' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}