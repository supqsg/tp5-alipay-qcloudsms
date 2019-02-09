<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/7
 * Time: 18:54
 */

namespace app\common\lib;
use alipay\pagepay\builderModel\AlipayTradePagePayContentBuilder;
use alipay\pagepay\service\AlipayTradeService;


/**
 * 支付宝沙箱基础类库封装
 * Class Qcloudsms
 * @package app\common\lib
 */
class AliPay
{
    /**
     * 静态变量保存类实例
     * @var null
     */
    private static $instance = null;
    /**
     * Qcloudsms constructor.
     */
    private function __construct()
    {
        //声明私有构造方法杜绝外部有new创建对象
    }

    /**
     * 单列模式唯一入口
     */
    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 1、提供用于外部请求支付二维码的接口
     */
    public function doPay($body,$subject,$total_amount,$out_trade_no)
    {
        //构造参数
        $payRequestBuilder = new AlipayTradePagePayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setOutTradeNo($out_trade_no);
        $aop = new AlipayTradeService(config('alipay'));
        /**
         * pagePay 电脑网站支付请求
         * @param $builder 业务参数，使用buildmodel中的对象生成。
         * @param $return_url 同步跳转地址，公网可以访问
         * @param $notify_url 异步通知地址，公网可以访问
         * @return $response 支付宝返回的信息
         */
        $response = $aop->pagePay($payRequestBuilder,config('alipay.return_url'),config('alipay.notify_url'));

        //输出表单
        var_dump($response);
    }

}