<div class="col-xs-6">
<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_device WHERE de_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);

//query sub device
$query = "SELECT * FROM tbl_sub_devices  WHERE de_id=$ID" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query);
?>
<h4> ฟอร์มเพิ่มข้อมูลปัญหาย่อย </h4>
<form action="device_form_add_sub_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ปัญหา :
    </div>
    <div class="col-sm-10">
      <input type="text" name="de_name" required class="form-control" value="<?php echo $row['de_name'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ปัญหาย่อย :
    </div>
    <div class="col-sm-10">
      <input type="text" name="sub_name" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="de_id" value="<?php echo $ID; ?>" />
      <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>
</div>
<div class="col-xs-6">
<h4> รายการปัญหาย่อย </h4>
<?php 
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>รหัส</th>
      <th width='20%'>ปัญหาย่อย</th>
      <th width='5%'>แก้ไข</th>
      <th width='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result2)) {
  echo "<tr>";
    echo "<td>" .$row["sub_id"] .  "</td> ";
    echo "<td>" .$row["sub_name"] .  "</td> ";
    echo "<td><a href='device.php?act=editsub&sub_id=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='device_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
</div>
