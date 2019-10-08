<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'E Document'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="edoc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id, 'serial_doc' => $model->serial_doc], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id, 'serial_doc' => $model->serial_doc], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'คุณต้องการ "ลบ" รายการนี้หรือไม่?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'serial_doc',
            'date_doc',
            'document_name',
            'from_gov',
            'to_gov',
            'note',
            'status',
            'dep_status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
