<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/5
 * Time: 下午4:37
 */
namespace app\api\controller;

use think\Controller;
use qcloudsms\src\SmsSingleSender;

class Test extends Controller {

    // 短信应用SDK AppID
    private  $appid = 1400182740; // 1400开头

    // 短信应用SDK AppKey
    private  $appkey = "a908f30ff7d120bc77afea029c2f4629";

    // 需要发送短信的手机号码
    private  $phoneNumbers = ["13544573604"];

    // 短信模板ID，需要在短信应用中申请
    private  $templateId = 275932;  // NOTE: 这里的模板ID`7839`只是一个示例，真实的模板ID需要在短信控制台中申请

    private  $smsSign = "何巨雄编程技术分享"; // NOTE: 这里的签名只是示例，请使用真实的已申请的签名，签名参数使用的是`签名内容`，而不是`签名ID`
    public function index() {
        return [
            'sgsg',
            'sgsgs',
        ];
    }

    public function sms()
    {
        try {
            $ssender = new SmsSingleSender($this->appid, $this->appkey);
            $params = ["5678","1"];
            $result = $ssender->sendWithParam("86", $this->phoneNumbers[0], $this->templateId,
                $params, $this->smsSign, "", "");  // 签名参数未提供或者为空时，会使用默认签名发送短信
            $rsp = json_decode($result);
            echo $result;
        } catch(\Exception $e) {
            echo var_dump($e);
        }
    }

}