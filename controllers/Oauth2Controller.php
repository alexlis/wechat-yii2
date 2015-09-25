<?php

namespace app\controllers;

use Yii;
// use yii\filters\AccessControl;
// use yii\web\Controller;
// use yii\filters\VerbFilter;
// use app\models\LoginForm;
// use app\models\ContactForm;
use yii\authclient\OAuth2 as OA2;

class Oauth2Controller extends AuthController
{
	public function InitData($OA2) {
// https://open.weixin.qq.com/connect/qrconnect?appid=wxbdc5610cc59c1631&redirect_uri=https%3A%2F%2Fpassport.yhd.com%2Fwechat%2Fcallback.do&response_type=code&scope=snsapi_login&state=3d6be0a4035d839573b04816624a415e#wechat_redirect


		// $OA2->clientId = 'clientId'; 
		// $OA2->clientSecret = 'clientSecret';
		// // $OA2->redirect_uri = 'http://123.com';
		$OA2->authUrl = "https://open.weixin.qq.com/connect/oauth2/authorize";
		// $OA2->scope = 'scope_login';

	
	}
	public function actionOauthVerify() { print_r("   hellohello!    "); exit;
		// $data = [];
		// $data['appid'] = 'wxbdc5610cc59c1631'; 
		// $data['redirect_uri'] = 'https://passport.yhd.com/wechat/callback.do?';
		// $data['scope'] = 'snsapi_login';
		// $data['state'] = '3d6be0a4035d839573b04816624a415e';

		// $OAClient = new OA2();
		// $this->InitData($OAClient);
		// $url = 
		// $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxbdc5610cc59c1631&redirect_uri=https%3A%2F%2Fpassport.yhd.com%2Fwechat%2Fcallback.do&response_type=code&scope=snsapi_userinfo&state=3d6be0a4035d839573b04816624a415e#wechat_redirect';
		// Yii::$app->getResponse()->redirect($url); // Redirect to authorization URL.

 	// 	// After user returns at our site:
 	// 	$code = $_GET['code'];  print_r($code);exit;
 	// 	$accessToken = $OAClient->fetchAccessToken($code); // Get access token
	}
}