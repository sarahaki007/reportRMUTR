<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_member WHERE m_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขสมาชิก </h4>
<form action="member_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      สถานะ :
    </div>
    <div class="col-sm-2">
      <select name="m_level" class="form-control" required>
       <option value="<?php echo $row['m_level'];?>">
          <?php echo $row['m_level'];?>
        </option>
        <option value="">-เลือกข้อมูล-</option>
        <option value="admin">admin</option>
        <option value="technician">technician</option>
        <option value="manager">manager</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อผู้ใช้ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_username" required class="form-control" autocomplete="off" value="<?php echo $row['m_username'];?>" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_name" required class="form-control" value="<?php echo $row['m_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_lname" required class="form-control" value="<?php echo $row['m_lname'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_phone" required class="form-control" value="<?php echo $row['m_phone'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-3">
      <input type="email" name="m_email" required class="form-control" value="<?php echo $row['m_email'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รูปภาพ :
    </div>
    <div class="col-sm-4">
      ภาพเก่า <br>
      <img src="../m_img/<?php echo $row['m_img'];?>" width="200px">
      <br>
      เลือกภาพใหม่ <br>
      <input type="file" name="m_img"  class="form-control" accept="image/*">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
       <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="m_id" value="<?php echo $m_id; ?>" />
      <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </div>
  </div>
</form>