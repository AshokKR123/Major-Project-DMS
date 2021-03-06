<?php require 'DashboardHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row">
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 pb-5 pt-5" align="center">Select Report Date(s)</div>
        <div class="col-xl-6 col-lg-9 col-md-8 col-sm-12 pb-5 pt-5" align="center">
        	<input type="date" name="date1">&nbsp;to&nbsp;
        	<input type="date" name="date2">
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 pb-5 pt-5" align="center"><button class="btn btn-primary"><i class="fa fa-download"></i>&nbsp;Download Deficiency Report</button></div>
    </div>
</div>
<div class="card container-fluid mt-3">
    <div style="background-color: white;" class="row">
        <div class="col-lg-4 col-md-12 pb-5 pt-5" align="center">TODAY<br/><input type="date" name="dateset" value="<?php echo date("Y-m-d");?>" class="mt-2" disabled><br/><button class="btn btn-primary m-2 p-1 pl-3 pr-3"><i class="fa fa-download"></i>&nbsp;Deficiency Report</button></div>
        <div class="col-lg-4 col-md-12 pb-5 pt-5" align="center">YESTERDAY<br/><input type="date" name="dateset" value="<?php echo date('Y-m-d',strtotime("-1 days"));?>" class="mt-2" disabled><br/><button class="btn btn-primary m-2 p-1 pl-3 pr-3"><i class="fa fa-download"></i>&nbsp;Deficiency Report</button></div>
        <div class="col-lg-4 col-md-12 pb-5 pt-5" align="center">SELECT DATE<br/><input type="date" name="datetobeset" class="mt-2"><br/><button class="btn btn-primary m-2 p-1 pl-3 pr-3"><i class="fa fa-download"></i>&nbsp;Deficiency Report</button></div>
    </div>
</div>
<?php require 'DashboardFooter.php'?>