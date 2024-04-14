<!-- prepared statement to prevent above insecure insert -->
<?php
include('config.php');


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

                        <div class="row text-center">
                            <div class="col-lg-12 col-md-6 mb-4">
                                <h2 class="h2  mt-4">G.k upload</h2>
                            </div>
                        </div>
                        
                        <?php 
                            
include('config.php');
        $gk_id=$_GET['gkid'];
         // Use prepared statement to avoid SQL injection
    $sql1 = "SELECT * FROM `gk_data` WHERE `topic_name`='$gk_id'";

    // Prepare the SQL statement

    $result=mysqli_query($conn,$sql1);
   
    $question_no=1;
    echo "
    
    <div class='row'>
         <div class='col-lg-12 col-md-6 mb-3'>
            <div class='mb-3'>
                 <h6>Topic Name: $gk_id</h6>                              
            </div>
        </div>
    </div>
    
    
    ";
    while( $rows=mysqli_fetch_assoc($result)) {
        echo "
        <form action='' method='post' class='bg-secondary  p-3 rounded-3 mb-3'>
        <h4>Question No:$question_no</h4>
      
        <input type='hidden' class='form-control' name='gkuid' id='gkuid'
                        aria-describedby='helpId' value='{$rows['id']}' placeholder='' />
        

        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='question' class='form-label'>Question</label>
                    <input type='text' class='form-control' name='question' id='question'
                        aria-describedby='helpId' value='{$rows['gk_question']}' placeholder='' />
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='option1' class='form-label'>Option 1</label>
                    <input type='text' class='form-control' name='option1' id='option1'
                        aria-describedby='helpId' value='{$rows['gk_option1']}' placeholder='' />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='option2' class='form-label'>Option 2</label>
                    <input type='text' class='form-control' name='option2' id='option2'
                        aria-describedby='helpId' value='{$rows['gk_option2']}' placeholder='' />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='option3' class='form-label'>Option 3</label>
                    <input type='text' class='form-control' name='option3' id='option3'
                        aria-describedby='helpId' value='{$rows['gk_option3']}' placeholder='' />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='option4' class='form-label'>Option 4</label>
                    <input type='text' class='form-control' name='option4' id='option4'
                        aria-describedby='helpId' value='{$rows['gk_option4']}' placeholder='' />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='answer' class='form-label'>Answer</label>
                    <input type='text' class='form-control' name='answer' id='answer'
                        aria-describedby='helpId' value='{$rows['gk_answer']}' placeholder='' />
                </div>
            </div>
        </div>


        <div class='row'>
            <div class='col-lg-12 col-md-6 mb-4'>
                <div class='mb-3'>
                    <label for='explanation' class='form-label'>Explanation</label>
                    <textarea class='form-control' name='explanation' id='explanation'
                        rows='3'>{$rows['gk_explanation']}</textarea>
                </div>
                
            </div>
        </div>

        <div class='row text-center'>
            <div class='col-lg-12'>
                <button type='submit' class='btn btn-primary' value='submit' name='submit'>
                    Submit
                </button>
                <button type='submit' class='btn btn-danger' value='gkq_delete' name='gkq_delete'>
                Delete
            </button>

            </div>
        </div>


    </form>
    
    ";
    $question_no++;
    }
  
              
    if (isset($_POST["submit"])) {
       // $topic = $_POST["gkid"];
        $gk_id=$_POST["gkuid"];
        $question = $_POST["question"];
        $option1 = $_POST["option1"];
        $option2 = $_POST["option2"];
        $option3 = $_POST["option3"];
        $option4 = $_POST["option4"];
        $answer = $_POST["answer"];
        $explanation = $_POST["explanation"];
    
        // Use prepared statement to avoid SQL injection
        $sql = "UPDATE `gk_data` SET `gk_question` = ?, `gk_option1` = ?,  `gk_option2` = ?,  `gk_option3` = ?, `gk_option4` = ?, `gk_answer` = ?, `gk_explanation` = ? WHERE `id` = '$gk_id';";
    
        // Prepare the SQL statement
        $stmt = mysqli_prepare($conn, $sql);
    
        if ($stmt) {
            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, "sssssss", $question, $option1, $option2, $option3, $option4, $answer, $explanation);
    
            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
               // header('location:gk_update.php');
                echo "<script> alert('insert'); </script>";
                echo "<meta http-equiv='refresh' content='1'>";
                die();
            } else {
                echo "Error executing the statement: " . mysqli_stmt_error($stmt);
            }
    
            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing the statement: " . mysqli_error($conn);
        }
    
        // Close the connection
        mysqli_close($conn);
    }
                            
         
    
    
//to delete basic concept data
if (isset($_POST["gkq_delete"])) {
    $gk_id=$_POST["gkuid"];

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM `gk_data` WHERE `id` = ?";
    
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {

         // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $gk_id);

     // Execute the prepared statement
     if (mysqli_stmt_execute($stmt)) {
        // header('location:gk_update.php');
         echo "<script> alert('Question Deleted'); </script>";
         echo "<meta http-equiv='refresh' content='1'>";
         die();
     } else {
         echo "Error executing the statement: " . mysqli_stmt_error($stmt);
     }

     // Close the statement
     mysqli_stmt_close($stmt);

   
        
    }else {
        echo "Error preparing the statement: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);

}
                            
                            
                            
                            ?>

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