<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="edoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container">

        <div class="row">
        <div class="col-md-3">
                                 <?= $form->field($model, 'serial_doc')->widget(MaskedInput::className(),[
                                    'mask' => '9999.999.99/9999'
                                ])?>
                                </div>

        <?= $form->field($model, 'serial_doc')->textInput(['maxlength' => true]) ?>

        <!-- <?= $form->field($model, 'date_doc')->textInput() ?> -->

        <?= $form->field($model, 'date_doc')->widget(DatePicker::ClassName(),
            [
            'name' => 'check_issue_date', 
            'options' => ['placeholder' => 'Select date ...'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
        ]);?>

        <?= $form->field($model, 'document_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'from_gov')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'to_gov')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

        <!-- <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?> -->

        <!-- <?= $form->field($model, 'dep_status')->textInput(['maxlength' => true]) ?> -->

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

    <?php ActiveForm::end(); ?>

</div>
