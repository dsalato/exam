<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Abonent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="abonent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addresses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'face')->dropDownList(['Физическое'=>'Физическое лицо', 'Юридическое'=>'Юридическое лицо']) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
