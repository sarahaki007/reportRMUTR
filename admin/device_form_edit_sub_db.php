<meta charset="utf-8">
<?php
include('../condb.php');


// print_r($_POST);
// exit;

if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
	}else{ 

	$sub_name = mysqli_real_escape_string($con,$_POST["sub_name"]);
	$sub_id = mysqli_real_escape_string($con,$_POST["sub_id"]);
 
	$sql = "UPDATE tbl_sub_devices SET 
	sub_name='$sub_name'
	WHERE sub_id=$sub_id
	";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	 
} //if($_POST['submit']!='submit'){
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'device.php?act=editsub&sub_id=$sub_id'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'device.php?act=editsub&sub_id=$sub_id'; ";
	echo "</script>";
}
?>