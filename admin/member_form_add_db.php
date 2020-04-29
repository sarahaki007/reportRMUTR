<meta charset="utf-8">
<?php
include('../condb.php');

	if($_POST['submit']!='submit'){
	    echo "<script>";
	    echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ !');";
	    echo "window.history.back();";
	    echo "</script>";
}
// print_r($_POST);
// exit;

	$m_username = mysqli_real_escape_string($con,$_POST["m_username"]);
	$m_password = mysqli_real_escape_string($con,sha1($_POST["m_password"]));
	$m_name = mysqli_real_escape_string($con,$_POST["m_name"]);
	$m_lname = mysqli_real_escape_string($con,$_POST["m_lname"]);
	$m_phone = mysqli_real_escape_string($con,$_POST["m_phone"]);	
	$m_email = mysqli_real_escape_string($con,$_POST["m_email"]);
	$m_level = mysqli_real_escape_string($con,$_POST["m_level"]);

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 
	
		$path="../m_img/";
		$type = strrchr($_FILES['m_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../m_img/".$newname;
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}

	$check = "
	SELECT m_username, m_email 
	FROM tbl_member  
	WHERE m_username = '$m_username' 
	OR m_email='$m_email'
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

	$sql = "INSERT INTO tbl_member
	(
	m_username,
	m_password,
	m_name,
	m_lname,
	m_phone,
	m_email,
	m_img,
	m_level
	)
	VALUES
	(
	'$m_username',
	'$m_password',
    '$m_name',
	'$m_lname',
	'$m_phone',
	'$m_email',
	'$newname',
	'$m_level'
	)";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	}
	mysqli_close($con);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>