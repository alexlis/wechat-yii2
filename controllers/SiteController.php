<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller {
    public $_weixinToken = "wxyii";

    public function actions() {
      return [
          'error' => [
              'class' => 'yii\web\ErrorAction',
          ]
      ];
    }

    public function actionIndex() {
      $weixin = new Weixin($_GET);
      $weixin->token = $this->_weixinToken;
      // $weixin->debug = true;
      // return $this->render('index');
      //网址接入时使用
      if (isset($_GET['echostr'])) {
          $weixin->valid();
      }
       
      $weixin->init();
      $reply = '';
      $msgType = empty($weixin->msg->MsgType) ? '' : strtolower($weixin->msg->MsgType);
      switch ($msgType) {
        case 'text':
            //你要处理文本消息代码
            break;
        case 'image':
            //你要处理图文消息代码
            break;
        case 'location':
            //你要处理位置消息代码
            break;
        case 'link':
            //你要处理链接消息代码
            break;
        case 'event':
            //你要处理事件消息代码
            break;
        default:
            //无效消息情况下的处理方式
            break;
      }
      $weixin->reply($reply);
    }
}
