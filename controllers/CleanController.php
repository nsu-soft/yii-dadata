<?php

namespace app\controllers;

use nsusoft\dadata\helpers\CleanHelper;
use yii\web\Controller;
use yii\web\Response;

class CleanController extends Controller
{
    /**
     * @param string $query
     * @return Response
     */
    public function actionAddress(string $query): Response
    {
        var_dump(CleanHelper::address($query));
        exit;
    }
}