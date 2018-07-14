<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/5/23
 * Time: 下午7:08
 */

namespace EasyPay\Kernel;


use Pimple\Container;

class ServiceContainer extends Container
{
    protected $providers = [];

    protected $config = null;

    public function registerProviders( array $providers )
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}