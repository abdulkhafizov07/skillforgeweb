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

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Quantico:ital,wght@0,400;0,700;1,400;1,700&family=TASA+Explorer:wght@400..800&display=swap" rel="stylesheet">
</head>
<body>
<?php $this->beginBody(); ?>

<?= $this->render("navbar.php") ?>

<main id="main" role="main">
    <?= $content ?>
</main>

<?php $this->endBody(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>
<?php $this->endPage(); ?>
