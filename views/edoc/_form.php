<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="edoc-form">

    <?php $form = ActiveForm::begin([]); ?>

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">ลงรับสารบรรณ สสจ.เลย</div>
                <div class="panel-body">

                    <div class="row">

                            <div class="col-md-2">
                                <?= $form->field($model, 'serial_doc')->textInput(
                                    [
                                        'maxlength' => true,
                                        'placeholder' => 'สธ0032.012.0.1/1234',
                                        ]) ?>
                                </div>
                            
                            <div class="col-md-3">
                                <?= $form->field($model, 'date_doc')->widget(DatePicker::ClassName(),
                                    [
                                    'name' => 'check_issue_date', 
                                    'options' => ['placeholder' => 'ลงวันที่...'],
                                    'pluginOptions' => [
                                        'format' => 'yyyy-mm-dd',
                                        'todayHighlight' => true
                                    ]
                                ]);?>
                            </div>

                            <div class="col-md-6">
                                <?= $form->field($model, 'document_name')->textInput(['maxlength' => true]) ?>
                                </div>

                            <div class="col-md-2">
                                <?= $form->field($model, 'from_gov')->textInput(['maxlength' => true]) ?>
                                </div>
                            
                            <div class="col-md-2">
                                <?= $form->field($model, 'to_gov')->textInput(['maxlength' => true]) ?>
                                </div>
                            
                            <div class="col-md-2">
                                <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>
                                </div>
                            
                            <div class="col-md-4">
                                <!-- <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?> -->
                                </div>
                            
                            <div class="col-md-4">
                                <?= $form->field($model, 'dep_status')->dropDownList([
                                    '1' => 'รอดำเนินการ',
                                    '2' => 'ดำเนินการแล้ว'],
                                        ['prompt'=>'กรุณาเลือก...']); ?>
                                </div>

                            <div class="col-md-4">
                                <!-- <?= $form->field($model, 'dep_status')->textInput(['maxlength' => true]) ?> -->
                                </div>

                            <div class="col-md-12">
                                <?= Html::submitButton(Yii::t('app', 'บันทึก'), ['class' => 'btn btn-primary btn-md']) ?>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end panel body -->
            </div>
            <!-- end panel -->

        </div>
        <!-- end container -->

    <?php ActiveForm::end(); ?>

</div>
