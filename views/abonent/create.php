<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Abonent $model */

$this->title = 'Create Abonent';
$this->params['breadcrumbs'][] = ['label' => 'Abonents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abonent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
