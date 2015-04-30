<?php
use yii\helpers\Html;

$this->title = $name;
?>
<div class="home-error">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="alert alert-danger">
		<?= nl2br(Html::encode($message)) ?>
	</div>

	<p>
		Desculpe, ocorreu um erro ao processar sua requisição.
	</p>
	<p>
		Por favor, entre em contato conosco se você continuar recendo esta mensagem de erro. Obrigado.
	</p>

</div>