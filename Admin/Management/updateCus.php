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
      $id = $_GET['id'];
      $sqlsec = "select * from tbcustomers where cus_id='$id'";
      $resultsec = mysqli_query($link, $sqlsec);
      $row = mysqli_fetch_array($resultsec, MYSQLI_ASSOC);
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ແກ້ໄຂຂໍ້ມູນ</title>
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
                <a href="employee.php" class="nav-link">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>ຈັດການຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>
            </ul>
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
                  <p>ລາຍງານຂໍ້ມູນ້ຳດື່ມ</p>
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
    <form action="../../Check/Logout.php" id="form1" method="POST">
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
          <form action="updateCus.php" id="form1" method="POST" enctype="multipart/form-data">
            <div class="row" align="left">
              <div class="col-xs-12 col-sm-6 form-control2">
                  <label>ຊື່ລູກຄ້າ</label>
                  <input type="text" name="cus_name" id="cus_name" placeholder="ຊື່ລູກຄ້າ" value="<?php echo $row['Cus_Name'] ?>">
                  <i class="fas fa-check-circle "></i>
                  <i class="fas fa-exclamation-circle "></i>
                  <small class="">Error message</small>
                  <input type="hidden" name="cus_id" id="cus_id" value="<?php echo $row['Cus_ID'] ?>">
              </div>
              <div class="col-xs-12 col-sm-6 form-control2">
                  <label>ນາມສະກຸນ</label>
                  <input type="text" name="cus_surname" id="cus_surname" class="form-control" placeholder="ນາມສະກຸນ" value="<?php echo $row['Cus_Surname'] ?>">
                  <i class="fas fa-check-circle "></i>
                  <i class="fas fa-exclamation-circle "></i>
                  <small class="">Error message</small>
              </div>
              <div class="col-xs-12 col-sm-6 form-control2">
                <label>ເພດ</label>
                <select name="gender" id="gender">
                  <option value="<?php echo $row['Gender'] ?>"><?php echo $row['Gender'] ?></option>
                  <option value="ຍິງ">ຍິງ</option>
                  <option value="ຊາຍ">ຊາຍ</option>
                </select>
                <i class="fas fa-check-circle "></i>
                <i class="fas fa-exclamation-circle "></i>
                <small class="">Error message</small>
              </div>

              <div class="col-xs-12 col-sm-6 form-control2">
                  <label>ເບີໂທລະສັບ</label>
                  <input type="text" name="tel" id="tel" placeholder="ເບີໂທລະສັບ" value="<?php echo $row['Tel'] ?>">
                  <i class="fas fa-check-circle "></i>
                  <i class="fas fa-exclamation-circle "></i>
                  <small class="">Error message</small>
              </div>
              <div class="col-xs-12 col-sm-6 form-control2">
                  <label>ທີ່ຢູ່ອີເມວ</label>
                  <input type="email" name="email" id="email" placeholder="ທີ່ຢູ່ອີເມວ" value="<?php echo $row['Email'] ?>">
                  <i class="fas fa-check-circle "></i>
                  <i class="fas fa-exclamation-circle "></i>
                  <small class="">Error message</small>
              </div>
              <div class="col-xs-12 col-sm-6 form-control2">
                  <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                  <textarea name="address" id="address" id="" cols="3" rows="3" placeholder="ທີ່ຢູ່ປັດຈຸບັນ"><?php echo $row['Address'] ?></textarea>
                  <i class="fas fa-check-circle "></i>
                  <i class="fas fa-exclamation-circle "></i>
                  <small class="">Error message</small>
              </div>
              <div class="col-xs-12 col-sm-6 form-control2">
                <button type="submit" name="btnUpdate" class="form-control btn btn-outline-warning "> ແກ້ໄຂຂໍ້ມູນ</button>
            </div>
          </div>
        </form>
    </div>
    <div class="clearfix"></div><br>
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
    if(isset($_POST['cus_name'])){      
      $Cus_ID = $_POST['cus_id'];
      $Cus_Name = $_POST['cus_name'];
      $Cus_Surname = $_POST['cus_surname'];
      $Gender = $_POST['gender'];
      $address = $_POST['address'];
      $Tel = $_POST['tel'];
      $Email = $_POST['email'];
        $sql = "update tbcustomers set cus_name='$Cus_Name',cus_surname='$Cus_Name',gender='$Gender',address='$address',tel='$Tel',email='$Email' where cus_id='$Cus_ID';";
        $result = mysqli_query($link, $sql);
        if(!$result){
          echo"<script>";
          echo"window.location.href='customer.php?update=found';";
          echo"</script>";
        }
        else{     
          echo"<script>";
          echo"window.location.href='customer.php?update2=success';";
          echo"</script>";
        }
    }
?>
<!-- jQuery -->
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
    if(cus_nameValue === ''){
      setErrorForUpdate(cus_name, 'ກະລຸນາປ້ອນຊື່ລູກຄ້າ');
    }
    else{
      setSuccessForUpdate(cus_name);
    }
    if(cus_surnameValue === ''){
      setErrorForUpdate(cus_surname, 'ກະລຸນາປ້ອນນາມສະກຸນ');
    }
    else{
      setSuccessForUpdate(cus_surname);
    }
    if(genderValue === ''){
      setErrorForUpdate(gender, 'ກະລຸນາເລືອກເພດ');
    }
    else{
      setSuccessForUpdate(gender);
    }
    if(addressValue === ''){
      setErrorForUpdate(address, 'ກະລຸນາປ້ອນທີ່ຢູ່');
    }
    else{
      setSuccessForUpdate(address);
    }
    if(telValue === ''){
      setErrorForUpdate(tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
    }
    else{
      setSuccessForUpdate(tel);
    }
    if(emailValue === ''){
      setErrorForUpdate(email, 'ກະລຸນາປ້ອນທີ່ຢູ່ອີເມວ')
    }
    else if(!isEmail(emailValue)){
      setErrorForUpdate(email, 'ຮູບແບບອີເມວບໍ່ຖືກຕ້ອງ')
    }
    else{
      setSuccessForUpdate(email);
    }
    if(cus_idValue !== '' && cus_nameValue !== '' && cus_surnameValue !=='' && genderValue !== '' && addressValue !== '' && telValue !== '' && emailValue !== '' && isEmail(emailValue) === true){
      document.getElementById("form1").action = "updateCus.php";
      document.getElementById("form1").submit();
    }
  }
</script>
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
