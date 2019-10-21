<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */

$this->title = Yii::t('app', 'Update สถานะการนำส่งหนังสือ: {name}', [
    'name' => $model->serial_doc,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Edocs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = [
    'label' => $model->serial_doc, 'url' => 
        [
            'view', 'id' => $model->id, 
            'serial_doc' => $model->serial_doc
            ]
    ];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="edoc-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
