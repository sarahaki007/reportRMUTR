<?php  
$ID = $_GET['ID'];
$sql = "SELECT * FROM tbl_member WHERE m_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form Reset Password </h4>
<form action="member_form_rwd_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_username" required class="form-control" autocomplete="off" value="<?php echo $row['m_username'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Password :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_password" required class="form-control" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" placeholder="ขั้นต่ำ 3 ตัว">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </div>
  </div>
</form>