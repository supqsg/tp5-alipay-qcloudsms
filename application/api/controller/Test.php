<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/5
 * Time: 下午4:37
 */
namespace app\api\controller;

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

}