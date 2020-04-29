<meta charset="utf-8">
<?php
include('../condb.php');

if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}


	$p_id = mysqli_real_escape_string($con,$_POST['p_id']);
	$p_name = mysqli_real_escape_string($con,$_POST["p_name"]);
	

	$sql = "UPDATE  tbl_position SET 
	p_name='$p_name'
	WHERE p_id=$p_id
	";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'position.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'position.php'; ";
	echo "</script>";
}
?>