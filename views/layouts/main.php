<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(["charset" => Yii::$app->charset], "charset");
$this->registerMetaTag([
    "name" => "viewport",
    "content" => "width=device-width, initial-scale=1, shrink-to-fit=no",
]);
$this->registerMetaTag([
    "name" => "description",
    "content" => $this->params["meta_description"] ?? "",
]);
$this->registerMetaTag([
    "name" => "keywords",
    "content" => $this->params["meta_keywords"] ?? "",
]);
$this->registerLinkTag([
    "rel" => "icon",
    "type" => "image/x-icon",
    "href" => Yii::getAlias("@web/favicon.ico"),
]);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); ?>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody(); ?>

<header id="header">

</header>

<main id="main" class="flex-shrink-0" role="main">
    <?= $content ?>
</main>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
