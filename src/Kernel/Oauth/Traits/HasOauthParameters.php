<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/5/24
 * Time: 上午11:01
 */

namespace EasyPay\Kernel\Oauth\Traits;
use Symfony\Component\HttpFoundation\RedirectResponse;

trait HasOauthParameters
{
    protected $gateway = null;

    protected $method  = null;

    protected $redirectUri = null;

    protected $stateless;

    protected $scopes = [];
    /**
     * @return boolean
     * */
    protected function useState()
    {
        return !$this->stateless;
    }

    /**
     * @return boolean|string
     * */
    public function makeState()
    {
        return null;
    }

    /**
     * @param array $scopes
     * @param string $separator
     * @return string
     * */
    public function formatScopes(array $scopes, $separator)
    {
        return implode($separator, $scopes);
    }

    /**
     * @return string
     * */
    protected function getAuthUrl()
    {

    }

    /**
     * @return array
     * */
    protected function getCodeField()
    {
        return [];
    }

    /**
     * @param string $redirect
     * @param array $query
     * @return RedirectResponse
     */
    public function redirect($redirect = null, array $query = [])
    {
        // TODO: Implement redirect() method.

        $state = null;
        $query = count($query) > 0 ? '?'.http_build_query($query) : '';
        if (!is_null($redirect)) {
            $this->redirectUri = $redirect.$query;
        }

        return new RedirectResponse($this->getAuthUrl());
    }

    /**
     * @param array$scopes
     * @return $this
     * */
    protected function scopes(array $scopes)
    {
        // TODO: Implement scopes() method.
        $this->scopes = $scopes;

        return $this;
    }
}