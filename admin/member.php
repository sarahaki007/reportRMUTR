<?php include('h.php');?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    
        <?php include('menu_l.php');?>
      
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        รายการสมาชิก
        <a href="member.php?act=add" class="btn-info btn-sm">+เพิ่ม</a>
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <?php
                  $act = $_GET['act'];
                  if($act == 'add'){
                  include('member_form_add.php');
                  }elseif ($act == 'edit') {
                  include('member_form_edit.php');
                  }elseif ($act == 'editch') {
                  include('tec_form_edit.php');
                  }elseif($act=='rwd'){
                  include('member_form_rwd.php');
                  }else {
                  include('member_list.php');
                  }
                  ?>                   
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