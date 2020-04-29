<div class="col-xs-6">
<?php 
$fid = mysqli_real_escape_string($con,$_GET['fid']);
$sql = "
SELECT *
FROM tbl_flo as f 
INNER JOIN tbl_building as b  ON f.ref_bid = b.bid
WHERE f.fid=$fid
";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
?>
<h4> ฟอร์มเพิ่มข้อมูลห้อง  </h4>
<form action="buiding_form_add_room_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      building :
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
      <input type="text" name="fname" required class="form-control" value="<?php echo $row['fname'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      room :
    </div>
    <div class="col-sm-10">
      <input type="text" name="rname" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="fid" value="<?php echo $fid; ?>" />
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
$query = "SELECT * FROM tbl_room WHERE ref_fid = $fid" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>id</th>
      <th width='85%'>ห้อง</th>
      <th wbidth='5%'>แก้ไข</th>
      <th wbidth='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result2)) {
  //foreach($result2 as $row){
  echo "<tr>";
    echo "<td>" .$row["rid"] .  "</td> ";
    echo "<td>" .$row["rname"] .  "</td> ";
    echo "<td><a href='buiding.php?act=editroom&bid=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='buiding_del_room_db.php?bid=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
</div>