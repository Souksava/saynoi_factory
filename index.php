<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ເຂົ້າສູ່ລະບົບ</title>
    <link href="dist/css/alt/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/alt/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="dist/js/sweetalert.min.js"></script>
  </head>
  <body>
        <div class="container font12" align="center" style="margin:0 auto;width:500px;height:480px;margin-top:120px;background-color: white;box-shadow: 5px 10px 8px 8px #9f9e9a;">
          <form action="Check/checklogin.php" id="form1" method="POST">
                <div class="row">
                    <div class="col-md-12"><br><br>
                      <img src="image/background.jpeg" class="img-circle elevation-2" alt="User Image" width="180px">
                    </div>
                    <div class="col-md-12"><br>
                      <input type="email" name="email" placeholder="ທີ່ຢູ່ອີເມວ" class="form-control" style="width: 85%;">
                    </div>
                    <div class="col-md-12"><br>
                        <input type="password" name="pass" placeholder="ລະຫັດຜ່ານ" class="form-control" style="width: 85%;">
                    </div>
                    <div class="col-md-12"><br>
                        <button type="submit" class="btn btn-outline-warning" style="width: 85%">
                            ເຂົ້າສູ່ລະບົບ
                        </button>
                    </div>
                    <div class="col-md-12 font12" style="color: orange;"><br>
                      ໂຮງງານນ້ຳດື່ມຫົງສະຫວັນ ສະອາດປອດໄພ ໃສ່ໃຈໃນຄຸນນະພາບ
                    </div>
                </div>
          </form>
        </div>
        <?php
          if(isset($_GET['email'])=='null'){
            echo'<script type="text/javascript">
            swal("", "ກະລຸນາປ້ອນອີເມວຜູ້ໃຊ້ລະບົບ !!", "info");
            </script>';
          }
          if(isset($_GET['pass'])=='null'){
            echo'<script type="text/javascript">
            swal("", "ກະລຸນາປ້ອນລະຫັດຜູ້ໃຊ້ລະບົບ !!", "info");
            </script>';
          }
          if(isset($_GET['login'])=='false'){
            echo'<script type="text/javascript">
            swal("", "ອີເມວ ຫຼື ລະຫັດຜູ້ບໍ່ຖືກຕ້ອງ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !!", "error");
            </script>';
          }
          if(isset($_GET['permission'])=='found'){
            echo'<script type="text/javascript">
            swal("", "ທ່ານບໍ່ມີສິດເຂົ້າໃຊ້ລະບົບ !!", "error");
            </script>';
          }
        ?>
  </body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
