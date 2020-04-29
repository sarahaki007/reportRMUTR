<?php 
$query = "SELECT * FROM tbl_position ORDER BY p_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>รหัส</th>
      <th>ตำแหน่ง</th>
      <th width='5%'>แก้ไข</th>
      <th width='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["p_id"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td><a href='position.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='position_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>