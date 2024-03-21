<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Data</title>
    <!-- bootstrp links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container mt-3">
        <div class="mb-3 text-end">
            <a href="insert.php" class="btn btn-danger">+ Add Student</a>
        </div>
        <h2 class="text-center text-white bg-danger p-2 mb-3">Show Data</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Subjects</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>


                <?php
                // database connection
              include("config.php");

                $sql = "SELECT * FROM `students` JOIN `subjects` ON students.student_id = subjects.student_id ";
                $result = mysqli_query($db_con , $sql);

              if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

                $id = $row['student_id'];
                $name = $row['student_name'];
                $age = $row['student_age'];
                $city = $row['student_city'];
                $gender = $row['student_gender'];

                $s_1= $row['s_1'];
                $s_2= $row['s_2'];
                $s_3= $row['s_3'];

              ?>

                <tr>
                    <th ><?php echo $id;  ?></th>
                    <td><?php echo $name;  ?></td>
                    <td><?php echo $age;  ?></td>
                    <td><?php echo $city;  ?></td>
                    <td><?php echo $gender;  ?></td>
                    <td> <?php echo $s_1." , ". $s_2 ." , " . $s_3 ?></td>
                    <td><a href="edit.php?id=<?=$id?>" class="btn btn-warning btn-sm">Edit</a>
                          |  
                    <a href="delete.php?id=<?=$id?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>

         <?php
                }
              }
            ?>

             

           
            </tbody>
        </table>
    </div>

</body>

</html>