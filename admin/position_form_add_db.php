<meta charset="utf-8">
<?php
include('../condb.php');

if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}

	$p_name = mysqli_real_escape_string($con,$_POST["p_name"]);

	$check = "
	SELECT  p_name 
	FROM tbl_position  
	WHERE p_name = '$p_name' 
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
	
	$sql = "INSERT INTO tbl_position
	(p_name)
	VALUES
	('$p_name')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

}
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'position.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'position.php'; ";
	echo "</script>";
}
?>