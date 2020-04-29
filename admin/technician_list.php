<?php
include('h.php');
?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <?php include('menu_l.php');?>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        ข้อมูลช่าง
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <br>
              <div class="row">
                <div class="col-sm-11" style="padding-left: 10%">
                  <div id="content">
                    
                    <?php
                    $query = "
                    SELECT * FROM tbl_technician as t
                    ORDER BY t.tech_id DESC" or die("Error:" . mysqli_error());
                    $result = mysqli_query($con, $query);
                    echo ' <table id="example1" class="table table-bordered table-striped">';
                      echo "<thead>";
                        echo "<tr class='warning'>
                          <th width='2%'>รหัสช่าง</th>
                          <th width='20%'>ชื่อ_สกุล</th>
                          <th width='5%'>แก้ไข</th>
                          <th width='5%'>ลบ</th>
                        </tr>";
                      echo "</thead>";
                      while($row = mysqli_fetch_array($result)) {
                      echo "<tr>";
                        echo "<td>" .$row["tech_id"]."</td> ";
                        echo "<td>" .$row["t_fname"].$row["t_lname"]
                          .' '
                          .'<br>'
                          .' โทร. '
                          .$row["t_phone"]
                          .'<br>'
                          .' email '
                          .$row["t_email"]
                        . "</td> ";
                        echo "<td><a href='member.php?act=editch&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a>
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
                  
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<?php include('footerjs.php');?>