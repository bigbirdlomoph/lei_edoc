<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */

$this->title = Yii::t('app', 'Update Edoc: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Edocs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'serial_doc' => $model->serial_doc]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="edoc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
