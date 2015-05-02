<?php

namespace app\modules\api\controllers;

use app\models\LogHistory;
use com\prsolucoes\WebResponse;
use Yii;

class LogController extends BaseController
{

    public function actionAdd()
    {
		$response = new WebResponse();
		$response->setSuccess(false);

		$logHistory = new LogHistory();
		$logHistory->token      = Yii::$app->request->post('token');
		$logHistory->type       = Yii::$app->request->post('type');
		$logHistory->message    = Yii::$app->request->post('message');
		$logHistory->created_at = time();

		if ($logHistory->save())
		{
			$response->setSuccess(true);
		}
		else
		{
			$response->setMessage('validate');
			$response->mergeModelErrors($logHistory);
		}

		return $response;
    }

}
