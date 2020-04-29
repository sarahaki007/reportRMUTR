<div class="col-xs-6">
<?php 
$bid = mysqli_real_escape_string($con,$_GET['bid']);
$sql = "SELECT * FROM tbl_building WHERE bid=$bid";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
?>
<h4> ฟอร์มเพิ่มข้อมูลชั้น  </h4>
<form action="buiding_form_add_flo_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อาคาร :
    </div>
    <div class="col-sm-10">
      <input type="text" name="bname" required class="form-control" value="<?php echo $row['bname'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      floor :
    </div>
    <div class="col-sm-10">
      <input type="text" name="fname" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="bid" value="<?php echo $bid; ?>" />
     <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึก</button>
    </div>
    <div class="col-sm-1">
    <a href='buiding.php' class='btn btn-warning '>ย้อนกลับ</a>
  </div>
  </div>
</form>
</div>
<div class="col-xs-6">
<?php 
$query = "SELECT * FROM tbl_flo WHERE ref_bid = $bid" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>id</th>
      <th width='85%'>ชั้น</th>
      <th width='5%'>+ห้อง</th>
      <th wbidth='5%'>แก้ไข</th>
      <th wbidth='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result2)) {
  //foreach($result2 as $row){
  echo "<tr>";
    echo "<td>" .$row["fid"] .  "</td> ";
    echo "<td>" .$row["fname"] .  "</td> ";
     echo "<td><a href='buiding.php?act=addroom&fid=$row[0]' class='btn btn-info btn-xs'>+ห้อง</a></td> ";
    echo "<td><a href='buiding.php?act=editflo&bid=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='buiding_del_flo_db.php?bid=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
</div>