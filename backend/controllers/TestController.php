<?php
/**
 * Created by PhpStorm.
 * User: linzy
 * Date: 2014/9/27
 * Time: 10:24
 */

namespace backend\controllers;

class TestController extends BackendBaseController {
    public function actionIndex()
    {
        $this->render('index', ['username'=>'linzy']);
    }
} 