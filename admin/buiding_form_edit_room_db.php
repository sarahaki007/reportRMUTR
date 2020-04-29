<meta charset="utf-8">
<?php
include('../condb.php');

if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}

	$bid = mysqli_real_escape_string($con,$_POST['bid']);
	$bname = mysqli_real_escape_string($con,$_POST["bname"]);
	$sql = "UPDATE  tbl_room SET 
	rname='$bname'
	WHERE rid=$bid
	";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'buiding.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'buiding.php'; ";
	echo "</script>";
}
?>