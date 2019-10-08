<?php

//use miloschuman\highcharts\Highcharts;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

// use yii\i18n\Formatter;
// use IntlDateFormatter;
// use DateTime;
// use DateTimeZone;
// use yii\helpers\FormatConverter;

$this->title = 'สารบรรณ';
$this->params['breadcrumbs'][] = $this->title;

$datas = $dataProvider->getModels(); // get data from dataProvider

?>
    <div class="panel-heading">
        <h3 class="alert alert-info" role="alert"> <span class="glyphicon glyphicon-th-list"></span> 
            <?= $datas[0]['serial_doc'] ?>  
            </h3> 
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
                        'type'=>'success', 
                        'heading' => $datas[0]['serial_doc'] , $datas[0]['serial_doc'] 
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
                            'attribute' => 'dep_name',
                            'header' => 'สถานะการรับหนังสือ(กลุ่มงาน/งาน)',
                            'format' => 'html',
                            'value' => function($data) { 
                                return empty($data['dep_name']) ? '-' : $data['dep_name']; 
                            }
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            //'options'=>['style'=>'width:120px;'],
                            'buttonOptions'=>['class'=>'btn btn-default'],
                            'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
                        ],
                    ]
                ]);
                ?>
            </div>
        </div>
        <p>
            <?= Html::a('กลับหน้าค้นหา', ['/eodc/index'], ['class' => 'btn btn-primary']) ?>
        </p>               
    