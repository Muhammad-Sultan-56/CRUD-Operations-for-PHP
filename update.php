<?php
// database connection
include("config.php");

if($_POST['submit']) {

    if(!isset($_POST['name']) || empty($_POST['name'])) {
        die("Name filed is required");
    }

    $id = $_POST['id'];
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $city = $_POST['city'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $s_1 = isset($_POST['s_1']) ? $_POST['s_1'] : null;
    $s_2 = isset($_POST['s_2']) ? $_POST['s_2'] : null;
    $s_3 = isset($_POST['s_3']) ? $_POST['s_3'] : null;

    $sql = "UPDATE students SET student_name='$name', student_city='$city', student_age='$age', student_gender='$gender' WHERE student_id=$id";

    if(mysqli_query($db_con, $sql)) {

        $sql2 = "UPDATE subjects SET s_1='$s_1', s_2='$s_2', s_3='$s_3' WHERE student_id=$id";

        if(mysqli_query($db_con, $sql2)) { 
            header("Location: show-data.php");
        }

    }

}


?>