<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Abonent $model */

$this->title = 'Update Abonent: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Abonents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="abonent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
