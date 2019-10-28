<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\daterange\DateRangePicker;

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

    <div class="input-group">
      <?= Html::activeTextInput($model, 'q',['class'=>'form-control','placeholder'=>'ค้นหาด้วย เลขหนังสือ หรือ เรื่อง...']) ?>
      
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> ค้นหา</button>
      </span>
    </div>

        <!-- <div class="col-xs-6">
          <?php
            echo DateRangePicker::widget([
                'model'=>$model,
                'attribute'=>'created_at',
                'convertFormat'=>true,
                'startAttribute'=>'created_at',
                'endAttribute'=>'created_at',
                'pluginOptions'=>[
                    'timePicker'=>false,
                    'timePickerIncrement'=>30,
                    'locale'=>[
                        'format'=>'Y-m-d'
                    ]
                ]
            ]);
            ?>
        </div> -->

    <?php ActiveForm::end(); ?>

</div>
