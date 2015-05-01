<?php

namespace app\controllers;

use app\models\LogHistory;
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

	public function actionTest()
	{
		$token = Util::generateToken(Yii::$app->params['tokenSize']);

		$a = new LogHistory();
		$a->token = $token;
		$a->type = LogHistory::TYPE_ERROR;
		$a->message = 'dsaldkjsald sadkljsadklsajd sajdkl asdjklas djklasd akjsld alsjdas coação';
		$a->created_at = time();
		$a->save();

		var_dump($a->getErrors());

		exit('OK');
	}

}
