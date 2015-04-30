<?php

namespace app\controllers;

use app\models\Util;
use Yii;

class LogController extends BaseController
{

    public function actionIndex()
    {
		$token = Yii::$app->request->get('token');

		if (empty($token))
		{
			$this->redirect('log/token');
		}

		$this->layoutMainContainerClass = 'container-fluid';

        return $this->render('index', [
			'token' => $token
		]);
    }

    public function actionToken()
    {
		$token = Yii::$app->request->get('token');

		if (empty($token))
		{
			$token = Util::generateToken(Yii::$app->params['tokenSize']);
		}

        return $this->render('token', [
			'token' => $token
		]);
    }

}
