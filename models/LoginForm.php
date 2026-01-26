<?php

namespace app\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $phone;

    public function attributeLabels()
    {
        return [
            "phone" => "Telefon raqam",
        ];
    }

    public function rules()
    {
        return [["phone", "required"]];
    }
}
