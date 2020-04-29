<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_technician WHERE tech_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขสมาชิก </h4>
<form action="tec_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="t_fname" required class="form-control" value="<?php echo $row['t_fname'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-3">
      <input type="text" name="t_lname" required class="form-control" value="<?php echo $row['t_lname'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-3">
      <input type="text" name="t_phone" required class="form-control" value="<?php echo $row['t_phone'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-3">
      <input type="email" name="t_email" required class="form-control" value="<?php echo $row['t_email'];?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </div>
  </div>
  <input type="hidden" name="t_id" value="<?php echo $tech_id; ?>" />
</form>