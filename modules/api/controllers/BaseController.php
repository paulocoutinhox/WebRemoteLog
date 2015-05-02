<?php

namespace app\modules\api\controllers;

use yii\web\Controller;

class BaseController extends Controller
{

	public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

}
