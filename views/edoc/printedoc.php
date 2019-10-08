<?php

//use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use yii\helpers\Html;
use yii\helpers\Url;
// use app\models\Edoc; 

$this->title = 'พิมพ์เอกสารลงรับหนังสือราชการ';
$this->params['breadcrumbs'][] = $this->title;

//$data = $dataProvider->getModels(); // get data from dataProvider


?>
    <div class="panel-heading">
        <h6 class="alert alert-info" role="alert"> <span class="glyphicon glyphicon-th-list"></span> 
            </h6> 
        </div>

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
                        'heading' => 'edocument loei public health office' 
                    ],
                    //'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
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
                            // 'value' => function ($model, $key, $index, $column) {
                            //     return $model->DateThai($model->$date_doc);
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
                            'attribute' => 'note',
                            'header' => 'การปฏิบัติ',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['note']) ? '-' : $data['note']; 
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-left'],
                            //'options' => ['style' => 'word-wrap:break-word'],
                            'attribute' => 'recipient',
                            'header' => 'ลงชื่อผู้รับ',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['recipient']) ? '-' : $data['recipient']; 
                            }
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
        <p>
            <?= Html::a('กลับหน้าค้นหา', ['/edoc/index'], ['class' => 'btn btn-primary']) ?>
        </p>               
    