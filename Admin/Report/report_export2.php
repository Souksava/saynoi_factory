<?php
   session_start();
    if($_SESSION['ses_id'] == ''){
        echo"<meta http-equiv='refresh' content='1;URL=../../index.php'>";        
    }
    else if($_SESSION['auther_id'] != 1){
        echo"<meta http-equiv='refresh' content='1;URL=../../Check/logout.php'>";
    }
    else{
      require '../../ConnectDB/connectDB.php';
      $id = $_GET['id'];
      $sqlget = "select billno,dateExp,timeExp,amount,x.cus_id,cus_name,emp_name,x.status from tbexports x left join tbemployees e on x.emp_id=e.emp_id left join tbcustomers c on x.cus_id=c.cus_id where billno='$id';";
      $resultget = mysqli_query($link,$sqlget);
      $rowget = mysqli_fetch_array($resultget,MYSQLI_ASSOC);
      $cus_id = $rowget['cus_id'];
      $sqlcus = "select * from tbcustomers where cus_id='$cus_id';";
      $resultcus = mysqli_query($link,$sqlcus);
      $rowcus = mysqli_fetch_array($resultcus,MYSQLI_ASSOC);
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ລາຍລະອຽດການສົ່ງອອກ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/alt/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light font14">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../Main.php" class="nav-link">ໜ້າຫຼັກ</a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 font14">
    <!-- Brand Logo -->
    <a href="../Main.php" class="brand-link">
      <img src="../../image/background.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ນ້ຳດື່ມຫົງສະຫວັນ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
            if($_SESSION['img_path'] == ''){
              ?>
              <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="User Image">
              <?php

            }
            else{
              ?>
                   <img src="../../image/<?php echo $_SESSION['img_path'] ?>" class="img-circle elevation-2" alt="User Image">
              <?php
            }
          ?>
      
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['emp_name'] ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                ຈັດການຂໍ້ມູນຫຼັກ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Management/employee.php" class="nav-link">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  ຜະລິດນ້ຳດື່ມ
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Make/accept.php" class="nav-link">
                    <i class="far fa fa-check nav-icon"></i>
                    <p>ອະນຸມັດ</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                ລາຍງານ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report_employee.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report_customer.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report_product.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນນ້ຳດື່ມ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report_make.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນການຜະລິດ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report_export.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນສົ່ງອອກນ້ຳດື່ມ</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  ອອກຈາກລະບົບ
                </p>
              </a>
            </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="main-footer font14">
    <form action="../../Check/Logout.php" method="POST" id="formLogout">
      <div class="modal fade font14" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body" align="center">
                      ທ່ານຕ້ອງການອອກຈາກລະບົບ ຫຼື ບໍ່ ?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                      <button type="submit" name="btnLogout" class="btn btn-outline-danger">ອອກຈາກລະບົບ</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
    <div class="card">
        <h5 class="card-header"><b>ລາຍລະອຽດການສົ່ງອອກ</b></h5>
        <div class="card-body">
            <div style="width: 100%;">
                <div style="width: 48%;float: left;">
                    ເລກທີບິນ: <?php echo $rowget['billno']?><br>
                    ພະນັກງານຂົນສົ່ງ: <?php echo $rowget['emp_name']?> <br>
                    ລູກຄ້າ: <?php echo $rowget['cus_name']?> <br><br>
                    <form action="Report_Exp2.php" method="POST" id="form1" target="_blank">
                        <input type="hidden" name="billno" value="<?php echo $rowget['billno']  ?>">
                        <input type="hidden" name="emp_name" value="<?php echo $rowget['emp_name'] ?>">
                        <input type="hidden" name="cus_name" value="<?php echo $rowget['cus_name'] ?>">
                        <input type="hidden" name="dateExp" value="<?php echo $rowget['dateExp'] ?>">
                        <input type="hidden" name="timeExp" value="<?php echo $rowget['timeExp'] ?>">
                        <input type="hidden" name="status" value="<?php echo $rowget['status'] ?>">
                        <input type="hidden" name="tel" value="<?php echo $rowcus['Tel'] ?>">
                        <input type="hidden" name="email" value="<?php echo $rowcus['Email'] ?>">
                        <input type="hidden" name="address" value="<?php echo $rowcus['Address'] ?>">
                        <input type="hidden" name="cus_surname" value="<?php echo $rowcus['Cus_Surname'] ?>">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button class="btn btn-outline-warning" name="btnReport">ພິມລາຍງານ</button>
                    </form>
                </div>
                <div style="width: 48%;float: right;" align="right">
                    ວັນທີ: <?php echo $rowget['dateExp']?> <br>
                    ເວລາ: <?php echo $rowget['timeExp']?> <br>
                    ສະຖານະການຈ່າຍ: <?php echo $rowget['status']?> <br>
                </div>
            </div>
        </div>
      </div>
      <div class="table-responsive">
             <table class="table" style="width: 1200px;">
                 <tr>
                     <th style="width: 110px;" scope="col">ສິນຄ້າ</th>
                     <th style="width: 180px;" scope="col">ຊື່ສິນຄ້າ</th>
                     <th style="width: 80px;" scope="col">ຈຳນວນ</th>
                     <th style="width: 100px;" scope="col">ລາຄາ</th>
                     <th style="width: 120px;" scope="col">ລວມ</th>
                 </tr>
                 <?php
                      $sql = "select expno,l.pro_id,pro_name,l.qty,l.price,l.qty*l.price as total,unit_name,p.img_path from tbexportdetail l left join tbproducts p on l.pro_id=p.pro_id left join tbunit u on p.unit_id=u.unit_id where billno='$id' order by l.pro_id asc;";
                      $result2 = mysqli_query($link, $sql);
                      while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                  ?>
                 <tr>
                     <td scope="row" ><img src="../../image/<?php echo $row['img_path'] ?>" alt="" style="width: 70px;heigt: 70px;"></td>
                     <td><?php echo $row['pro_name'] ?></td>
                     <td> 
                        <?php echo $row['qty'] ?> <?php echo $row['unit_name'] ?>
                     </td>
                     <td> 
                        <?php echo number_format($row['price'],2) ?>
                     </td>
                     <td> 
                        <?php echo number_format($row['total'],2) ?>
                    </td>
                 </tr>
                 <?php
                      }
                 ?>
             </table>
             <hr size="3" align="center" width="100%">
         </div>
         <div align="right">
             <div class="col-md-12 ">
                 ຍອມລວມ (ລວມພາສີມູນຄ່າເພີ່ມ)
             </div>
             <div class="col-md-12">
                  <?php 
                    $sqlsum = "select sum(qty*price) as amount from tbexportdetail where billno='$id';";
                    $resultsum = mysqli_query($link,$sqlsum);
                    $rowsum = mysqli_fetch_array($resultsum,MYSQLI_ASSOC);
                  ?>
                 <br><h4 style="color: #CE3131;"> <?php echo number_format($rowsum['amount'],2) ?> ກີບ</h4> 
             </div>
         </div>
  </div>
  <!-- /.content-wrapper -->
  <br>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 </strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

</body>
</html>

      <?php
    }

?>
