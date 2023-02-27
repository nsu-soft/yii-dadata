<?php

namespace app\controllers;

use nsusoft\dadata\helpers\SuggestHelper;
use yii\web\Controller;
use yii\web\Response;

class SuggestController extends Controller
{
    /**
     * @param string $query
     * @return Response
     */
    public function actionAddress(string $query): Response
    {
        var_dump(SuggestHelper::address($query));
        return new Response();
    }

    /**
     * @param string $query
     * @return Response
     */
    public function actionEmail(string $query): Response
    {
        var_dump(SuggestHelper::email($query));
        return new Response();
    }
}