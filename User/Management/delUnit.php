<?php
    require '../../connectdb/connectDB.php';
    $id = $_GET['id'];
    $sqlckmake = "select * from tbproducts where unit_id='$id';";
    $resultckmake = mysqli_query($link, $sqlckmake);
    if(mysqli_num_rows($resultckmake) > 0){
        echo"<script>";
        echo"window.location.href='unit.php?product=has';";
        echo"</script>";
    }
    else{
       
        $sqldel = "delete from tbunit where unit_id='$id'";
        $resultdel = mysqli_query($link, $sqldel);
        if(!$resultdel)
        {
            echo"<script>";
            echo"window.location.href='unit.php?del=false';";
            echo"</script>";
        }
        else{
            
            echo"<script>";
            echo"window.location.href='unit.php?del2=true';";
            echo"</script>";
        }
    }
?>