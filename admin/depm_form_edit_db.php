<meta charset="utf-8">
<?php
 include('../condb.php');


if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}

	$d_id = mysqli_real_escape_string($con,$_POST['d_id']);
	$d_name = mysqli_real_escape_string($con,$_POST["d_name"]);

	$sql = "UPDATE  tbl_department SET 
	d_name='$d_name'
	WHERE d_id=$d_id
	";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'depm.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'depm.php'; ";
	echo "</script>";
}
?>