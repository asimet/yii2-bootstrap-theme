<?php

use yii\helpers\Html;

segic\theme\web\AdminLteAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/segic/usach-theme-yii2/assets');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="login-page">
        <?php $this->beginBody() ?>
        <?= $content ?>
        <?php $this->endBody() ?>
        <footer class="footer">
            <div class="container">
                <div class="pull-left text-muted" style="font-size: 12px;">
                    <a href="http://www.asimet.cl/">Asimet</a><br>
                    Dirección: Av. Andrés Bello 2777, Of. 401.<br>
                    Las Condes. Chile. - Fono +56 22421 6501<br>
                </div>
                <div class="pull-right"><img src="<?= $directoryAsset ?>/img/logo-footer.png" alt="Segic"/></div>  
            </div>
            <div class="clearfix"></div>
        </footer>
    </body>
</html>
<?php $this->endPage() ?>
