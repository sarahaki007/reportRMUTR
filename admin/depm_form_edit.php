<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_department WHERE d_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขแผนก </h4>
<form action="depm_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      แผนก :
    </div>
    <div class="col-sm-3">
      <input type="text" name="d_name" required class="form-control" value="<?php echo $row['d_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="d_id" value="<?php echo $d_id; ?>" />
       <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </div>
  </div>
</form>