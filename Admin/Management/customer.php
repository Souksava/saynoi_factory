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
  <title>ຈັດການຂໍ້ມູນລູກຄ້າ</title>
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
        <a href="../Main.html" class="nav-link">ໜ້າຫຼັກ</a>
      </li>
    </ul>
    <form class="form-inline ml-3" action="customer.php" id="formSearch" method="POST">
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
    <a href="../Main.html" class="brand-link">
      <img src="../../image/background.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ນ້ຳດື່ມຫົງສະຫວັນ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../image/saynoi.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ໄຊສົມບູນ</a>
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
                <a href="employee.html" class="nav-link">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="customer.html" class="nav-link">
                  <i class="far fa fa-address-card nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="unit.html" class="nav-link">
                  <i class="far fa fa-archive nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product.html" class="nav-link">
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
                  <a href="../Make/make.html" class="nav-link">
                    <i class="far fa fa-bullhorn nav-icon"></i>
                    <p>ສັ່ງຜະລິດນ້ຳດື່ມ</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Make/accept.html" class="nav-link">
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
                  <a href="../Export/export.html" class="nav-link">
                    <i class="nav-icon fa fa-truck nav-icon"></i>
                    <p>ສົ່ງອອກນ້ຳດື່ມ</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Export/credit.html" class="nav-link">
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
                <a href="../Report/report_cusloyee.html" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_customer.html" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_product.html" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນນ້ຳດື່ມ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_make.html" class="nav-link">
                  <i class="far fas fa-book nav-icon"></i>
                  <p>ລາຍງານຂໍ້ມູນການຜະລິດ</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Report/report_export.html" class="nav-link">
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
          <b>ຂໍ້ມູນລູກຄ້າ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 46%; float: right;" align="right">
          <form action="customer.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalcus">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalcus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນລູກຄ້າ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດລູກຄ້າ</label>
                                      <input type="text" name="cus_id" id="cus_id" placeholder="ລະຫັດລູກຄ້າ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ລູກຄ້າ</label>
                                      <input type="text" name="cus_name" id="cus_name" class="form-control" placeholder="ຊື່ລູກຄ້າ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="cus_surname" id="cus_surname" placeholder="ນາມສະກຸນ">
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
                                      <input type="email" name="email" id="email" placeholder="ທີ່ຢູ່ອີເມວ">
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
        $sql = "select * from tbcustomers where cus_id like '$s' or cus_name like '$s' or cus_surname like '$s' or gender like '$s';";
        $result2 = mysqli_query($link, $sql);
    ?>
    <div class="table-responsive">
      <table class="table font12" style="width: 1200px;">
        <tr>
            <th>ລະຫັດ</th>
            <th>ຊື່ລູກຄ້າ</th>
            <th>ນາມສະກຸນ</th>
            <th>ເພດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th></th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
        ?>
        <tr>
            <td><?php echo $row['Cus_ID'] ?></td>
            <td><?php echo $row['Cus_Name'] ?></td>
            <td><?php echo $row['Cus_Surname'] ?></td>
            <td><?php echo $row['Gender'] ?></td>
            <td><?php echo $row['Tel'] ?></td>
            <td><?php echo $row['Address'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td>
              <a href="updateCus.php?id=<?php echo $row['Cus_ID'];?>" class="fa fa-pen toolcolor"></a>&nbsp; &nbsp; 
              <a href="delCus.php?id=<?php echo $row['Cus_ID'];?>" class="fa fa-trash toolcolor"></a>
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
<?php
     if(isset($_POST['cus_id'])){      
        $Cus_ID = $_POST['cus_id'];
        $Cus_Name = $_POST['cus_name'];
        $Cus_Surname = $_POST['cus_surname'];
        $Gender = $_POST['gender'];
        $address = $_POST['address'];
        $Tel = $_POST['tel'];
        $Email = $_POST['email'];
        $sqlck = "select cus_id from tbcustomers where cus_id='$Cus_ID';";
        $resultck = mysqli_query($link, $sqlck);
        if(mysqli_num_rows($resultck) > 0){
          echo"<script>";
          echo"window.location.href='customers.php?customer=same';";
          echo"</script>";
        }       
        else{
          $sql = "insert into tbcustomers values('$Cus_ID','$Cus_Name','$Cus_Surname','$Gender','$address','$Tel','$Email');";
          $result = mysqli_query($link, $sql);
          if(!$result){
            echo"<script>";
            echo"window.location.href='customer.php?save=found';";
            echo"</script>";
          }
          else{     
            echo"<script>";
            echo"window.location.href='customer.php?save2=success';";
            echo"</script>";
          }
        }
     }
     if(isset($_GET['save'])=='found'){
      echo'<script type="text/javascript">
      swal("", "ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດກະລຸນນາກວດສອບການປ້ອນຂໍ້ມູນອີກຄັ້ງ !!", "error");
      </script>';
    }
    if(isset($_GET['save2'])=='success'){
      echo'<script type="text/javascript">
      swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ !!", "success");
      </script>';
    }
    if(isset($_GET['customer'])=='same'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດລູກຄ້າຄົນນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ!!", "info");
      </script>';
    }
    
    if(isset($_GET['update2'])=='success'){
      echo'<script type="text/javascript">
      swal("", "ແກ້ໄຂຂໍ້ມູນສຳເລັດ", "success");
      </script>';
    }
    if(isset($_GET['update'])=='found'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດແກ້ໄຂຂໍ້ມູນໄດ້ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ", "error");
      </script>';
    }
    if(isset($_GET['export'])=='has'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດລົດຂໍ້ມູນໄດ້ ເນື່ອງຈາກລະຫັດລູກຄ້າຄົນນີ້ໄດ້ນຳໃຊ້ຢູ່ຕາຕະລາງການສົ່ງອອກສິນຄ້າແລ້ວ", "info");
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
?>
<script type="text/javascript">

  const myform = document.getElementById('form1');
  const cus_id = document.getElementById('cus_id');
  const cus_name = document.getElementById('cus_name');
  const cus_surname = document.getElementById('cus_surname');
  const gender = document.getElementById('gender');
  const address = document.getElementById('address');
  const tel = document.getElementById('tel');
  const email = document.getElementById('email');
  myform.addEventListener('submit',(e) => {
    e.preventDefault();
   checkInputs();
  });

  function checkInputs(){
    const cus_idValue = cus_id.value.trim();
    const cus_nameValue = cus_name.value.trim();
    const cus_surnameValue = cus_surname.value.trim();
    const genderValue = gender.value.trim();
    const addressValue = address.value.trim();
    const telValue = tel.value.trim();
    const emailValue = email.value.trim();
    if(cus_idValue === ''){
      setErrorFor(cus_id, 'ກະລຸນາປ້ອນລະຫັດລູກຄ້າ');
    }
    else{
      setSuccessFor(cus_id);
    }
    if(cus_nameValue === ''){
      setErrorFor(cus_name, 'ກະລຸນາປ້ອນຊື່ລູກຄ້າ');
    }
    else{
      setSuccessFor(cus_name);
    }
    if(cus_surnameValue === ''){
      setErrorFor(cus_surname, 'ກະລຸນາປ້ອນນາມສະກຸນ');
    }
    else{
      setSuccessFor(cus_surname);
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
    if(cus_idValue !== '' && cus_nameValue !== '' && cus_surnameValue !=='' && genderValue !== '' && addressValue !== '' && telValue !== '' && emailValue !== '' && isEmail(emailValue) === true){
      document.getElementById("form1").action = "customer.php";
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
