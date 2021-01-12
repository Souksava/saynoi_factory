<?php
   session_start();
    if($_SESSION['ses_id'] == ''){
        echo"<meta http-equiv='refresh' content='1;URL=../../index.php'>";        
    }
    else if($_SESSION['auther_id'] != 2){
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
  <title>ອະນຸມັດ</title>
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
  <script src="../../dist/js/sweetalert.min.js"></script>
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
                <a href="../Management/customer.php" class="nav-link">
                  <i class="far fa fa-address-card nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Management/unit.php" class="nav-link">
                  <i class="far fa fa-archive nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Management/product.php" class="nav-link">
                  <i class="far fa fa-cube nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນນ້ຳດື່ມ</p>
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
                  <a href="make.php" class="nav-link">
                    <i class="far fa fa-bullhorn nav-icon"></i>
                    <p>ສັ່ງຜະລິດນ້ຳດື່ມ</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="accept.php" class="nav-link">
                    <i class="far fa fa-check nav-icon"></i>
                    <p>ອະນຸມັດ</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="import.php" class="nav-link">
                    <i class="far fa fa-cart-plus nav-icon"></i>
                    <p>ນຳສິນຄ້າເຂົ້າສາງ</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-truck"></i>
                <p>
                  ຂາຍ ແລະ ສົ່ງອອກນ້ຳດື່ມ
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Export/export.php" class="nav-link">
                    <i class="nav-icon fa fa-truck nav-icon"></i>
                    <p>ສົ່ງອອກນ້ຳດື່ມ</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Export/credit.php" class="nav-link">
                    <i class="fa fa-credit-card nav-icon"></i>
                    <p>ຊ່ຳລະບິນຄ້າງຈ່າຍ</p>
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
                <a href="../Report/report_employee.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_customer.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_product.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນນ້ຳດື່ມ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_make.php" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນການຜະລິດ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_export.php" class="nav-link">
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
        <b>ລາຍການສັ່ງຜະລິດ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
        <div class="row">
             <div class="col-md-8">
                 <form action="accept.php" id="form1" method="POST">
                     <div class="input-group">        
                         <input type="date" name="date1" class="form-control">
                         <input type="date" name="date2" class="form-control">
                         <select name="status" id="" class="form_control">
                           <option value="">--- ເລືອກສະຖານະ ---</option>
                           <option value="ອະນຸມັດ">ອະນຸມັດ</option>
                           <option value="ຍັງບໍ່ອະນຸມັດ">ຍັງບໍ່ອະນຸມັດ</option>
                           <option value="ບໍ່ອະນຸມັດ">ບໍ່ອະນຸມັດ</option>
                         </select>
                         <div class="input-group-prepend">
                             <button type="submit" name="btnCheck" class="btn btn-outline-warning">ສະແດງລາຍການ</button>
                         </div>
                     </div>
                 </form>
             </div>
        </div>
    </div><br>
    <?php
      if(isset($_POST['btnCheck'])){
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        $status = $_POST['status'];
    ?>
    <div class="table-responsive" style="text-align: center;">
        <table class="table font12" style="width: 1200px">
          <tr>
              <th>ລຳດັບ</th>
              <th>ເລກທີໃບສັ່ງຜະລິດ</th>
              <th>ລວມລາຍການທັງໝົດ</th>
              <th>ວັນທີ</th>
              <th>ເວລາ</th>
              <th>ຜູ້ສັ່ງຜະລິດ</th>
              <th>ສະຖານະ</th>
              <th></th>
  
          </tr>
          <?php
            $no_ = 0;
            $sql = "select make_no,dateofmake,timeofmake,qtyamount,emp_name,status from tbmaking m left join tbemployees e on m.emp_id=e.emp_id where m.status='$status' or dateofmake between '$date1' and '$date2'";
            $result = mysqli_query($link,$sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          ?>
          <tr>
              <td><?php echo $no_ += 1; ?></td>
              <td><?php echo $row['make_no'];?></td>
              <td><?php echo $row['qtyamount'];?></td>
              <td><?php echo $row['dateofmake'];?></td>
              <td><?php echo $row['timeofmake'];?></td>
              <td><?php echo $row['emp_name'];?></td>
              <td><?php echo $row['status'];?></td>
              <td>
                  <a href="del.php?id=<?php echo $row['make_no']; ?>" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp; 
                  <a href="makedetail2.php?id=<?php echo $row['make_no']; ?>" class="fa fa-info toolcolor"></a>&nbsp; &nbsp; 
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
  </div>
  <!-- /.content-wrapper -->
  <br>
  <?php
  if(isset($_GET['accepted'])=='true'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບລາຍການຜະລິດນີ້ໄດ້ ເນື່ອງຈາກໃບສັ່ງຜະລິດນີ້ໄດ້ອະນຸມັດແລ້ວ !!", "error");
    </script>';
  }
  if(isset($_GET['del'])=='false'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບລາຍການຜະລິດນີ້ໄດ້ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !!", "error");
    </script>';
  }
  if(isset($_GET['del2'])=='true'){
    echo'<script type="text/javascript">
    swal("", "ລົບໃບສັ່ງຊື້ສຳເລັດ !!", "success");
    </script>';
  }

  ?>
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
