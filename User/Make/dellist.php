<?php
    require '../../connectdb/connectDB.php';
    $id = $_GET['id'];
  
       
        $sqldel = "delete from listmakedetail where m_no='$id'";
        $resultdel = mysqli_query($link, $sqldel);
        if(!$resultdel)
        {
            echo"<script>";
            echo"window.location.href='make2.php';";
            echo"</script>";
        }
        else{    
            echo"<script>";
            echo"window.location.href='make2.php';";
            echo"</script>";
        }

?>