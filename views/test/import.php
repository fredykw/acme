<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Test */

$this->title = 'Import Test';
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_importform', [
        'model' => $model,
    ]) ?>

</div>

