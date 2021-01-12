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
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ລາຍງານການສົ່ງອອກ</title>
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
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
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
    <div style="width: 100%;">
        <div style="width: 48%; float: left;">
            <b>ລາຍງານການສົ່ງອອກ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 48%; float: right;" align="right">
            <form action="Report_Exp.php" method="POST" id="formReport" target="_blank">
              <?php
                  if(isset($_POST['btnSearch'])){
                    $date_1 = $_POST['date1'];
                    $date_2 = $_POST['date2'];
                    $bill_no = $_POST['billno'];
              ?>
              <input type="hidden" name="billno" value="<?php echo $bill_no ?>" class="form-control">
              <input type="hidden" name="date1" value="<?php echo $date_1 ?>" class="form-control">
              <input type="hidden" name="date2" value="<?php echo $date_2 ?>" class="form-control">
                  <button type="submit" name="btnReport" class="btn btn-outline-warning">ພິມລາຍງານ</button>
              <?php
                  }
                  if(isset($_POST['btnAll'])){
                ?>
                  <button type="submit" name="btnAll" class="btn btn-outline-warning">ພິມລາຍງານ</button>
                <?php
                  }
                ?>

            </form>
        </div>
    </div>
    <div class="col-md-8">
        <form action="report_export.php" id="form1" method="POST">
          <div class="input-group">        
              <input type="text" name="billno" placeholder="ເລກທີໃບສົ່ງອອກສິນຄ້າ" class="form-control">
              <input type="date" name="date1" class="form-control">
              <input type="date" name="date2" class="form-control">
              <div class="input-group-prepend">
                  <button type="submit" name="btnSearch" class="btn btn-outline-warning">ສະແດງລາຍການ</button>
                  <button type="submit" name="btnAll" class="btn btn-outline-warning">ລາຍງານທັງໝົດ</button>
              </div>
            </div>
        </form>
    </div><br>
    <?php
        if(isset($_POST['btnSearch'])){
          $billno = $_POST['billno'];
          $date1 = $_POST['date1'];
          $date2 = $_POST['date2'];
    ?> 
    <div class="table-responsive" style="text-align: center;">
        <table class="table font12" style="width: 1200px">
          <tr>
              <th>ລຳດັບ</th>
              <th>ເລກທີບິນ</th>
              <th>ລວມມູນຄ່າ</th>
              <th>ວັນທີ</th>
              <th>ເວລາ</th>
              <th>ພະນັກງານຂົນສົ່ງ</th>
              <th>ລູກຄ້າ</th>
              <th>ສະຖານະການຈ່າຍ</th>
              <th></th>
  
          </tr>
          <?php
              $no_ = 0;
              $sql = "select billno,dateExp,timeExp,amount,cus_name,emp_name,x.status from tbexports x left join tbemployees e on x.emp_id=e.emp_id left join tbcustomers c on x.cus_id=c.cus_id where billno='$billno' or dateExp between '$date1' and '$date2' order by billno asc;";
              $result = mysqli_query($link,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          ?>
          <tr>
              <td><?php echo $no_ += 1; ?></td>
              <td><?php echo $row['billno'] ?></td>
              <td><?php echo number_format($row['amount'],2) ?> ກີບ</td>
              <td><?php echo $row['dateExp'] ?></td>
              <td><?php echo $row['timeExp'] ?></td>
              <td><?php echo $row['emp_name'] ?></td>
              <td><?php echo $row['cus_name'] ?></td>
              <td><?php echo $row['status'] ?></td>
              <td>
                  <a href="report_export2.php?id=<?php echo $row['billno'] ?>" class="fa fa-info toolcolor"></a>&nbsp; &nbsp; 
              </td>
          </tr>
          <?php
              }
          ?>
        </table>
      </div>
      <?php
        }
      ?>
        <?php
        if(isset($_POST['btnAll'])){
          $billno = $_POST['billno'];
          $date1 = $_POST['date1'];
          $date2 = $_POST['date2'];
    ?> 
    <div class="table-responsive" style="text-align: center;">
        <table class="table font12" style="width: 1200px">
          <tr>
              <th>ລຳດັບ</th>
              <th>ເລກທີບິນ</th>
              <th>ລວມມູນຄ່າ</th>
              <th>ວັນທີ</th>
              <th>ເວລາ</th>
              <th>ພະນັກງານຂົນສົ່ງ</th>
              <th>ລູກຄ້າ</th>
              <th>ສະຖານະການຈ່າຍ</th>
              <th></th>
  
          </tr>
          <?php
              $no_ = 0;
              $sql = "select billno,dateExp,timeExp,amount,cus_name,emp_name,x.status from tbexports x left join tbemployees e on x.emp_id=e.emp_id left join tbcustomers c on x.cus_id=c.cus_id order by billno asc;";
              $result = mysqli_query($link,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          ?>
          <tr>
              <td><?php echo $no_ += 1; ?></td>
              <td><?php echo $row['billno'] ?></td>
              <td><?php echo number_format($row['amount'],2) ?> ກີບ</td>
              <td><?php echo $row['dateExp'] ?></td>
              <td><?php echo $row['timeExp'] ?></td>
              <td><?php echo $row['emp_name'] ?></td>
              <td><?php echo $row['cus_name'] ?></td>
              <td><?php echo $row['status'] ?></td>
              <td>
                  <a href="report_export2.php?id=<?php echo $row['billno'] ?>" class="fa fa-info toolcolor"></a>&nbsp; &nbsp; 
              </td>
          </tr>
          <?php
              }
          ?>
        </table>
      </div>
      <?php
        }
      ?>
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
