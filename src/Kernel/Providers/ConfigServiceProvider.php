<?php
namespace isadmin\Jinritemai\Kernel\Providers;

use isadmin\Jinritemai\Kernel\Config;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ConfigServiceProvider.
 *
 * @author overtrue <i@overtrue.me>
 */
class ConfigServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $app)
    {
        !isset($app['config']) && $app['config'] = function ($app) {
            return new Config($app->getConfig());
        };
    }
}
