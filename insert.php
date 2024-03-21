<?php
 include("config.php");
 

if (isset($_POST['submit'])) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $city = $_POST['city'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // insert into the table
    $sql = "INSERT INTO students (`student_name`, `student_age`, `student_gender`, `student_city`) VALUES('$name', '$age', '$gender', '$city')";

    $result = mysqli_query($db_con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        $last_id = mysqli_insert_id($db_con);

        if ($last_id > 0) {
            $s_1 = isset($_POST['s_1']) ? $_POST['s_1'] : null;
            $s_2 = isset($_POST['s_2']) ? $_POST['s_2'] : null;
            $s_3 = isset($_POST['s_3']) ? $_POST['s_3'] : null;

            $sql2 = "INSERT INTO subjects (`student_id`, `s_1`, `s_2`, `s_3`) VALUES($last_id, '$s_1', '$s_2', '$s_3')";
            if (mysqli_query($db_con, $sql2)) {

                header("Location:show-data.php");
            }
            else{
                echo "data not inserted";

            }
        }
    } else {
        echo "Data is not inseted";
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Query</title>
    <!-- bootstrp links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container w-50 shadow mx-auto mt-3 p-3">

        <h2 class="text-center text-white bg-danger p-2 mb-3">Registration Form</h2>

        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">

            <label class="form-label">Name</label>

            <input type="text" class="form-control shadow-none border border-danger mb-3" name="name" placeholder="First Name" />

            <label class="form-label">Age</label>

            <input type="number" class="form-control shadow-none border border-danger mb-3" name="age" placeholder="Age" />


            <label class="form-label">City</label>
            <select name="city" class="form-control shadow-none border border-danger mb-3">
                <option disabled selected>Choose City</option>
                <option value="lodhran">Lodhran</option>
                <option value="bahawalpur">Bahawalpur</option>
                <option value="multan">Multan</option>
            </select>


            <label class="form-label d-block">Gender :</label>
            <div class="mb-3">
                Male: <input type="radio" class="form-check-input me-3" name="gender" value="Male" />
                Female: <input type="radio" class="form-check-input" name="gender" value="Female" />
            </div>

            <div class="mb-3">
                <label class="form-label">Subjects </label>
                <div class="d-flex gap-5">
                    <div> <input type="checkbox" class="form-check-input shadow-none" name="s_1" value="Math" /> Mathematics</div>
                    <div> <input type="checkbox" class="form-check-input shadow-none" name="s_2" value="Science" /> Science</div>
                    <div> <input type="checkbox" class="form-check-input shadow-none" name="s_3" value="Biology" /> Biology </div>

                </div>
            </div>

            <div class="w-50 mx-auto">
                <input type="submit" class="btn btn-danger w-100" name="submit" value="Submit" />
            </div>
        </form>
    </div>
</body>

</html>