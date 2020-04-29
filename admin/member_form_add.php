<?php
$query1 = "SELECT * FROM tbl_department ORDER BY d_id asc" or die("Error:" . mysqli_error());
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT * FROM tbl_position ORDER BY p_id asc" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query2);


?>
<h4> Form เพิ่มสมาชิก </h4>
<form action="member_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">


  <div class="form-group">
    <div class="col-sm-2 control-label">
      สถานะ :
    </div>
    <div class="col-sm-2">
      <select name="m_level" class="form-control" required>
        <option value="">เลือกข้อมูล</option>
        <option value="admin">admin</option>
        <option value="member">member</option>
        <option value="technician">technician</option>
        <option value="manager">manager</option>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_username" required class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" placeholder="ขั้นต่ำ 3 ตัว">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label" class="form-control" >
      Password :
    </div>
    <div class="col-sm-3">
      <input type="password" name="m_password" required class="form-control" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" placeholder="ขั้นต่ำ 3 ตัว">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_lname" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_phone" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-3">
      <input type="email" name="m_email" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รูปภาพ :
    </div>
    <div class="col-sm-4">
      <input type="file" name="m_img" required class="form-control" accept="image/*">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
    </div>
  </div>
</form>