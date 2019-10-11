<?php

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
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
									 <!-- <img src="icon/doctor.png" alt="Smiley face" height="50" width="50"> -->
                                    <button type="button" class="btn btn-success btn-lg">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                                                                            99
                                    </button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge"><h2>9,999</h2></div> -->
                                    <div><h4 class="tssb f24p">ลงรับหนังสือ<br>(เรื่อง)</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<!-- <img src="icon/doctor.png" alt="Smiley face" height="50" width="50"> -->
                                    <button type="button" class="btn btn-success btn-lg">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 9,999
                                    </button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <h2><div class="huge">3,056,311</div></h2> -->
                                    <div><h4 class="tssb f24p">นำส่งกลุ่มงาน<br>(เรื่อง)</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									 <!-- <img src="icon/bed.png" alt="Smiley face" height="50" width="50"> -->
                                    <button type="button" class="btn btn-warning btn-lg">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 9,999
                                    </button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge"><h2>84,125</h2></div> -->
                                    <div><h4 class="tssb f24p">รับหนังสือ<br>(เรื่อง)</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									 <!-- <img src="icon/bed.png" alt="Smiley face" height="50" width="50"> -->
                                    <button type="button" class="btn btn-warning btn-lg">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 9,999
                                    </button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge"><h2>373,846</h2></div> -->
                                    <div><h4 class="tssb f24p">ไม่มีผู้รับ<br>(เรื่อง)</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Row -->

            <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> X-RAY" style="color:black;" href="?stat=xray">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-times"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-number">วันนี้ <?php echo number_format($pt_xray_today,0);?></span>
                    <span class="info-box-text">X-RAY <br>เดือนนี้ <?php echo number_format($ptm_xray_hn,0);?> คน / <?php echo number_format($ptm_xray_vn,0);?> ครั้ง</span></a>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> อุบัติเหตุ" style="color:black;" href="?stat=er">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-ambulance"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-number">วันนี้ <?php echo number_format($pt_er_today,0);?></span>
                    <span class="info-box-text">อุบัติเหตุ <br>เดือนนี้ <?php echo number_format($ptm_er_hn,0);?> คน / <?php echo number_format($ptm_er_hn,0);?> ครั้ง</span></a>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <!-- <div class="clearfix visible-sm-block"></div> -->

            <div class="col-md-3 col-sm-6 col-xs-12">
		        <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> กายภาพบำบัด" style="color:black;" href="?stat=pts">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-wheelchair"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-number">วันนี้ <?php echo number_format($pt_phy_today,0);?></span>
                    <span class="info-box-text">กายภาพบำบัด <br>เดือนนี้ <?php echo number_format($ptm_phy_hn,0);?> คน / <?php echo number_format($ptm_phy_vn,0);?> ครั้ง</span></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
		      <a data-toggle="tooltip" title="คลิกดูรายละเอียด --> ผู้ป่วยผ่าตัด" style="color:black;" href="?stat=or">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-heartbeat"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">วันนี้ <?php echo number_format($pt_or_today,0);?></span>
              <span class="info-box-text">ผู้ป่วยผ่าตัด <br>เดือนนี้ <?php echo number_format($ptm_or_hn,0);?> คน / <?php echo number_format($ptm_or_vn,0);?> ครั้ง (OPD <?php echo number_format($ptm_or_opd,0);?> / IPD <?php echo number_format($ptm_or_ipd,0);?>))</span></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $dataProvider[0]['cc'] ?> </h3>
              <p>หนังสือลงรับทั้งหมด<br>(เรื่อง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <a href="#" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>...</h3>
              <p>ลงรับ วันนี้ <br>(เรื่อง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-bed"></i>
            </div>
            <a href="?stat=ipd" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>...</h3>
              <p>ส่งกลุ่มงาน/งาน วันนี้ <br>(เรื่อง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-quote-left"></i>
            </div>
            <a href="#" class="small-box-footer">รายละเอียด  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>...</h3>
              <p> วันนี้ <br>(เรื่อง)</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-paper-o"></i>
            </div>
            <a href="#" class="small-box-footer">รายละเอียด  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->  
    
</div>
