<?php

namespace app\controllers;

use nsusoft\dadata\helpers\SuggestHelper;
use yii\web\Controller;
use yii\web\Response;

class SuggestController extends Controller
{
    /**
     * @param string $source
     * @return Response
     */
    public function actionAddress(string $source): Response
    {
        var_dump(SuggestHelper::address($source));
        exit;
    }
}