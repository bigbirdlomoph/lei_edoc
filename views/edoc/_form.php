<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

use yii\widgets\MaskedInput;
use app\models\DepStatusEdoc;
use app\models\MainDepartment;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="edoc-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation'      => false,   //เปิดการ validate ด้วย AJAX
        'enableClientValidation'    => false,   // validate ฝั่ง client เมื่อ submit หรือ เปลี่ยนค่า
        'validateOnChange'          => false,   // validate เมื่อมีการเปลี่ยนค่า
        'validateOnSubmit'          => true,    // validate เมื่อ submit ข้อมูล
        'validateOnBlur'            => false,   // validate เมื่อเปลี่ยนตำแหน่ง cursor ไป input อื่น
    ]); ?>

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">ลงรับสารบรรณ สสจ.เลย</div>
                <div class="panel-body">

                    <div class="row">

                            <div class="col-md-6 col-xs-6">
                                <?= $form->field($model, 'serial_doc')->textInput(
                                    [
                                        'maxlength' => true,
                                        'placeholder' => 'สธ0032.012.0.1/1234',
                                        ]) ?>
                                </div>
                            
                            <div class="col-md-6 col-xs-6">
                                <?= $form->field($model, 'date_doc')->widget(DatePicker::ClassName(),
                                    [
                                    'name' => 'check_issue_date', 
                                    'options' => ['placeholder' => 'ลงวันที่...'],
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd',
                                        'todayHighlight' => true
                                    ]
                                ]);?>
                            </div>

                            <div class="col-md-6 col-xs-6">
                                <?= $form->field($model, 'document_name')->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'เรื่องหนังสือ']) ?>
                                </div>

                            <div class="col-md-3 col-xs-6">
                                <?= $form->field($model, 'from_gov')->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'ชื่อย่อหน่วยงาน']) ?>
                                </div>
                            
                            <!-- <div class="col-md-2">
                                <?= $form->field($model, 'to_gov')->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'ถึงกลุ่มงาน...']) ?>
                                </div> -->
                            <div class="col-md-3 col-xs-6">
                                <?= $form->field($model, 'to_gov')->dropDownList([
                                    'นพ.สสจ.' => 'นพ.สสจ.',
                                    'ผจว.' => 'ผู้ว่าราชการจังหวัด'],
                                        ['prompt'=>'กรุณาเลือก...']); ?>
                                </div>
                            
                            <!-- <div class="col-md-2 col-xs-6">
                                <?= $form->field($model, 'note')->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'กลุ่มงาน..']) ?>
                                </div> -->

                            <div class="col-md-6 col-xs-6">
                                <?= $form->field($model, 'note')->dropDownList(
                                    ArrayHelper::map(MainDepartment::find()->all(),
                                        'department_id',
                                        'department_name'),
                                        [
                                            'id'=>'department_id',
                                            'prompt'=>'กรุณาเลือก']); ?>
                                </div>
                            
                            <!-- <div class="col-md-4">
                                <?= $form->field($model, 'status')->textInput([
                                    'maxlength' => true]) ?>
                                </div> -->
                            
                            <!-- <div class="col-md-4">
                                <?= $form->field($model, 'dep_status')->dropDownList([
                                    '1' => 'รอดำเนินการ',
                                    '2' => 'ดำเนินการแล้ว',
                                    '3' => 'ปฏิเสธการรับหนังสือ'],
                                        ['prompt'=>'กรุณาเลือกกลุ่มงาน...']); ?>
                                </div> -->
                            
                            <div class="col-md-3 col-xs-6">
                                <?= $form->field($model, 'dep_status')->dropdownList(
                                    ArrayHelper::map(DepStatusEdoc::find()->all(),
                                    'dep_id',
                                    'dep_status'),
                                        [   'id'=>'dep_id',
                                            'prompt'=>'กรุณาเลือก']); ?>
                                </div>

                            <div class="col-md-4">
                                <!-- <?= $form->field($model, 'dep_status')->textInput([
                                    'maxlength' => true]) ?> -->
                                </div>

                            <div class="col-md-12 col-xs-12 col-lg-12">
                                <?= 
                                    Html::submitButton(Yii::t('app', 'บันทึก'), 
                                    [
                                        'class' => 'btn btn-primary btn-md',
                                        ]) ?>
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
