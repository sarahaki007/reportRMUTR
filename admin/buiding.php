<?php include('h.php');?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
        <?php include('menu_l.php');?>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        รายการตึก/อาคาร
        <a href="buiding.php?act=add" class="btn-info btn-sm">+เพิ่ม</a>
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
                    include('buiding_form_add.php');
                  }elseif ($act == 'edit') {
                    include('buiding_form_edit.php');
                  }elseif ($act == 'editroom') {
                    include('buiding_form_edit_room.php');                    
                  }elseif ($act == 'addflo') {
                    include('buiding_form_add_flo.php');
                  }elseif ($act == 'addroom') {
                    include('buiding_form_add_room.php');
                  }else {
                    include('buiding_list.php');
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