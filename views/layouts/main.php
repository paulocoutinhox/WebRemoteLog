<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$appName = Html::encode(Yii::$app->params['appName'] . (empty($this->title) ? '' : ' - ' . $this->title));
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<?= Html::csrfMetaTags() ?>
		<title><?php echo($appName); ?></title>
		<?php $this->head() ?>
		<script>
			var WEB_BASE_URL = '<?php echo(Url::base(true)); ?>';
		</script>
	</head>
	<body>

	<?php $this->beginBody() ?>

	<div class="wrap">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#nav-collapse" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo(Url::home()); ?>">
						<?php echo($appName); ?>
					</a>
				</div>
				<div id="nav-collapse" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo(Url::home()); ?>">Página inicial</a></li>
						<!--
							<li><a href="<?php echo(Url::to(['/site/about'])); ?>">Sobre</a></li>
							<li><a href="<?php echo(Url::to(['/site/contact'])); ?>">Fale conosco</a></li>
							-->
					</ul>
					<!--
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo(Url::to(['/controlpanel/default/index'])); ?>">Painel de controle</a>
						</li>
					</ul>
					-->
				</div>
			</div>
		</nav>

		<div class="<?php echo(empty(Yii::$app->controller->layoutMainContainerClass) ? 'container' : Yii::$app->controller->layoutMainContainerClass); ?>">
			<?php
			foreach (Yii::$app->session->getAllFlashes() as $key => $message)
			{
				echo '<br /><div class="alert alert-' . $key . '" role="alert">' . $message . '</div>';
			}
			?>

			<?php echo($content); ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; <?php echo(Yii::$app->params['appName']); ?> - <?= date('Y') ?></p>

			<p class="pull-right">Criado por: <a href="http://www.prsolucoes.com" title="PRSoluções" target="_blank">PRSoluções</a>
			</p>
		</div>
	</footer>

	<?php $this->endBody() ?>
	</body>
	</html>
<?php $this->endPage() ?>