<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/5/24
 * Time: 上午10:12
 */

namespace EasyPay\AliPayment\Oauth;


use EasyPay\AliPayment\Application;
use EasyPay\Kernel\BaseClient;
use EasyPay\Kernel\Oauth\OauthInterface;
use EasyPay\Kernel\Oauth\Traits\HasOauthParameters;
use Symfony\Component\HttpFoundation\Request;

class Client extends BaseClient implements OauthInterface
{
    use  HasOauthParameters;
    /**
     * @var Request
     * */
    protected $request = null;

    /**
     * @var Application
     * */
    protected $app = null;

    public function __construct(Request $request, Application $app)
    {
        $this->gateway = 'https://openauth.alipay.com';
        $this->method  = '/oauth2/publicAppAuthorize.htm';
        $this->request = $request;
        $this->app = $app;
        $this->scopes(['auth_base']);
    }

    public function authCode()
    {
        // TODO: Implement authCode() method.
        return $this->request->get('auth_code', null);
    }
}