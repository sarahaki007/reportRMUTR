<?php 
$bid = mysqli_real_escape_string($con,$_GET['bid']);
$sql = "SELECT * FROM tbl_building WHERE bid=$bid";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form แก้ไขอาคาร </h4>
<form action="buiding_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อาคาร :
    </div>
    <div class="col-sm-3">
      <input type="text" name="bname" required class="form-control" value="<?php echo $row['bname'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="bid" value="<?php echo $bid; ?>" />
     <button type="submit" name="submit" value="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>