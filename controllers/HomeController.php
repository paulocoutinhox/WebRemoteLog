<?php

namespace app\controllers;

use Yii;

class HomeController extends BaseController
{

	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

    public function actionIndex()
    {
        return $this->render('index');
    }

}
