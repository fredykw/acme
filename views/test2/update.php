<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Test2 */

$this->title = 'Update Test2: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Test2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
