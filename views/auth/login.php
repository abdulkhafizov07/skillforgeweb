<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\RegisterForm $model */

$this->title = "Kirish - Skillforge";
?>

<div class="w-full h-screen flex items-center justify-center bg-gray-100">

    <div class="min-w-md max-w-md p-12 bg-white rounded-3xl border border-gray-200">

        <div class="mb-3">
            <h2 class="text-2xl text-center font-bold uppercase">Kirish</h2>
            <p class="text-gray-500"><span class="text-red-400 font-mono">&ndash; Skillforge</span> hisobingizga kiring</p>
        </div>

        <?php $form = ActiveForm::begin([
            "fieldConfig" => [
                "template" => "{label}\n{input}\n{error}",
                "labelOptions" => [
                    "class" => "block mb-1 text-sm font-medium text-gray-700",
                ],
                "inputOptions" => [
                    "class" =>
                        "w-full px-4 h-11 border border-gray-300 rounded-xl outline-none ring-offset-2 focus:ring-2 focus:ring-indigo-500 transition-all ease-out duration-300",
                ],
                "errorOptions" => [
                    "class" => "mt-1 text-sm text-red-500",
                ],
            ],
        ]); ?>

        <script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-login="abdulkhafizov07_skillforge_bot" data-size="large" data-auth-url="https://localhost:8080/auth/telegram" data-request-access="write"></script>

        <?php ActiveForm::end(); ?>

    </div>

</div>
