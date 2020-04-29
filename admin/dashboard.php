<?php
$query = "SELECT s.s_name,COUNT(c.c_id) as stotal FROM tbl_status as s
LEFT JOIN tbl_case as c ON s.s_id=c.ref_s_id
GROUP BY s.s_id
";
$resultchart = mysqli_query($con, $query);
//for chart
$s_name = array();
$stotal = array();
while($rs = mysqli_fetch_array($resultchart)){
$s_name[] = "\"".$rs['s_name']."\"";
$stotal[] = "\"".$rs['stotal']."\"";
}
$s_name = implode(",", $s_name);
$stotal = implode(",", $stotal);
//sumevaluation extract data
$sqlv = "SELECT a.a_score, COUNT(p.ref_mer_id) as totaljobv FROM tbl_job_proceduves as p
INNER JOIN tbl_case as c ON p.ref_c_id=c.c_id
INNER JOIN tbl_assessment as a  ON p.ref_c_id=a.ref_c_id
GROUP BY a.a_score";
$resultv = mysqli_query($con, $sqlv);
//for chart
$a_score = array();
$totaljobv = array();
while($rsv = mysqli_fetch_array($resultv)){
$a_score[] = "\"".$rsv['a_score']."\"";
$totaljobv[] = "\"".$rsv['totaljobv']."\"";
}
$a_score = implode(",", $a_score);
$totaljobv = implode(",", $totaljobv);
?>
<div class="col-xs-6">
	<div class="chart-container">
		<div class="pie-chart-container">
			<h4>จำนวนงานแจ้งซ่อมในระบบ</h4>
			<canvas id="pie-chartcanvas-1" width="300px"></canvas>
		</div>
	</div>
	<!-- javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<script>
	$(document).ready(function () {
	var ctx1 = $("#pie-chartcanvas-1");
	var data1 = {
	labels : [<?php echo $s_name;?>],
	datasets : [
	{
	label : "JOB",
	data : [<?php echo $stotal;?>],
	backgroundColor : [
	"#f76928",
	"#f7c728",
	"#28f79a",
	"#00d115"
	],
	borderColor : [
	"#CDA776",
	"#989898",
	"#CB252B",
	"#E39371"
	],
	borderWidth : [1, 1, 1, 1, 1]
	}
	]
	};
	
	var options = {
	title : {
	display : true,
	position : "center",
	text : "จำนวนงานแจ้งซ่อมในระบบ",
	fontSize : 19,
	fontColor : "#111"
	},
	legend : {
	display : true,
	position : "left"
	}
	};
	var chart1 = new Chart( ctx1, {
	type : "pie",
	data : data1,
	options : options
	});
	});
	</script>
</div>
<div class="col-xs-6"  style="background-color: #f1f1f1">
	<div class="chart-container">
		<div class="pie-chart-container">
			<h4>รายการประเมิน</h4>
			<canvas id="pie-chartcanvas-2" width="300px"></canvas>
		</div>
	</div>
	<!-- javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<script>
	$(document).ready(function () {
	var ctx1 = $("#pie-chartcanvas-2");
	var data1 = {
	labels : [<?php echo $a_score;?>],
	datasets : [
	{
	label : "JOB",
	data : [<?php echo $totaljobv;?>],
	backgroundColor : [
	"#00d115",
	"#3363e8",
	"#e86333"
	],
	borderColor : [
	"#CDA776",
	"#989898",
	"#CB252B"
	],
	borderWidth : [1, 1, 1, 1, 1]
	}
	]
	};
	
	var options = {
	title : {
	display : true,
	position : "",
	text : "รายการประเมิน",
	fontSize : 19,
	fontColor : "#111"
	},
	legend : {
	display : true,
	position : "left"
	}
	};
	var chart1 = new Chart( ctx1, {
	type : "pie",
	data : data1,
	options : options
	});
	});
	</script>
</div>