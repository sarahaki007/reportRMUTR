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
}

	$bname = mysqli_real_escape_string($con,$_POST["bname"]);
	$check = "
	SELECT  bname 
	FROM tbl_building  
	WHERE bname = '$bname' 
	";
    $result1 = mysqli_query($con, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
	
	$sql = "INSERT INTO tbl_building
	(bname)
	VALUES
	('$bname')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

}
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'buiding.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'buiding.php'; ";
	echo "</script>";
}
?>