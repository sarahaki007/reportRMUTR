<meta charset="utf-8">
<?php 
	include('../condb.php');
	$bid  = mysqli_real_escape_string($con,$_GET["bid"]);
	$sql = "DELETE FROM tbl_flo WHERE fid=$bid";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());	
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "window.location = 'buiding.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'buiding.php'; ";
	echo "</script>";
}
?>