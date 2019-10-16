<?php
use app\assets\MyAsset;
/* @var $this yii\web\View */

$this->title = 'สารบรรณ สสจ.เลย';
?>
<div class="site-index">

    <!-- <div class="jumbotron">
        <h1>ยินดีต้อนรับ</h1>

        <p class="lead">ระบบลงรับสารบรรณหนังสือราชการ</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    <!--</div> -->

    

    <!-- <div class="container">
		<div class="panel panel-primary">
        <div class="panel-heading">Panel heading without title</div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div> -->

    <div class="page-header">
        <h1 class="tsb f60p">ยินดีต้อนรับ <small>ระบบลงรับ สารบรรณหนังสือราชการ สำนักงานสาธารณสุขจังหวัดเลย</small></h1>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                        <span class="info-box-icon">
                            <i class="far fa-file-alt fa-3x"></i>
                            </span>&nbsp; หนังสือทั้งหมด  
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h3><?= $cc ?> เรื่อง </h3>
                        </div>
                    <div class="panel-heading"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span class="info-box-icon">
                            <i class="fas fa-edit fa-3x"></i>
                            </span>&nbsp; หนังสือลงรับวันนี้  
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h3><?= $today ?> เรื่อง </h3>
                        </div>
                    <div class="panel-heading"> </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel-group">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span class="info-box-icon">
                            <i class="far fa-share-square fa-3x"></i>
                            </span>&nbsp; นำส่งกลุ่มงานทั้งหมด 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h3><?= $todep ?> เรื่อง </h3>
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
                            <span class="info-box-icon">
                                <i class="fas fa-history fa-3x"></i>
                                </span>&nbsp; หนังสือตกค้าง 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h3><?= $holdon ?> เรื่อง </h3>
                            </div>
                        <div class="panel-heading"></div>
                    </div>
                </div>                            
            </div>
        </div>
                </div>
        </div>
