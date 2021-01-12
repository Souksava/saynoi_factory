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
  <title>ຈັດການຂໍ້ມູນສິນຄ້າ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tcususdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tcususdominus-bootstrap-4/css/tcususdominus-bootstrap-4.min.css">
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
    <form action="product.php" id="formsearch" method="POST" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="Search" placeholder="ຄົ້ນຫາ" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" name="btnSearch" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
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
                <a href="customer.php" class="nav-link">
                  <i class="far fa fa-address-card nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="unit.php" class="nav-link">
                  <i class="far fa fa-archive nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product.php" class="nav-link">
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
                  <a href="../Make/make.php" class="nav-link">
                    <i class="far fa fa-bullhorn nav-icon"></i>
                    <p>ສັ່ງຜະລິດນ້ຳດື່ມ</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Make/accept.php" class="nav-link">
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
    <div style="width: 100%;">
        <div style="width: 48%; float: left;">
          <b>ຂໍ້ມູນສິນຄ້າ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 46%; float: right;" align="right">
          <form action="product.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສິນຄ້າ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ລະຫັດສິນຄ້າ</label>
                                        <input type="text" name="pro_id" id="pro_id" placeholder="ລະຫັດສິນຄ້າ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ຊື່ສິນຄ້າ</label>
                                        <input type="text" name="pro_name" id="pro_name" placeholder="ຊື່ສິນຄ້າ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                                        <select name="unit_id" id="unit_id">
                                          <option value="">--- ເລືອກຫົວໜ່ວຍສິນຄ້າ ---</option>
                                          <?php
                                              $sqlunit = "select * from tbunit order by unit_name asc;";
                                              $resultunit = mysqli_query($link, $sqlunit);
                                              while($rowunit = mysqli_fetch_array($resultunit, MYSQLI_NUM)){
                                                  echo " <option value='$rowunit[0]'>$rowunit[1]</option>";
                                              }
                                          ?>
                                        </select>
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ຈຳນວນ</label>
                                        <input type="number" min="0" name="qty" id="qty" placeholder="ຈຳນວນ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ລາຄາຂາຍ</label>
                                        <input type="number" min="0" name="price" id="price" placeholder="ລາຄາຂາຍ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ເງື່ອນໄຂການຜະລິດ</label>
                                        <input type="number" min="0" name="qtyalert" id="qtyalert" placeholder="ເງື່ອນໄຂການຜະລິດ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2">
                                        <label>ພາບສິນຄ້າ</label>
                                        <input type="file" name="img_path" id="img_path">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="btnSave" class="btn btn-outline-primary">ບັນທຶກ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
        </div>
    </div>
    <div class="clearfix"></div><br>
    <?php 
        if(isset($_POST['btnSearch'])){ 
        $Search = $_POST['Search'];
        $s =  '%'.$Search.'%';
        $sql = "select pro_id,pro_name,unit_name,price,qty,qty*price as total,qtyalert,img_path from tbproducts p left join tbunit u on p.unit_id=u.unit_id where pro_id like '$s' or pro_name like '$s' or unit_name like '$s' order by pro_id asc;";
        $result2 = mysqli_query($link, $sql);
    ?>
    <div class="table-responsive">
      <table class="table font12" style="width: 1200px;">
        <tr>
            <th>ສິນຄ້າ</th>
            <th>ລະຫັດສິນຄ້າ</th>
            <th>ຊື່ສິນຄ້າ</th>
            <th>ຈຳນວນ</th>
            <th>ລາຄາຂາຍ</th>
            <th>ລວມ</th>
            <th>ເງື່ອນໄຂການຜະລິດ</th>
            <th></th>
        </tr>
        <?php
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
            <td><?php echo $row['pro_id'] ?></td>
            <td><?php echo $row['pro_name'] ?></td>
            <td><?php echo $row['qty'] ?> <?php echo $row['unit_name'] ?></td>
            <td><?php echo number_format($row['price'],2) ?></td>
            <td><?php echo number_format($row['total'],2) ?></td>
            <td><?php echo $row['qtyalert'] ?>  <?php echo $row['unit_name'] ?></td>
            <td>
              <a href="updatePro.php?id=<?php echo $row['pro_id'] ?>" class="fa fa-pen toolcolor"></a>&nbsp; &nbsp; 
              <a href="delPro.php?id=<?php echo $row['pro_id'] ?>" class="fa fa-trash toolcolor"></a>
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
<?php
    if(isset($_POST['pro_id'])){
      $pro_id = $_POST['pro_id'];
      $pro_name = $_POST['pro_name'];
      $unit_id = $_POST['unit_id'];
      $qty = $_POST['qty'];
      $price = $_POST['price'];
      $qtyalert = $_POST['qtyalert'];    
      $img_path = $_FILES['img_path']['name'];
      $sqlck = "select pro_id from tbproducts where pro_id='$pro_id';";
      $resultck = mysqli_query($link, $sqlck);
      if(mysqli_num_rows($resultck) > 0){
        echo"<script>";
        echo"window.location.href='product.php?product=same';";
        echo"</script>";
      }
      else{
              if($img_path == ''){
                $Pro_image = '';
              }
              else{
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'img_'.uniqid().".".$ext;
                $image_path = "../../image/";
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
              }
              $sql = "insert into tbproducts(pro_id,pro_name,qty,unit_id,price,qtyalert,img_path) values('$pro_id','$pro_name','$qty','$unit_id','$price','$qtyalert','$Pro_image')";
              $result = mysqli_query($link, $sql);
              if(!$result)
                {
                  echo"<script>";
                  echo"window.location.href='product.php?save=false';";
                  echo"</script>";
                }
              else{       
                  echo"<script>";
                  echo"window.location.href='product.php?save2=true';";
                  echo"</script>";
              }
      }
    }
    if(isset($_GET['product'])=='same'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
      </script>';
    }
    if(isset($_GET['save2'])=='true'){
      echo'<script type="text/javascript">
      swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ", "success");
      </script>';
    }
    if(isset($_GET['save'])=='false'){
      echo'<script type="text/javascript">
      swal("", "ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດກະລຸນນາກວດສອບການປ້ອນຂໍ້ມູນອີກຄັ້ງ", "error");
      </script>';
    }
    if(isset($_GET['make'])=='notnull'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄດ້ ເນື່ອງຈາກສິນຄ້ານີ້ໄດ້ເຄື່ອນໄຫວໃນການຜະລິດນ້ຳດື່ມແລ້ວ", "error");
      </script>';
    }
    if(isset($_GET['export'])=='notnull'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄດ້ ເນື່ອງຈາກສິນຄ້ານີ້ໄດ້ເຄື່ອນໄຫວໃນການສົ່ງອອກນ້ຳດື່ມແລ້ວ", "error");
      </script>';
    }
    if(isset($_GET['del'])=='false'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນໄດ້ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ", "error");
      </script>';
    }
    if(isset($_GET['del2'])=='true'){
      echo'<script type="text/javascript">
      swal("", "ລົບຂໍ້ມູນສຳເລັດ", "success");
      </script>';
    }
    if(isset($_GET['update'])=='false'){
      echo'<script type="text/javascript">
      swal("", "ແກ້ໄຂຂໍ້ມູນບໍ່ສຳເລັດກະລຸນນາກວດສອບການປ້ອນຂໍ້ມູນອີກຄັ້ງ", "error");
      </script>';
    }
    if(isset($_GET['update2'])=='true'){
      echo'<script type="text/javascript">
      swal("", "ແກ້ໄຂຂໍ້ມູນສຳເລັດ", "success");
      </script>';
    }

?>
<!-- ./wrapper -->
<script type="text/javascript">

  const myform = document.getElementById('form1');
  const pro_id = document.getElementById('pro_id');
  const pro_name = document.getElementById('pro_name');
  const unit_id = document.getElementById('unit_id');
  const qty = document.getElementById('qty');
  const price = document.getElementById('price');
  const qtyalert = document.getElementById('qtyalert');
  const img_path = document.getElementById('img_path');
  myform.addEventListener('submit',(e) => {
    e.preventDefault();
   checkInputs();
  });

  function checkInputs(){
    const pro_idValue = pro_id.value.trim();
    const pro_nameValue = pro_name.value.trim();
    const unit_idValue = unit_id.value.trim();
    const qtyValue = qty.value.trim();
    const priceValue = price.value.trim();
    const qtyalertValue = qtyalert.value.trim();
    const img_pathValue = img_path.value.trim();
    if(pro_idValue === ''){
      setErrorFor(pro_id, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
    }
    else{
      setSuccessFor(pro_id);
    }
    if(pro_nameValue === ''){
      setErrorFor(pro_name, 'ກະລຸນາປ້ອນຊື່ສິນຄ້າ');
    }
    else{
      setSuccessFor(pro_name);
    }
    if(unit_idValue === ''){
      setErrorFor(unit_id, 'ກະລຸນາເລືອກຫົວໜ່ວຍສິນຄ້າ');
    }
    else{
      setSuccessFor(unit_id);
    }
    if(qtyValue === ''){
      setErrorFor(qty, 'ປ້ອນຈຳນວນສິນຄ້າ');
    }
    else{
      setSuccessFor(qty);
    }
    if(priceValue === ''){
      setErrorFor(price, 'ກະລຸນາປ້ອນລາຄາສິນຄ້າ');
    }
    else{
      setSuccessFor(price);
    }
    if(qtyalertValue === ''){
      setErrorFor(qtyalert, 'ກະລຸນາເງື່ອນໄຂການສັ່ງຊື້');
    }
    else{
      setSuccessFor(qtyalert);
    }
    if(pro_idValue !== '' && pro_nameValue !== '' && unit_idValue !=='' && qtyValue !== '' && priceValue !== '' && qtyalertValue !== ''){
      document.getElementById("form1").action = "product.php";
      document.getElementById("form1").submit();
    }
  }
</script>
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
<!-- Tcususdominus Bootstrap 4 -->
<script src="../../plugins/tcususdominus-bootstrap-4/js/tcususdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<script src="../../dist/js/style.js"></script>


</body>
</html>

      <?php
    }
    
?>
