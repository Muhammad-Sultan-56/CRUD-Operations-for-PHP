<?php
 include("config.php");

 $id = $_GET['id'];

 $sql = "DELETE FROM students WHERE student_id = $id";
 $result = mysqli_query($db_con , $sql);

 if($result){
    $sql2 = mysqli_query($db_con ,"DELETE FROM subjects WHERE student_id = $id");
    

    header("Location:show-data.php");

 }


?>