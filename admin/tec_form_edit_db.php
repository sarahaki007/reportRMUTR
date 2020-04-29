<meta charset="utf-8">
<?php
include('../condb.php');

	if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}
	$t_id = mysqli_real_escape_string($con,$_POST["t_id"]);
	$t_fname = mysqli_real_escape_string($con,$_POST["t_name"]);
	$t_lname = mysqli_real_escape_string($con,$_POST["t_lname"]);
	$t_phone = mysqli_real_escape_string($con,$_POST["t_phone"]);	
	$t_email = mysqli_real_escape_string($con,$_POST["t_email"]);



	$sql = "UPDATE tbl_technician SET 
	t_fname='$t_fname',
	t_lname='$t_lname',
	t_phone='$t_phone',
	t_email='$t_email',
	WHERE tech_id=$t_id
	 ";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>