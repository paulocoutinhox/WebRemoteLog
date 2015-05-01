<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class LogHistory extends ActiveRecord
{

	const TYPE_TRACE    = 1;
	const TYPE_DEBUG    = 2;
	const TYPE_INFO     = 3;
	const TYPE_WARNING  = 4;
	const TYPE_ERROR    = 5;
	const TYPE_FATAL    = 6;

	public static function collectionName()
	{
		return 'log_history';
	}

	public function attributes()
	{
		return ['_id', 'token', 'type', 'message', 'created_at'];
	}

	public function rules()
	{
		return [
			[['token', 'type'], 'required'],
			['type', 'number'],
			['type', 'validateType'],
		];
	}

	public function validateType($attribute, $params)
	{
		if (!$this->hasErrors())
		{
			if ((int)$this->$attribute < 1 || (int)$this->$attribute > 6)
			{
				$this->addError($attribute, 'O tipo é inválido');
			}
		}
	}

}