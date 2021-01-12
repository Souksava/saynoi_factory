<?php
    require '../../connectdb/connectDB.php';
    $id = $_GET['id'];
    $sqlckmake = "select * from tbmakedetail where pro_id='$id';";
    $resultckmake = mysqli_query($link, $sqlckmake);
    $sqlckex = "select * from tbexportdetail where pro_id='$id';";
    $resultckex = mysqli_query($link, $sqlckex);
    if(mysqli_num_rows($resultckmake) > 0){
        echo"<script>";
        echo"window.location.href='product.php?make=notnull';";
        echo"</script>";
    }
    else if(mysqli_num_rows($resultckex) > 0){
        echo"<script>";
        echo"window.location.href='product.php?export=notnull';";
        echo"</script>";
    }
    else{
        $sqlsec = "select  img_path from tbproducts where pro_id='$id'";
        $resultsec = mysqli_query($link, $sqlsec);
        $data = mysqli_fetch_array($resultsec, MYSQLI_ASSOC);
        $path = __DIR__.DIRECTORY_SEPARATOR.'../../image'.DIRECTORY_SEPARATOR.$data['img_path'];
        if(file_exists($path) && !empty($data['img_path'])){
            unlink($path);
            
        }
        $sqldel = "delete from tbproducts where pro_id='$id'";
        $resultdel = mysqli_query($link, $sqldel);
        if(!$resultdel)
        {
            echo"<script>";
            echo"window.location.href='product.php?del=false';";
            echo"</script>";
        }
        else{
            
            echo"<script>";
            echo"window.location.href='product.php?del2=true';";
            echo"</script>";
        }
    }
?>