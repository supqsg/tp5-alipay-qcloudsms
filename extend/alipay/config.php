<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092400585151",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA6yuWImxw9oFDt6yI8vHLUpo+JCp6eMunwlDps1kw6E5/X2SvhDgMn5sfhVX4yHp68LJK3q1gJmNhzzJJelErRsxUHIOAGwazCKq2zELwojuOM8OC+2W5EWzxFM4m6LOrYx7AgNoQKNV43inURgzv6JhBPBu5HlHz1WVtvFUoFyG8Z5vb/jpiwAzb3GAHIiI+KsN7IkfO9y39CSYjaieGB+m+xmJ5lRiwxMkY1dEjgdUJiU/eRDi/bU/rlXhm9Iwga4VWSwwjHQYt/1or98KullDs1isZW6kO9FNciwNpu3NiyLBWoUfvOI4hY9Bt3QpPFiTTYypfbrqMM4OFK9OZ2wIDAQABAoIBAQDQjxoZs0RHSQJOPSRDGK6xtfrQRh/RSwOfL/TiSoI2M4+AgSGrR63iSkcdD86PtRecqPH/I5E22kJe54EEikGwCvu5QeH1le5nDEcLRX500g5d19EstNz5GD2BrwYQr26afCZK35kfLZqApGYOLeEBzS1laky1GAb/xHEaagcg4uXZ801MtdpLNwcUzsBYhGedOimHn/xGfmE2ORXBt+M4dKw7fy9/A5NsxZDslfdeiqJagl8YcI+BD8OlvH+HWuxNPf1iuH5ajwBAXDDRgK1hZkweELBWmSan9UQgTlMnWNP6ZKz5KPLmBo4fbt8Vb4pl1oyCOEJSeZe2fc/sX57RAoGBAP643AyHsDMr8gtZBBaNr4B9eaUAZXhj20wK6xAnDmBOP4f042LfFQyorJMb0RDNsJiEvAvx3zQC11Xg6utLFwBWEonfQO4nf4Y/TRVWuortaYUvaLiuZPPzhGrQmV9g6pVWKr6sDw3Ti0QnDN5Bm1HIt0iGCNK/DEsQS3JKTfDjAoGBAOxZncwEwmbcRLNzx+H6ONrjziE7Vyl0/pLT5HRSpMYJwjmZ71cPtrMSGqx8hXQXdjWBs0JL3iL64ROVDyGkK4WA438RlWeAbrQxDb+Qh6u0VvZhiZHW+blLm5Ku4GdByza2RmYsYsN5ZeoPKJ4wgA7bh4uygRrk/E6/V6KkWlypAoGAVYPWTFaZbvSH9AtUdgXnL6nwVtbFOh+8FdFsjSWvi+F5LrmmRSFDvdY66cBi9dM4QFv/jbsMBjgV9vzloUy6UiCTZLoQ4GNeSsGhrVJKmi2OSWpbK/VQax4MDJgvhXfSCYS+IPk+rJOio6TAizVXYaOS9MQa3jXJeMHlsl8Dv6UCgYBPy1m4/Ypci9Ut+NLs+jujuvFmys/8kSE5lQw2MYiry7OlGtFxRT7baitTPJ8ZuKoSGn3YziBrEuRWZia7pt+CrSchSWB1lyjI8R7BJByJ3dLWT8vQTxH0exBFD4F3mwDusc9Gw4l8kUnVIdUGwz0YxwkWIufvmouMUpFVucNAMQKBgQCVp0xc9Lo8T4KdWVOoerUZdswgPq1iJkpqcxsNtnK9NWGKGpDyxVpDiEeqCwvqAU53NsaRgz00Pv6GuYdbszWfDqKQily1K9KDj7kDckbPhyh20mPCR1TMl4p3CV7MWvDs1GlWNvY5lpRrGNFqDzAvx1pwhbajlprOKp0OtAv+Rw==",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxZU3yikayl1LF0g7RowQ+hzKovwEwyMJQsmpb2aozTPAMdbUcZhY+iCTCEz/+MmrDCcvUWkkaPJCp0+r1eRaEX9iCaJNN8K6VwbbHSlMr8I2J3hbq0p+GhLXJkX7Va/mjHHcejKyTgYwDb00Ru1ie0vuZ1eAODtG8cn79Qr+uU7IX8T0+9oRdbXPNvcpswC7mWO6fDXnX7JjVjYurVqMfwah6YvNi/moDuacR4DEK0pehuh7btFFdsj3Mdhu6y6miXoYy5wjwdvpByKbQpoxnV/DcKXLGUM32dLONEPWoYqQ8Tw3wrv9gLgpJPgdjLapcQGAsOkSZbtb7gn+gloPdwIDAQAB",
);