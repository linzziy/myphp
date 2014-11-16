<?php
/**
 * Created by PhpStorm.
 * User: linzy
 * Date: 2014/9/27
 * Time: 11:06
 */
namespace backend\controllers;

use yii\web\Controller;

class BackendBaseController extends Controller {
    //定义模板渲文件染后缀
    //const TPL_FILEEXT='.php';

    public function render($view, $params = [])
    {
        //$view .= self::TPL_FILEEXT;
        echo parent::render($view,$params);
    }

    public function renderPartial($view, $params = [])
    {
        //$view .= self::TPL_FILEEXT;
        echo parent::renderPartial($view, $params);
    }

    public function renderAjax($view, $params = [])
    {
        //$view .= self::TPL_FILEEXT;
        echo parent::renderAjax($view, $params);
    }

    public function renderFile($view, $params = [])
    {
        //$view .= self::TPL_FILEEXT;
        echo parent::renderFile($view, $params);
    }
}