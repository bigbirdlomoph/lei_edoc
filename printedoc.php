<?php

//use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\daterange\DateRangePicker;
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;


$this->title = 'พิมพ์เอกสารลงรับหนังสือราชการ';
$this->params['breadcrumbs'][] = $this->title;


?>
    <!-- <div class="form-date">
    <?php $form = ActiveForm::begin(); ?>
        <div class="panel panel-heading col-sm-6 col-md-6">
            <?=DateRangePicker::widget([
                    'name'=>'date_range',
                    'attribute'=>'date_range',
                    'convertFormat'=>true,
                    'startAttribute'=>'datetime_min',
                    'endAttribute'=>'datetime_max',
                    'language' => 'th',
                    'options' => ['placeholder' => 'เลือกวันที่เริ่ม'],
                    'pluginOptions'=>[
                        'timePicker'=>true,
                        'timePickerIncrement'=>30,
                        'format'=>'yyyy-mm-dd H:i:s',
                        'todayHighlight' => true
                    ]
                ]);?> 

                <?= 
                    DateRangePicker::widget([
                        'name'=>'created_at',
                        'attribute' => 'created_at',
                        'useWithAddon'=>true,
                        'convertFormat'=>true,
                        'presetDropdown'=>true,
                        'hideInput'=>true,
                        'startAttribute' => 'created_at',
                        'endAttribute' => 'created_at',
                        'language' => 'th',
                        'options' => ['placeholder' => 'เลือกวันที่เริ่ม'],
                            'pluginOptions'=>[
                                'locale'=>[
                                    'format' => 'Y-m-d H:i:s',
                            'autoclose' => true,
                            'timePicker'=>true,
                            'todayHighlight' => true
                                ],
                            ]
                        ]);
                ?>
            </div>

                    <div class="form-group panel panel-heading col-sm-4 col-md-4">
                        <?= Html::submitButton('ค้นหา', ['class'=> 'btn btn-primary']); ?>
                        </div>

            <?php ActiveForm::end(); ?>
        </div> -->

        <div class="form-date">
            <?php $form = ActiveForm::begin(); ?>
                <div class="panel panel-heading col-sm-4 col-md-4">
                    <?= DateTimePicker::widget([
                        'name'=>'date1',
                        'attribute'=>'date1',
                        'language' => 'th',
                        'options' => ['placeholder' => 'เลือกวันที่เริ่ม'],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'timePicker'=>true,
                            'format' => 'yyyy-mm-dd H:i:s',
                            'todayHighlight' => true
                        ]
                    ]);?>
                    </div>
            
                <div class="panel panel-heading col-sm-4 col-md-4">
                    <?= DateTimePicker::widget([
                        'name'=>'date2',
                        'attribute'=>'date2',
                            'language' => 'th',
                            'options' => ['placeholder' => 'เลือกวันที่สิ้นสุด'],
                            'pluginOptions' => [
                                'autoclose' => true,
                                'timePicker'=>true,
                                'format' => 'yyyy-mm-dd H:i:s',
                                'todayHighlight' => true
                            ]
                    ]);?>
                </div>

                    <div class="form-group panel panel-heading col-sm-4 col-md-4">
                        <?= Html::submitButton('ค้นหา', ['class'=> 'btn btn-primary']); ?>
                        </div>

            <?php ActiveForm::end(); ?>
        </div>
    
    <!-- <?php echo Yii::$app->request->post('date_range'); ?> -->

    <div class="col-md-12 col-xs-12">
        <div class="body-content">
            
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'resizableColumns'=>true,
                    'floatHeader'=>false,
                    'floatHeaderOptions'=>[
                        'scrollingTop'=>'50'
                    ],
                    'pjax'=>true,
                    'panel'=>[
                        'before' => ' ',
                        'type'=>'primary', 
                        'heading' => 'พิมพ์....' 
                    ],
                    //'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'serial_doc',
                            'header' => 'เลขที่หนังสือ',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['serial_doc']) ? '-' : $data['serial_doc']; 
                            },
                            //'group' => true,
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'date_doc',
                            'header' => 'ลงวันที่',
                            'format' => 'html',
                            // 'value' => function ($data) {
                            //     return $data->DateThai($data['date_doc']);
                            // }
                            'value' => function($data) {
                                return empty($data['date_doc']) ? '-' : $data['date_doc'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'document_name',
                            'header' => 'เรื่อง',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['document_name']) ? '-' : $data['document_name']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'from_gov',
                            'header' => 'จาก',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['from_gov']) ? '-' : $data['from_gov']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'to_gov',
                            'header' => 'ถึง',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['to_gov']) ? '-' : $data['to_gov']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'department_name',
                            'header' => 'การปฏิบัติ',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['department_name']) ? '-' : $data['department_name']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'recipient',
                            'header' => 'ผู้รับ',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['recipient']) ? '-' : $data['recipient']; 
                            }
                        ],
                    ]
                ]);
                ?>
            </div>
                <p>
                    <?= Html::a('กลับหน้าแรก', ['/site/index'], ['class' => 'btn btn-primary']) ?>
                    </p> 
        </div>
        
                      
    