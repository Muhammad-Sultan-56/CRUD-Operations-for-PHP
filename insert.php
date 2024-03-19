<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Query</title>
    <!-- bootstrp links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container w-50 shadow mx-auto mt-5 p-3">

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
              <div>   <input type="checkbox" class="form-check-input shadow-none" name="s_1" value="Math" /> Mathematics</div>
              <div>   <input type="checkbox" class="form-check-input shadow-none" name="s_2" value="Science" /> Science</div>
              <div>  <input type="checkbox" class="form-check-input shadow-none" name="s_3" value="Bio" /> Biology </div>

                </div>
            </div>

            <div class="w-50 mx-auto">
            <input type="submit" class="btn btn-danger w-100" name="submit" value="Submit" />
            </div>
        </form>
    </div>
</body>

</html>