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
  <title>ຈັດການຂໍ້ມູນພະນັກງານ</title>
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
    <form action="employee.php" id="formsearch" method="POST" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" name="Search" aria-label="Search">
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
                <a href="employee.php" class="nav-link">
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
          <b>ຂໍ້ມູນພະນັກງານ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 46%; float: right;" align="right">
          <form action="employee.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນພະນັກງານ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດພະນັກງານ</label>
                                      <input type="text" name="emp_id" id="emp_id" placeholder="ລະຫັດພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ພະນັກງານ</label>
                                      <input type="text" name="emp_name" id="emp_name" class="form-control" placeholder="ຊື່ພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="emp_surname" id="emp_surname" placeholder="ນາມສະກຸນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເພດ</label>
                                    <select name="gender" id="gender">
                                      <option value="">--- ເລືອກເພດ ---</option>
                                      <option value="ຍິງ">ຍິງ</option>
                                      <option value="ຊາຍ">ຊາຍ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຕຳແໜ່ງ</label>
                                    <select name="auther_id" id="auther_id">
                                      <option value="">--- ເລືອກເລືອກຕຳແໜ່ງ ---</option>
                                      <?php
                                          $sqlauther = "select * from auther;";
                                          $resultauther = mysqli_query($link, $sqlauther);
                                          while($rowauther = mysqli_fetch_array($resultauther, MYSQLI_NUM)){
                                           echo " <option value='$rowauther[0]'>$rowauther[1]</option>";
                                        }
                                      ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                                      <textarea name="address" id="address" cols="3" rows="3" placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="tel" id="tel" placeholder="ເບີໂທລະສັບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ອີເມວ</label>
                                      <input type="text" name="email" id="email" placeholder="ທີ່ຢູ່ອີເມວ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="password" name="password" id="password" placeholder="ລະຫັດຜູ້ໃຊ້ລະບົບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຢືນຢັນລະຫັດ</label>
                                    <input type="password" name="password2" id="password2" placeholder="ຢືນຢັນລະຫັດ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຮູບພາບ</label>
                                      <input type="file" name="img_path" id="img_path">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="Save" id="Save" class="btn btn-outline-primary" onclick="">ບັນທຶກ</button>
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
        $sql = "select Emp_ID,Emp_Name,Emp_Surname,Gender,Auther_Name,Tel,Address,md5(Password) as Password,Email,img_path from tbemployees e left join auther a on e.auther_id=a.auther_id where emp_id like '$s' or emp_name like '$s' or emp_surname like '$s' or Auther_name like '$s' or gender like '$s'or emp_surname like '$s'or Address like '$s' order by emp_id asc;";
        $result2 = mysqli_query($link, $sql);
    ?>
    <div class="table-responsive">
      <table class="table font12" style="width: 1300px;">
        <tr>
            <th>ລະຫັດ</th>
            <th>ຊື່ພະນັກງານ</th>
            <th>ນາມສະກຸນ</th>
            <th>ເພດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ຕຳແໜ່ງ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th>ລະຫັດຜູ້ໃຊ້ລະບົບ</th>
            <th>ຮູບພາບ</th>
            <th></th>

        </tr>
        <?php
          while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
        ?>
        <tr>
            <td><?php echo $row['Emp_ID'];?></td>
            <td><?php echo $row['Emp_Name'];?></td>
            <td><?php echo $row['Emp_Surname'];?></td>
            <td><?php echo $row['Gender'];?></td>
            <td><?php echo $row['Tel'];?></td>
            <td><?php echo $row['Address'];?></td>
            <td><?php echo $row['Auther_Name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Password'];?></td>
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
                    <a href="../../image/image.jpeg" target="_blank">
                      <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                    </a>
                  <?php
                }
              ?>
            </td>
            <td>
              <a href="updateEmp.php?id=<?php echo $row['Emp_ID'] ?>" class="fa fa-pen toolcolor"></a>&nbsp; &nbsp; 
              <a href="delEmp.php?id=<?php echo $row['Emp_ID'] ?>" class="fa fa-trash toolcolor"></a>
            </td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>
  </div>
  <?php
        }
  ?>
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
    if(isset($_POST['emp_id'])){
      $Emp_ID = $_POST['emp_id'];
      $name = $_POST['emp_name'];
      $surname = $_POST['emp_surname'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];    
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $auther_id = $_POST['auther_id'];
      $img_path = $_FILES['img_path']['name'];
      //ກວດສອບວ່າມີລະຫັດຊ້ຳກັນບໍ່
      $sqlck = "select emp_id from tbemployees where emp_id='$Emp_ID';";
      $resultck = mysqli_query($link, $sqlck);
      $sqlckemail = "select * from tbemployees where email='$email';";
      $resultckemail = mysqli_query($link, $sqlckemail);
      if(mysqli_num_rows($resultck) > 0){
          echo"<script>";
          echo"window.location.href='employee.php?emp=same';";
          echo"</script>";
      }
      else if(mysqli_num_rows($resultckemail) > 0){
        echo"<script>";
        echo"window.location.href='employee.php?email=same';";
        echo"</script>";
      }
      //ສິນສຸດການກວດສອບ
      else
      { 
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
          $sql = "insert into tbemployees(Emp_ID,Emp_Name,Emp_Surname,Gender,Address,Tel,Email,Password,auther_id,img_path) values('$Emp_ID','$name','$surname','$gender','$address','$tel','$email','$pass','$auther_id','$Pro_image')";
          $result = mysqli_query($link, $sql);
          if(!$result)
            {
              echo"<script>";
              echo"window.location.href='employee.php?save=false';";
              echo"</script>";
            }
          else{       
              echo"<script>";
              echo"window.location.href='employee.php?save2=true';";
              echo"</script>";
          }
      }  
  }


  if(isset($_GET['emp'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດພະນັກງານຄົນນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
  if(isset($_GET['email'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກອີເມວນີ້ມີແລ້ວ ກະລຸນາໃສ່ອີເມວອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
  if(isset($_GET['email2'])=='same2'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດແກ້ໄຂຂໍ້ມູນໄດ້ເນື່ອງຈາກອີເມວນີ້ມີແລ້ວ ກະລຸນາໃສ່ອີເມວອື່ນທີ່ແຕກຕ່າງ !!", "info");
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
    swal("", "ບໍ່ສາມາດລົບພະນັກງານຄົນນີ້ໄດ້ ເນື່ອງຈາກພະນັກງານຄົນນີ້ໄດ້ເຄື່ອນໄຫວໃນການຜະລິດນ້ຳດື່ມແລ້ວ", "error");
    </script>';
  }
  if(isset($_GET['export'])=='notnull'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບພະນັກງານຄົນນີ້ໄດ້ ເນື່ອງຈາກພະນັກງານຄົນນີ້ໄດ້ເຄື່ອນໄຫວໃນການສົ່ງອອກນ້ຳດື່ມແລ້ວ", "error");
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
  if(isset($_GET['emp_id'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດແກ້ໄຂຂໍ້ມູນໄດ້ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ", "error");
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
  const emp_id = document.getElementById('emp_id');
  const emp_name = document.getElementById('emp_name');
  const emp_surname = document.getElementById('emp_surname');
  const gender = document.getElementById('gender');
  const address = document.getElementById('address');
  const tel = document.getElementById('tel');
  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const password2 = document.getElementById('password2');
  const img_path = document.getElementById('img_path');
  const auther_id = document.getElementById('auther_id');
  // const Save = document.getElementByID('Save');

  myform.addEventListener('submit',(e) => {
    e.preventDefault();
   checkInputs();
  });

  function checkInputs(){
    const emp_idValue = emp_id.value.trim();
    const emp_nameValue = emp_name.value.trim();
    const emp_surnameValue = emp_surname.value.trim();
    const genderValue = gender.value.trim();
    const addressValue = address.value.trim();
    const telValue = tel.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const img_pathValue = img_path.value.trim();
    const auther_idValue = auther_id.value.trim();
    if(emp_idValue === ''){
      setErrorFor(emp_id, 'ກະລຸນາປ້ອນລະຫັດພະນັກງານ');
    }
    else{
      setSuccessFor(emp_id);
    }
    if(emp_nameValue === ''){
      setErrorFor(emp_name, 'ກະລຸນາປ້ອນຊື່ພະນັກງານ');
    }
    else{
      setSuccessFor(emp_name);
    }
    if(emp_surnameValue === ''){
      setErrorFor(emp_surname, 'ກະລຸນາປ້ອນນາມສະກຸນ');
    }
    else{
      setSuccessFor(emp_surname);
    }
    if(auther_idValue === ''){
      setErrorFor(auther_id, 'ກະລຸນນາເລືອກຕຳແໜ່ງ');
    }
    else{
      setSuccessFor(auther_id);
    }
    if(genderValue === ''){
      setErrorFor(gender, 'ກະລຸນາເລືອກເພດ');
    }
    else{
      setSuccessFor(gender);
    }
    if(addressValue === ''){
      setErrorFor(address, 'ກະລຸນາປ້ອນທີ່ຢູ່');
    }
    else{
      setSuccessFor(address);
    }
    if(telValue === ''){
      setErrorFor(tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
    }
    else{
      setSuccessFor(tel);
    }
    if(emailValue === ''){
      setErrorFor(email, 'ກະລຸນາປ້ອນທີ່ຢູ່ອີເມວ')
    }
    else if(!isEmail(emailValue)){
      setErrorFor(email, 'ຮູບແບບອີເມວບໍ່ຖືກຕ້ອງ')
    }
    else{
      setSuccessFor(email);
    }
    if(passwordValue == ''){
      setErrorFor(password, 'ກະລຸນາປ້ອນລະຫັດເຂົ້າໃຊ້ລະບົບ')
    }
    else{
      setSuccessFor(password);
    }
    if(password2Value == ''){
        setErrorFor(password2, 'ກະລຸນາປ້ອນການຢືນຢັນລະຫັດ')
      }
    else if(passwordValue !== password2Value){
        setErrorFor(password2, 'ການຢືນຢັນລະຫັດບໍ່ຕົງກັນ')
    }
    else{
        setSuccessFor(password2);
    }
    if(emp_idValue !== '' && emp_nameValue !== '' && emp_surnameValue !=='' && genderValue !== ''  && auther_idValue !== '' && addressValue !== '' && telValue !== '' && emailValue !== ''  && passwordValue !== '' && password2Value !== '' && isEmail(emailValue) === true && passwordValue === password2Value){
      document.getElementById("form1").action = "employee.php";
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
