<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblProduct */

$this->title = Yii::t('app', 'Create Tbl Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
