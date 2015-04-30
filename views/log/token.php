<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="log-token">

    <div class="jumbotron">
        <h1><?php echo(Yii::$app->params['appName']); ?></h1>

		<p class="lead">Olá, informe um token único que representará a sua sessão de log.</p>

		<?php
		$form = ActiveForm::begin([
			'id'     => 'form',
			'method' => 'get',
			'action' => Url::to(['/log/index']),
		]);
		?>

			<div class="form-group">
				<label for="token">Token:</label>
				<input type="text" class="form-control input-lg" id="token" name="token" placeholder="Informe o token da sua sessão" value="<?php echo($token); ?>" style="text-align: center;">
			</div>

			<p>
				<button class="btn btn-lg btn-success" type="submit">Continuar</button>
			</p>

		<?php ActiveForm::end() ?>
    </div>

</div>
