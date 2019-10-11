<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Edoc */

$this->title = Yii::t('app', 'ลงรับหนังสือ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Edocs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edoc-create">

    <!-- <h3><?= Html::encode($this->title) ?></h3> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
