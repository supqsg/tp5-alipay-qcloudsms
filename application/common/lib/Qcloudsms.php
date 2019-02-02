<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/2
 * Time: 8:12
 */
namespace app\common\lib;

use qcloudsms\src\SmsSingleSender;

/**
 * 腾讯云短信基础类库封装
 * Class Qcloudsms
 * @package app\common\lib
 */
class Qcloudsms
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
     * 1、提供用于外部请求发送短信的接口
     * 2、只是单发模板短信的接口，其他形式的可参考开发手册
     * @param string $phone
     */
    public function sendSms($phone = '13544573604')
    {
        $code = rand(1000,9999);
        $params = [$code,config('sms.totaltime')];
        try {
            $sendRequest = new SmsSingleSender(config('sms.appid'), config('sms.appkey'));
            $result = $sendRequest->sendWithParam("86", $phone, config('sms.templateId'),
                $params, config('sms.smsSign'), "", "");  // 签名参数未提供或者为空时，会使用默认签名发送短信
            var_dump(json_decode($result));
        } catch(\Exception $e) {
            var_dump($e);
        }
    }

}