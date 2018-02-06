<?php

//if(file_exists(__DIR__ .'/config-prod.php')) return ['prod',$config = include './config-prod.php'];

return ['test',[
		'version' => '5.1.0',
		'merId' => '700000000000001',
		'returnUrl' => 'http://dev.git.com/union-pay/demo/payreturn.php', //前台返回
		'notifyUrl' => 'https://Yoursites.com/demo/paynotify.php', //后台通知
		'frontFailUrl'   => 'http://dev.git.com/union-pay/demo/payfail.php',
		'refundnotifyUrl' => 'https://Yoursites.com/demo/refundnotify.php',
		'signCertPath' => dirname(__FILE__).'/cert/acp_test_sign.pfx',
		'signCertPwd' => '000000', //签名证书密码
		'verifyCertPath' => dirname(__FILE__).'/cert/5.0.0/acp_test_verify_sign.cer',  //v5.0.0 required NOTE:该测试环境证书已失效，推荐使用5.1.0
		'verifyRootCertPath' => dirname(__FILE__).'/cert/5.1.0/acp_test_root.cer', //v5.1.0 required
		'verifyMiddleCertPath' => dirname(__FILE__).'/cert/5.1.0/acp_test_middle.cer', //v5.1.0 required
		'encryptCertPath' => dirname(__FILE__).'/cert/acp_test_enc.cer',
		'ifValidateCNName' => false, //正式环境设置为true
	]
];