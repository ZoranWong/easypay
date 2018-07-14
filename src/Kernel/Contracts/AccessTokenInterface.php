<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/6/26
 * Time: 下午5:35
 */

namespace EasyPay\Kernel\Contracts;
use Psr\Http\Message\RequestInterface;

interface AccessTokenInterface
{
    /**
     * @return array
     */
    public function getToken(): array;

    /**
     * @return \EasyPay\Kernel\Contracts\AccessTokenInterface
     */
    public function refresh(): self;

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $requestOptions
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface;
}