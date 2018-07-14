<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/5/23
 * Time: 下午7:34
 */

namespace EasyPay\Kernel\Config;

use ArrayAccess;
abstract class BaseConfig implements ArrayAccess
{
    protected $config = [];
}