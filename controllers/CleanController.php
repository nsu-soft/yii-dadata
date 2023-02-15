<?php

namespace app\controllers;

use nsusoft\dadata\helpers\CleanHelper;
use yii\web\Controller;
use yii\web\Response;

class CleanController extends Controller
{
    /**
     * @param string $source
     * @return Response
     */
    public function actionAddress(string $source): Response
    {
        var_dump(CleanHelper::address($source));
        exit;
    }
}