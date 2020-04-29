<?php 
$query = "
SELECT * FROM tbl_member as m
ORDER BY m.m_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class='warning'>
      <th width='7%'>รหัสสมาชิก</th>
      <th width='5%'>รูป</th>
      <th width='10%'>ผู้ใช้</th>
      <th width='20%'>ชื่อ_สกุล</th>
      <th width='10%'>สภานะ</th>
      <th width='5%'>แก้ไข</th>
      <th width='5%'>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["m_id"] .  "</td> ";
    echo "<td>"."<img src='../m_img/".$row['m_img']."' width='100%'>"."</td>";
    echo "<td>" .$row["m_username"] 
    ."<br>" 
    ."<a href='member.php?ID=$row[0]&act=rwd' class='btn btn-primary btn-xs'>แก้รหัส</a>"
    .  "</td> ";
    echo "<td>" .$row["m_fname"].$row["m_name"] 
    .' '.$row["m_lname"] 
    .'<br>'
    .' โทร. '
    .$row["m_phone"]
    .'<br>'
    .' email '
    .$row["m_email"]
    . "</td> ";
    echo "<td>" .$row["m_level"] .  "</td> ";
    echo "<td><a href='member.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a>
    <br></br>
            
    </td> ";
    echo "<td>";
    if($m_id != $row["m_id"]) { 
          echo "
          <a href='member_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a>
          ";
      }
    echo "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>