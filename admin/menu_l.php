<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="image">
        <center>
        <img src="../m_img/<?php echo $m_img; ?>" class="img-circle" alt="User Image" width="100px">
        <p style="color: #fff;">คุณ <?php echo $m_name; ?></p>
      </center>
      </div>
      <!-- <div class="pull-left info">
        <p>คุณ <?php echo $m_name; ?></p>
        Status
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div> -->
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="index.php"><i class="fa fa-home"></i>
          <span> หน้าหลัก</span>
        </a>
      </li>
      <li>
        <a href="member.php"><i class="fa fa-edit"></i>
          <span> จัดการสมาชิก</span>
        </a>
      </li>
      <li>
        <a href="technician_list.php"><i class="fa fa-edit"></i>
          <span> จัดการช่าง</span>
        </a>
      </li>
      <li>
        <a href="position.php"><i class="fa fa-edit"></i>
          <span> จัดการตำแหน่ง</span>
        </a>
      </li>
      <li>
        <a href="device.php"><i class="fa fa-edit"></i>
          <span> จัดการประเภทปัญหา</span>
        </a>
      </li>
      <li>
        <a href="status.php"><i class="fa fa-edit"></i>
          <span> จัดการสถานะ</span>
        </a>
      </li>

      <li>
        <a href="buiding.php"><i class="fa fa-edit"></i>
          <span> จัดการอาคาร</span>
        </a>
      </li>
      
      
      <li>
        <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="glyphicon glyphicon-log-out"></i>
          <span> ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>