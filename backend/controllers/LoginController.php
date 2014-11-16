<?php
/**
 * Created by PhpStorm.
 * User: linzy
 * Date: 9/28/2014
 * Time: 3:44 PM
 */

namespace backend\controllers;


use common\models\LoginForm;

class LoginController extends BackendBaseController{
    public $layout = 'login';

    public function actionIndex()
    {
        $model = new LoginForm();
        $this->render('index',['model'=>$model]);
    }

    public function actionLogout()
    {
        $this->redirect('index');
    }
} 