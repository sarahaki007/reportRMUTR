<?php include('h.php');?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    
        <?php include('menu_l.php');?>
      
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        รายการแผนก
        <a href="depm.php?act=add" class="btn-info btn-sm">+ADD</a>
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
                  include('depm_form_add.php');
                  }elseif ($act == 'edit') {
                  include('depm_form_edit.php');
                  }else {
                  include('depm_list.php');
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