<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EdocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ค้นหาสารบรรณหนังสือ');
$this->params['breadcrumbs'][] = $this->title;
// print_r($dataProvider);
//                     die();
?>
<div class="edoc-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php Pjax::begin(); ?>
    <p> <!-- <?= Html::a(Yii::t('app', 'ลงรับหนังสือ'), ['create'], ['class' => 'btn btn-success']) ?> --> </p>
    
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'panel'=>[
            'before'=>' '
    ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //['class' => '\kartik\grid\CheckboxColumn'],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                'attribute' => 'serial_doc',
                'header' => 'เลขที่หนังสือ',
                'format' => 'raw',
                'value' => function($data) { 
                    $serial_doc = $data['serial_doc']; // ประกาศรับค่าตัวแปรจาก Controller
                        // return Html::a(Html::encode($serial_doc), ['/edoc/edocument', 'serial_doc' => $serial_doc]);
                    return empty($data['serial_doc']) ? '-' : $data['serial_doc'];
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                //'options' => ['style' => 'width:30px;'],
                'attribute' => 'date_doc',
                'header' => 'ลงวันที่',
                'format'=>'html',
                'value' => function ($data) {
                    return $data->DateThai($data->date_doc);
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                //'options' => ['style' => 'width:20px;'],
                'attribute' => 'document_name',
                'header' => 'เรื่อง',
                'format'=>['html'],
                'value' => function($data) {
                    return empty($data['document_name']) ? '-' : $data['document_name'];
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                //'options' => ['style' => 'width:20px;'],
                'attribute' => 'from_gov',
                'header' => 'จากหน่วยงาน',
                'format'=>['html'],
                'value' => function($data) {
                    return empty($data['from_gov']) ? '-' : $data['from_gov'];
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                //'options' => ['style' => 'width:20px;'],
                'attribute' => 'to_gov',
                'header' => 'ถึง',
                'format'=>['html'],
                'value' => function($data) {
                    return empty($data['to_gov']) ? '-' : $data['to_gov'];
                }
            ],
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-left'],
                //'options' => ['style' => 'width:20px;'],
                'attribute' => 'department_name',
                'header' => 'การปฏิบัติ',
                'format'=>['raw'],
                'value' => function($data) {
                    return empty($data['department_name']) ? '-' : $data['department_name'];
                }
            ],
            
            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
                //'options' => ['style' => 'word-wrap:break-word'],
                'attribute' => 'dep_status',
                'header' => 'รับแล้ว/ยังไม่รับ',
                'format' => 'html',
                'value' => function($data) { 
                    //return empty($data['dep_status']) ? '-' : $data['dep_status']; 
                    return ($data['dep_status']==1) ? 
                            '<span class="label label-warning"> '.รอดำเนินการ.' </span>' 
                                 : '<span class="label label-success"> '.ดำเนินการแล้ว.' </span>' ;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                //'options'=>['style'=>'width:120px;'],
                'buttonOptions'=>['class'=>'btn btn-default'],
                'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {update} </div>'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    <?=
        $this->registerJs("var keys = $('#grid').kartikGridView('getSelectedRows')");
    ?>

</div>
