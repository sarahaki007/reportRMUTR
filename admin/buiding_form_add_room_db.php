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

	$rname = mysqli_real_escape_string($con,$_POST["rname"]);
	$fid = mysqli_real_escape_string($con,$_POST["fid"]);

	$check = "
	SELECT  * 
	FROM tbl_room
	WHERE rname = '$rname'  AND ref_fid = $fid
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
	
	$sql = "INSERT INTO tbl_room
	(rname, ref_fid)
	VALUES
	('$rname', $fid)";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
}
}
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'buiding.php?act=addroom&fid=$fid'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'buiding.php?act=addroom&fid=$fid'; ";
	echo "</script>";
}
?>