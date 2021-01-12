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
      date_default_timezone_set("Asia/Bangkok");
      $datenow = time();
      $Date = date("Y-m-d",$datenow);
      $Time = date("H:i:s",$datenow);
      $emp_id = $_SESSION['emp_id'];
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ສັ່ງຜະລິດນ້ຳດື່ມ</title>
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
    <div class="container font14">
        <div class="row">
             <div class="col-md-8">
                 <form action="make2.php" id="form1" method="POST">
                     <div class="input-group">        
                         <input type="text" name="pro_id" value="<?php if(isset($_GET['id'])) echo $_GET['id'] ?>" placeholder="ລະຫັດສິນຄ້າ" class="form-control" autofocus>
                         <input type="number" min="0" name="qty" placeholder="ຈຳນວນ" class="form-control">
                         <div class="input-group-prepend">
                             <button type="submit" name="btnAdd" class="btn btn-outline-warning">ເພີ່ມລາຍການ</button>
                         </div>
                     </div>
                 </form>
             </div>
        </div>
     </div><br>
     <?php
      $sqlckrow = "select * from listmakedetail where emp_id='$emp_id';";
      $resultckrow = mysqli_query($link, $sqlckrow);
     ?>
     <div class="container-fluid font12">
         <div class="row">
            <?php
                if(mysqli_num_rows($resultckrow) > 0){
            ?>
                  <div class="col-md-8">
                    ລາຍການສິນຄ້າ
                  <div class="table-responsive">
                      <table class="table" style="width: 700px;">
                          <tr>
                              <th style="width: 110px;" scope="col">ສິນຄ້າ</th>
                              <th style="width: 180px;" scope="col">ຊື່ສິນຄ້າ</th>
                              <th style="width: 60px;" scope="col">ຈຳນວນ</th>
                              <th style="width: 75px;"></th>
                          </tr>
                          <?php
                              $sql = "select m_no,l.pro_id,pro_name,l.qty,unit_name,img_path from listmakedetail l left join tbproducts p on l.pro_id=p.pro_id left join tbunit u on p.unit_id=u.unit_id where emp_id='$emp_id' order by l.pro_id asc;";
                              $result2 = mysqli_query($link, $sql);
                              while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                          ?>
                          <tr>
                          <td>
                            <?php 
                                if($row['img_path'] != ''){
                                  ?>
                                    <a href="../../image/<?php echo $row['img_path'];?>" target="_blank">
                                      <img src="../../image/<?php echo $row['img_path'];?>" class="img-circle elevation-2" alt="" width="30px">
                                    </a>
                                  <?php
                                }else{
                                  ?>
                                    <a href="../../image/water.png" target="_blank">
                                      <img src="../../image/water.png" class="img-circle elevation-2" alt="" width="30px">
                                    </a>
                                  <?php
                                }
                              ?>
                            </td>
                              <td><?php echo $row['pro_name']?></td>
                              <td> 
                                  <?php echo $row['qty']?> <?php echo $row['unit_name']?>
                              </td>
                              <td>
                                  <a href="dellist.php?id=<?php echo $row['m_no'] ?>" class="fa fa-trash toolcolor"></a>
                              </td>
                          </tr>
                          <?php
                              }
                              $sqlsum = "select sum(qty) as qtyTotal from listmakedetail where emp_id='$emp_id';";
                              $resultsum = mysqli_query($link,$sqlsum);
                              $rowsum = mysqli_fetch_array($resultsum, MYSQLI_ASSOC);
                              
                          ?>
                      </table>
                      <hr size="3" align="center" width="100%">
                  </div>
                  <div align="right">
                      <div class="col-md-12 ">
                          ຍອມລວມ
                      </div>
                      <div class="col-md-12">
                          <br><h4 style="color: #CE3131;"> <?php echo $rowsum['qtyTotal'] ?> ລາຍການ</h4> 
                      </div>
                  </div>
              </div>
            <?php
                }
                if(mysqli_num_rows($resultckrow) <= 0){
            ?>
            <div class="col-md-8">
                <hr size="1" width="100%" />
                  <br>
                  <div align="center">ຍັງບໍ່ມີລາຍການສັ່ງຊື້</div>
                  <br>
                <hr size="1" width="100%" />
            </div>
            <?php
                }
            ?>
             <div class="col-lg-3 font12">
                 <div class="row row-cols-1 row-cols-md-1">
                     <div class="col mb-4">
                         <div class="card">
                             <div class="card-body">
                                 <h5 align="center" class="card-title"></h5>
                                 <p class="card-text">
                                     <form action="#" id="formSave" method="POST">
                                         <div class="row">
                                             <div class="col-md-12">
                                               <?php
                                                  $sqlorderid = "select max(make_no) as make_no from tbmaking;";
                                                  $resultorderid = mysqli_query($link,$sqlorderid);
                                                  $roworderid = mysqli_fetch_array($resultorderid, MYSQLI_ASSOC);
                                                  $make_no2 = $roworderid['make_no'] + 1;
                                               ?>
                                                 ເລກທີບິນ: <?php echo $make_no2; ?>
                                                 <input type="hidden" name="make_no" id="make_no" value="<?php echo $make_no2 ?>" >
                                                 <input type="hidden" name="amount" value="<?php echo $rowsum['qtyTotal']; ?>">
                                             </div>
                                             <hr size="3" align="center" width="100%">
                                             <div class="col-md-12" align="center">
                                                    <button type="button" name="btnAdd" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal2">ບັນທຶກການຜະລິດ</button>
                                                    <div class="modal fade font14" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" align="center">
                                                                    ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການຜະລິດນ້ຳດື່ມເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                                                                    <button type="submit" name="btnSave" class="btn btn-outline-warning">ບັນທຶກ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                         </div>
                                     </form>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
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
<?php
  if(isset($_POST['btnAdd'])){
    $pro_id = $_POST['pro_id'];
    $qty = $_POST['qty'];
    $sqlcklist = "select * from listmakedetail where pro_id='$pro_id' and emp_id='$emp_id';";
    $resultcklist = mysqli_query($link,$sqlcklist);
    $sqlckpro = "select * from tbproducts where pro_id='$pro_id';";
    $resultckpro = mysqli_query($link,$sqlckpro);
    if($qty == '' or $qty == 0){
      $qty = '1';
    }
    if($pro_id == ''){
      echo"<script>";
      echo"window.location.href='make2.php?product=null';";
      echo"</script>";
    }
    else if(mysqli_num_rows($resultcklist) > 0){
        $sqlupdate = "update listmakedetail set qty=qty+'$qty' where pro_id='$pro_id' and emp_id='$emp_id';";
        $resultupdate = mysqli_query($link,$sqlupdate);
        echo"<meta http-equiv='refresh' content='0';URL=make2.php'>";
    }
    else{
      $sqladd = "insert into listmakedetail(pro_id,qty,emp_id) values('$pro_id','$qty','$emp_id')";
      $resultadd = mysqli_query($link,$sqladd);
      echo"<meta http-equiv='refresh' content='0';URL=make2.php'>";
    }
  }
  if(isset($_POST['btnSave'])){
    $make_no = $_POST['make_no'];
    $amount = $_POST['amount'];
    if(mysqli_num_rows($resultckrow) <= 0){
      echo"<script>";
      echo"window.location.href='make2.php?row=null';";
      echo"</script>";
    }
    else{
      $sqlsave = "insert into tbmaking(make_no,dateofmake,timeofmake,qtyamount,emp_id,status,seen1,seen2) values('$make_no','$Date','$Time','$amount','$emp_id','ຍັງບໍ່ອະນຸມັດ','','');";
      $resultsave = mysqli_query($link,$sqlsave);
      if(!$resultsave){
        echo"<script>";
        echo"window.location.href='make2.php?save=false';";
        echo"</script>";
      }
      else{
        $sqlsave2 = "insert into tbmakedetail(make_no,pro_id,qty) select '$make_no',pro_id,qty from listmakedetail where emp_id='$emp_id';";
        $resultsave2 = mysqli_query($link,$sqlsave2);
        if(!$resultsave2){
          echo"<script>";
          echo"window.location.href='make2.php?save=false';";
          echo"</script>";
        }
        else{
          $sqlclear = "delete from listmakedetail where emp_id='$emp_id';";
          $resultclear = mysqli_query($link,$sqlclear);
          echo"<script>";
          echo"window.location.href='make2.php?save2=success';";
          echo"</script>";
        }
      }
    }
  }
  if(isset($_GET['save'])=='false'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !!", "error");
    </script>';
  }
  if(isset($_GET['save2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ !!", "success");
    </script>';
  }
  if(isset($_GET['product'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ກະລຸນາປ້ອນລະຫັດສິນຄ້າ !!", "info");
    </script>';
  }
  if(isset($_GET['row'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ກະລຸນາເພີ່ມລາຍການສັ່ງຜະລິດສິນຄ້າ !!", "info");
    </script>';
  }

?>
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
