<?php
    require '../../connectdb/connectDB.php';
    $id = $_GET['id'];
    $sqlckmake = "select * from tbmaking where make_no='$id' and status='ອະນຸມັດ';";
    $resultckmake = mysqli_query($link, $sqlckmake);
    if(mysqli_num_rows($resultckmake) > 0){
        echo"<script>";
        echo"window.location.href='accept2.php?accepted=true';";
        echo"</script>";
    }
    else{
       
        $sqldel2 = "delete from tbmakedetail where make_no='$id'";
        $resultdel2 = mysqli_query($link, $sqldel2);
        if(!$resultdel2)
        {
            echo"<script>";
            echo"window.location.href='accept2.php?del=false';";
            echo"</script>";
        }
        else{
            $sqldel = "delete from tbmaking where make_no='$id'";
            $resultdel = mysqli_query($link, $sqldel);
            if(!$resultdel){
                echo"<script>";
                echo"window.location.href='accept2.php?del=false';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='accept2.php?del2=true';";
                echo"</script>";
            }
           
        }
    }
?>