<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_device WHERE de_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขอุปกรณ์ </h4>
<form action="device_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อุปกรณ์ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="de_name" required class="form-control" value="<?php echo $row['de_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="de_id" value="<?php echo $de_id; ?>" />
      <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>