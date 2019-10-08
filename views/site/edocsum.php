<?php

//use yii\grid\GridView;
//use miloschuman\highcharts\Highcharts;
//use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;

$this->title = '..';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="body-content">
            <?php
                if (isset($dataProvider))
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'hover' => TRUE,
                    'panel'=>['type'=>'primary', 
                        'heading'=>'...'],
                    'summary'=>'',
                    'columns' => [
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:20px;'],
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'ลำดับที่'
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-center'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'serial_doc',
                            'header' => 'เลขหนังสือ',
                            'format' => 'raw',
                            'value' => function($data) { 
                            //$off_name = $data['off_name']; // ประกาศรับค่าตัวแปรจาก Controller
                            //$values = $data['sprice']; // ประกาศรับค่าตัวแปรจาก Controller
                            //return Html::a(Html::encode($areaname), ['/report/dmctrlhos', 'areacode' => $areacode]);
                            return empty($data['serial_doc']) ? '-' : $data['serial_doc'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'date_doc',
                            'header' => 'ลงวันที่',
                            'format'=>'raw',
                            'value' => function($data) {
                                return empty($data['date_doc']) ? '-' : $data['date_doc'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'document_name',
                            'header' => 'เรื่อง',
                            'format'=>'raw',
                            'value' => function($data) {
                                return empty($data['document_name']) ? '-' : $data['document_name'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'from_gov',
                            'header' => 'จากหน่วยงาน',
                            'format'=>'raw',
                            'value' => function($data) {
                                return empty($data['from_gov']) ? '-' : $data['from_gov'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'to_gov',
                            'header' => 'ถึงหน่วยงาน',
                            'format'=>'raw',
                            'value' => function($data) {
                                return empty($data['to_gov']) ? '-' : $data['to_gov'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'note',
                            'header' => 'การปฏิบัติ',
                            'format'=>'raw',
                            'value' => function($data) {
                                return empty($data['note']) ? '-' : $data['note'];
                            }
                        ],
                        [
                            'headerOptions' => ['class' => 'text-center'],
                            'contentOptions' => ['class' => 'text-right'],
                            'options' => ['style' => 'width:30px;'],
                            'attribute' => 'status',
                            'header' => 'สถานะหนังสือ',
                            'format'=>'raw',
                            'value' => function($data) {
                                return empty($data['status']) ? '-' : $data['status'];
                            }
                        ],
                    ]
                ]);
                ?>
        </div>