<?php 
//  include('config.php');
    
// if (isset($_POST["submit"])) {
//     $board=$_POST["board"];
//     $standard=$_POST["standard"];
//     $year=$_POST["year"];
//     $month=$_POST["month"];
//     $subject=$_POST["subject"];
//    $file = $_FILES['file']['name'];
//     $description=$board ." ".$standard." ".$subject." Question Paper ".$year;

// $target_dir = "../paper/";

// $file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Get the file extension
// $new_file_name = $year.$month.$subject. "." . $file_extension; // Generate a new unique name

// $target_name = $target_dir . $new_file_name;
// move_uploaded_file($_FILES['file']['tmp_name'], $target_name);

// $sql="INSERT INTO `q_paper`(`board`, `standard`, `year`, `month`, `subject`, `pdf`, `description`) VALUES ('$board','$standard','$year','$month','$subject','$new_file_name','$description');";


// if (mysqli_query($conn,$sql)) {
  
// } else {
//    echo "Something went wrong". mysqli_error($conn);
// }
// mysqli_close($conn);


// }


?>

<?php
include('config.php');

if (isset($_POST["submit"])) {
    $board = mysqli_real_escape_string($conn, $_POST["board"]);
    $standard = mysqli_real_escape_string($conn, $_POST["standard"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $month = mysqli_real_escape_string($conn, $_POST["month"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $file = $_FILES['file']['name'];
    $description = $board . " " . $standard . " " . $subject . " Question Paper " . $year;

    $target_dir = "../paper/";
    $file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $new_file_name = $year . $month . $subject . "." . $file_extension;
    $target_name = $target_dir . $new_file_name;

    // Move the uploaded file to the target directory
    move_uploaded_file($_FILES['file']['tmp_name'], $target_name);

    // Use prepared statement to avoid SQL injection
    $sql = "INSERT INTO `q_paper`(`board`, `standard`, `year`, `month`, `subject`, `pdf`, `description`) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssss", $board, $standard, $year, $month, $subject, $new_file_name, $description);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Success
        } else {
            echo "Something went wrong: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the statement: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #6200EE ;">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <section class="m-2">
            <div class="container rounded-3 p-2 " style="background-color: white ;">
                <div class="row justify-content-center align-items-center h-100 p-4">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                            enctype="multipart/form-data" method="post">
                            <div class="row text-center">
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <h2 class="h2  mt-4">Paper upload</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <div class="mb-3">
                                        <label for="board" class="form-label">Board</label>
                                        <select class="form-select form-select-lg" name="board" id="board">
                                            <option selected>Select one</option>
                                            <option value="Maharashtra board">Maharashtra board</option>
                                            <option value="Mumbai University">Mumbai University</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-3">
                                    <div class="mb-3">
                                        <label for="standard" class="form-label">Standard</label>
                                        <select class="form-select form-select-lg" name="standard" id="standard">
                                            <option selected>Select one</option>
                                            <option value="10th std">10th std</option>
                                            <option value="12th std science">12th std science</option>
                                            <option value="12th std commerce">12th std commerce</option>
                                            <option value="12th std art">12th std art</option>
                                            <option value="Bsc cs semister 1">Bsc cs semister 1</option>
                                            <option value="Bsc cs semister 2">Bsc cs semister 2</option>
                                            <option value="Bsc cs semister 3">Bsc cs semister 3</option>
                                            <option value="Bsc cs semister 4">Bsc cs semister 4</option>
                                            <option value="Bsc cs semister 5">Bsc cs semister 5</option>
                                            <option value="Bsc cs semister 6">Bsc cs semister 6</option>
                                            <option value="Bsc it semister 1">Bsc it semister 1</option>
                                            <option value="Bsc it semister 2">Bsc it semister 2</option>
                                            <option value="Bsc it semister 3">Bsc it semister 3</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">Year</label>
                                        <input type="text" class="form-control" name="year" id="year"
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <div class="mb-3">
                                        <label for="month" class="form-label">Month</label>
                                        <select class="form-select  form-select-lg" name="month" id="month">
                                            <option selected>Select one</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>

                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <div class="mb-3">
                                        <label for="file" class="form-label">Pdf file</label>
                                        <input type="file" class="form-control" name="file" id="file"
                                            aria-describedby="helpId" placeholder="" />
                                    </div>

                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary" value="submit" name="submit">
                                        Submit
                                    </button>

                                </div>
                            </div>


                        </form>
                    </div>

                </div>

            </div>
        </section>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>