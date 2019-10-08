<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EdocSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="edoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'serial_doc') ?>

    <?= $form->field($model, 'date_doc') ?>

    <?= $form->field($model, 'document_name') ?>

    <?= $form->field($model, 'from_gov') ?>

    <?php // echo $form->field($model, 'to_gov') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php  echo $form->field($model, 'dep_status') ?>

    <?php  echo $form->field($model, 'created_at') ?>

    <?php  echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
