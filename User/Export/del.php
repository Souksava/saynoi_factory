<?php
    require '../../connectdb/connectDB.php';
    $id = $_GET['id'];  
        $sqldel2 = "delete from listexportdetail where expno='$id'";
        $resultdel2 = mysqli_query($link, $sqldel2);
        if(!$resultdel2)
        {
            echo"<script>";
            echo"window.location.href='export.php';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='export.php';";
            echo"</script>";
        }
?>