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
	$de_id = mysqli_real_escape_string($con,$_POST["de_id"]);

	$check = "
	SELECT  * 
	FROM tbl_sub_devices
	WHERE sub_name = '$sub_name'  AND de_id=$de_id
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
	
	$sql = "INSERT INTO tbl_sub_devices
	(sub_name, de_id)
	VALUES
	('$sub_name', $de_id)";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	} // if($num > 0)
} //if($_POST['submit']!='submit'){
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'device.php?act=addsub&ID=$de_id'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'device.php?act=addsub&ID=$de_id'; ";
	echo "</script>";
}
?>