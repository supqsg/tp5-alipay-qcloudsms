<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/5
 * Time: 下午4:37
 */
namespace app\api\controller;

use app\common\lib\AliPay;
use think\Config;
use think\Controller;
use app\common\lib\Qcloudsms;

class Test extends Controller {
    /**
     * 请求短信类库接口
     */
    public function sms()
    {
        return Qcloudsms::getInstance()->sendSms();
    }

    public function aliPay()
    {
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = time();

        //订单名称，必填
        $subject = 'test';

        //付款金额，必填
        $total_amount = 22;

        //商品描述，可空
        $body = 'test';
        //调用发起支付方法
        AliPay::getInstance()->doPay($body,$subject,$total_amount,$out_trade_no);

    }

    public function notifyUrl()
    {
        return 'neotifyUrl';
    }

    public function returnUrl()
    {
        return 'returnUrl';
    }

}