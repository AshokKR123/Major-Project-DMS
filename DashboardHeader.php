<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>DMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
        window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    axisX: {
        valueFormatString: "DD MMM YYYY"
    },
    axisY: {
        title: "Number Of Deficiencies",
    },
    legend: {
        cursor: "pointer",
        verticalAlign: "top",
        horizontalAlign: "center",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{
        type:"line",
        axisYType: "primary",
        name: "No Of Deficiencies Initiated",
        showInLegend: true,
        markerSize: 0,
        dataPoints: [       
            { x: new Date(<?php echo date('Y',strtotime("-30 days"));?>,<?php echo date('m',strtotime("-30 days"));?>,<?php echo date('d',strtotime("-30 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-30 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-29 days"));?>,<?php echo date('m',strtotime("-29 days"));?>,<?php echo date('d',strtotime("-29 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-29 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-28 days"));?>,<?php echo date('m',strtotime("-28 days"));?>,<?php echo date('d',strtotime("-28 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-28 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-27 days"));?>,<?php echo date('m',strtotime("-27 days"));?>,<?php echo date('d',strtotime("-27 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-27 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-26 days"));?>,<?php echo date('m',strtotime("-26 days"));?>,<?php echo date('d',strtotime("-26 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-26 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-25 days"));?>,<?php echo date('m',strtotime("-25 days"));?>,<?php echo date('d',strtotime("-25 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-25 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-24 days"));?>,<?php echo date('m',strtotime("-24 days"));?>,<?php echo date('d',strtotime("-24 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-24 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-23 days"));?>,<?php echo date('m',strtotime("-23 days"));?>,<?php echo date('d',strtotime("-23 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-23 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-22 days"));?>,<?php echo date('m',strtotime("-22 days"));?>,<?php echo date('d',strtotime("-22 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-22 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-21 days"));?>,<?php echo date('m',strtotime("-21 days"));?>,<?php echo date('d',strtotime("-21 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-21 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-20 days"));?>,<?php echo date('m',strtotime("-20 days"));?>,<?php echo date('d',strtotime("-20 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-20 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-19 days"));?>,<?php echo date('m',strtotime("-19 days"));?>,<?php echo date('d',strtotime("-19 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-19 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-18 days"));?>,<?php echo date('m',strtotime("-18 days"));?>,<?php echo date('d',strtotime("-18 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-18 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-17 days"));?>,<?php echo date('m',strtotime("-17 days"));?>,<?php echo date('d',strtotime("-17 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-17 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-16 days"));?>,<?php echo date('m',strtotime("-16 days"));?>,<?php echo date('d',strtotime("-16 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-16 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-15 days"));?>,<?php echo date('m',strtotime("-15 days"));?>,<?php echo date('d',strtotime("-15 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-15 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-14 days"));?>,<?php echo date('m',strtotime("-14 days"));?>,<?php echo date('d',strtotime("-14 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-14 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-13 days"));?>,<?php echo date('m',strtotime("-13 days"));?>,<?php echo date('d',strtotime("-13 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-13 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-12 days"));?>,<?php echo date('m',strtotime("-12 days"));?>,<?php echo date('d',strtotime("-12 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-12 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-11 days"));?>,<?php echo date('m',strtotime("-11 days"));?>,<?php echo date('d',strtotime("-11 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-11 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-10 days"));?>,<?php echo date('m',strtotime("-10 days"));?>,<?php echo date('d',strtotime("-10 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-10 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-9 days"));?>,<?php echo date('m',strtotime("-9 days"));?>,<?php echo date('d',strtotime("-9 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-9 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-8 days"));?>,<?php echo date('m',strtotime("-8 days"));?>,<?php echo date('d',strtotime("-8 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-8 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-7 days"));?>,<?php echo date('m',strtotime("-7 days"));?>,<?php echo date('d',strtotime("-7 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-7 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-6 days"));?>,<?php echo date('m',strtotime("-6 days"));?>,<?php echo date('d',strtotime("-6 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-6 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-5 days"));?>,<?php echo date('m',strtotime("-5 days"));?>,<?php echo date('d',strtotime("-5 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-5 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-4 days"));?>,<?php echo date('m',strtotime("-4 days"));?>,<?php echo date('d',strtotime("-4 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-4 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-3 days"));?>,<?php echo date('m',strtotime("-3 days"));?>,<?php echo date('d',strtotime("-3 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-3 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-2 days"));?>,<?php echo date('m',strtotime("-2 days"));?>,<?php echo date('d',strtotime("-2 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-2 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-1 days"));?>,<?php echo date('m',strtotime("-1 days"));?>,<?php echo date('d',strtotime("-1 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-1 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y');?>,<?php echo date('m');?>,<?php echo date('d');?>), y: <?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `insdate`='".date('Y-m-d',strtotime("-0 days"))."'"));?> }
        ]
    },
    {
        type: "line",
        axisYType: "primary",
        name: "No Of Cleared Deficiencies",
        showInLegend: true,
        markerSize: 0,
        dataPoints: [
            { x: new Date(<?php echo date('Y',strtotime("-30 days"));?>,<?php echo date('m',strtotime("-30 days"));?>,<?php echo date('d',strtotime("-30 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-30 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-29 days"));?>,<?php echo date('m',strtotime("-29 days"));?>,<?php echo date('d',strtotime("-29 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-29 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-28 days"));?>,<?php echo date('m',strtotime("-28 days"));?>,<?php echo date('d',strtotime("-28 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-28 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-27 days"));?>,<?php echo date('m',strtotime("-27 days"));?>,<?php echo date('d',strtotime("-27 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-27 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-26 days"));?>,<?php echo date('m',strtotime("-26 days"));?>,<?php echo date('d',strtotime("-26 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-26 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-25 days"));?>,<?php echo date('m',strtotime("-25 days"));?>,<?php echo date('d',strtotime("-25 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-25 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-24 days"));?>,<?php echo date('m',strtotime("-24 days"));?>,<?php echo date('d',strtotime("-24 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-24 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-23 days"));?>,<?php echo date('m',strtotime("-23 days"));?>,<?php echo date('d',strtotime("-23 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-23 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-22 days"));?>,<?php echo date('m',strtotime("-22 days"));?>,<?php echo date('d',strtotime("-22 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-22 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-21 days"));?>,<?php echo date('m',strtotime("-21 days"));?>,<?php echo date('d',strtotime("-21 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-21 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-20 days"));?>,<?php echo date('m',strtotime("-20 days"));?>,<?php echo date('d',strtotime("-20 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-20 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-19 days"));?>,<?php echo date('m',strtotime("-19 days"));?>,<?php echo date('d',strtotime("-19 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-19 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-18 days"));?>,<?php echo date('m',strtotime("-18 days"));?>,<?php echo date('d',strtotime("-18 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-18 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-17 days"));?>,<?php echo date('m',strtotime("-17 days"));?>,<?php echo date('d',strtotime("-17 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-17 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-16 days"));?>,<?php echo date('m',strtotime("-16 days"));?>,<?php echo date('d',strtotime("-16 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-16 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-15 days"));?>,<?php echo date('m',strtotime("-15 days"));?>,<?php echo date('d',strtotime("-15 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-15 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-14 days"));?>,<?php echo date('m',strtotime("-14 days"));?>,<?php echo date('d',strtotime("-14 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-14 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-13 days"));?>,<?php echo date('m',strtotime("-13 days"));?>,<?php echo date('d',strtotime("-13 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-13 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-12 days"));?>,<?php echo date('m',strtotime("-12 days"));?>,<?php echo date('d',strtotime("-12 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-12 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-11 days"));?>,<?php echo date('m',strtotime("-11 days"));?>,<?php echo date('d',strtotime("-11 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-11 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-10 days"));?>,<?php echo date('m',strtotime("-10 days"));?>,<?php echo date('d',strtotime("-10 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-10 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-9 days"));?>,<?php echo date('m',strtotime("-9 days"));?>,<?php echo date('d',strtotime("-9 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-9 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-8 days"));?>,<?php echo date('m',strtotime("-8 days"));?>,<?php echo date('d',strtotime("-8 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-8 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-7 days"));?>,<?php echo date('m',strtotime("-7 days"));?>,<?php echo date('d',strtotime("-7 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-7 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-6 days"));?>,<?php echo date('m',strtotime("-6 days"));?>,<?php echo date('d',strtotime("-6 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-6 days"))."'"));?> },
            { x: new Date(<?php echo date('Y',strtotime("-5 days"));?>,<?php echo date('m',strtotime("-5 days"));?>,<?php echo date('d',strtotime("-5 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-5 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-4 days"));?>,<?php echo date('m',strtotime("-4 days"));?>,<?php echo date('d',strtotime("-4 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-4 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-3 days"));?>,<?php echo date('m',strtotime("-3 days"));?>,<?php echo date('d',strtotime("-3 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-3 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-2 days"));?>,<?php echo date('m',strtotime("-2 days"));?>,<?php echo date('d',strtotime("-2 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-2 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y',strtotime("-1 days"));?>,<?php echo date('m',strtotime("-1 days"));?>,<?php echo date('d',strtotime("-1 days"));?>), y:<?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-1 days"))."'"));?>  },
            { x: new Date(<?php echo date('Y');?>,<?php echo date('m');?>,<?php echo date('d');?>), y: <?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `cldate`='".date('Y-m-d',strtotime("-0 days"))."'"));?>}
        ]
    }]
});
chart.render();

function toogleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else{
        e.dataSeries.visible = true;
    }
    chart.render();
}

}
</script>
    <style type="text/css">
        #mySidenav {
            position: absolute;
            left: -270px;
            transition: 0.3s; 
            padding: 15px; 
            width: 300px;
            text-decoration: none; 
            font-size: 20px; 
            border-radius: 0 5px 5px 0; 
        }

        #mySidenav:hover {
            left: 0;
            z-index: 100;
        }
        .content{
            margin-left: 5%;
        }
        .menu:hover{
            background-color: red;
        }
        .menu{
            background-color: #FF8C00;
        }
        .search{
            background-color: #FF4500;
            border: #FF4500;
        }
        .search:hover{
            background-color: red; 
            border: red;
        }
        .hovered:hover{
            color:red;
        }
    </style>
</head>
<?php require 'top.php'?>
<body style="background-color: #fed8b1;">
    <div class="container-fluid">
        <div class="row">
            <div id="mySidenav"><?php require 'Sidebar.php'?></div>
            <div class="content container row">
                <div class="row p-2">&nbsp;&emsp;</div>