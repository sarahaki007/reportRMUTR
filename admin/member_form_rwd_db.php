<meta charset="utf-8">
<?php
include('../condb.php');

if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}

	$m_id  = mysqli_real_escape_string($con,$_POST["m_id"]);
	$m_password  = mysqli_real_escape_string($con,sha1($_POST["m_password"]));

	$sql = "UPDATE tbl_member SET 
	m_password='$m_password'
	WHERE m_id=$m_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>