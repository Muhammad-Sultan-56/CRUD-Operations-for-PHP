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
        <h2 class="text-center text-white bg-danger p-2 mb-3">Show Data</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>


                <?php
                // database connection
                $db_con = mysqli_connect("localhost", "root", "", "php_crud");
                if (!$db_con) {
                    die("database not connected");
                }

                $sql = "SELECT * FROM `students`";
                $result = mysqli_query($db_con , $sql);

              if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

                $id = $row['student_id'];
                $name = $row['student_name'];
                $age = $row['student_age'];
                $city = $row['student_city'];
                $gender = $row['student_gender'];
              ?>

                <tr>
                    <th ><?php echo $id;  ?></th>
                    <td><?php echo $name;  ?></td>
                    <td><?php echo $age;  ?></td>
                    <td><?php echo $city;  ?></td>
                    <td><?php echo $gender;  ?></td>
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