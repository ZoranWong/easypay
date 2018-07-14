<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/5/24
 * Time: 上午9:30
 */

namespace EasyPay\Kernel\Oauth;


use Symfony\Component\HttpFoundation\RedirectResponse;

interface OauthInterface
{
    public function authCode();

    /**
     * @param string $redirect
     * @param array $query
     * @return RedirectResponse
     */
    public function redirect($redirect = null, array $query = []);

    /**
     * @param array $scopes
     * @return $this
     * */
    public function scopes(array $scopes);
}