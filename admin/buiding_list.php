<?php 
$query = "SELECT * FROM tbl_building" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='5%'>หรัส</th>
      <th width='80%'>อาคาร</th>
      <th width='5%'>+ชั้น</th>
      <th wbidth='5%'>แก้ไข</th>
      <th wbidth='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["bid"] .  "</td> ";
    echo "<td>" .$row["bname"] .  "</td> ";
     echo "<td><a href='buiding.php?act=addflo&bid=$row[0]' class='btn btn-info btn-xs'>+ชั่น</a></td> ";
    echo "<td><a href='buiding.php?act=edit&bid=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='buiding_del_db.php?bid=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>