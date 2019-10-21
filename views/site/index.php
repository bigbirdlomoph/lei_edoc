<?php
use app\assets\MyAsset;
/* @var $this yii\web\View */

$this->title = 'สารบรรณ สสจ.เลย';
?>
<div class="site-index">

    <!-- <div class="jumbotron">
        <h1>ยินดีต้อนรับ</h1>

        <p class="lead">ระบบลงรับสารบรรณหนังสือราชการ</p>

         <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->

    <div class="page-header">
        <h1 class="tsb f60p">ยินดีต้อนรับ <small>ระบบลงรับ สารบรรณหนังสือราชการ สำนักงานสาธารณสุขจังหวัดเลย</small></h1>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading"> 
                        <span class="pull-left info-box-icon">
                            <i class="far fa-file-alt fa-3x"></i>
                            </span>&nbsp; <h4 class="pull-right">หนังสือลงรับทั้งหมด </h4> <br> <br> <hr>
                                <h2><?= $cc ?> เรื่อง </h2>
                        </div> 
                        <div class="panel-heading"></div>
                    </div>
                </div>
            </div>
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span class="pull-left info-box-icon">
                            <i class="far fa-edit fa-3x"></i>
                            </span>&nbsp; <h4 class="pull-right"> ลงรับวันนี้ </h4> <br> <br> <hr>
                                <h2><?= $today ?> เรื่อง </h2>
                        </div>
                    <div class="panel-heading"> </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span class="pull-left info-box-icon">
                            <i class="far fa-share-square fa-3x"></i>
                            </span>&nbsp; <h4 class="pull-right"> นำส่งทั้งหมด </h4> <br> <br> <hr>
                                <h2><?= $todep ?> เรื่อง </h2>
                        </div>
                    <div class="panel-heading"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel-group">
                    <div class="panel panel-warning">
                        <div class="panel-heading"> 
                            <span class="pull-left info-box-icon">
                                <i class="fas fa-history fa-3x"></i>
                                </span>&nbsp; <h4 class="pull-right"> หนังสือตกค้าง </h4> <br> <br> <hr>
                                    <h2><?= $holdon ?> เรื่อง </h2>
                            </div>
                        <div class="panel-heading"></div>
                        </div>
                    </div>                            
                </div> 
            </div> 
        </div> <!-- End Row -->

    </div>  <!-- End Site index -->
