<?php
/**
 * Created by PhpStorm.
 * User: linzy
 * Date: 2014/9/29
 * Time: 15:52
 */

namespace backend\controllers;


class DashboardController extends BackendBaseController{
    public $layout = 'metronic';

    public function actionIndex()
    {
        $this->render('index');
    }
} 