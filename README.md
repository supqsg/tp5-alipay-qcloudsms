tp5封装支付宝扫码支付、腾讯短信等接口的类

使用说明
整个项目克隆下来部署好之后,修改配置文件夹下(/application/extra/)信息后,
调用接口(域名/index.php/api/test/sms),成功后即可实现调用腾讯云短信接口
调用接口(域名/index.php/api/test/alipay),成功后即可实现调用支付宝扫码支付接口

腾讯云短信 PHP SDK
https://github.com/qcloudsms/qcloudsms_php

支付宝电脑网站支付 PHP SDK
https://docs.open.alipay.com/270/106291/

封装的类目录:/application/common/lib/

