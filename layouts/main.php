<?php

use yii\helpers\Html;
use segic\theme\web\AdminLteAsset;

AdminLteAsset::register($this);
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
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <?php echo $this->render('header.php', ['directoryAsset' => $directoryAsset]); ?>
            <?php echo $this->render('left.php', ['directoryAsset' => $directoryAsset]); ?>
            <?php echo $this->render('content.php', ['content' => $content, 'directoryAsset' => $directoryAsset]); ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
