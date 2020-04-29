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
                จัดการข้อมูล
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="content">
                                       <?php include('member_list.php');?>
                            
                                    
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