<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('config.php');

    $userScore = 0;
    $incorrect = 0;
    $unanswered = 0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'r') === 0) {
            $questionId = substr($key, 1);
            $selectedOption = mysqli_real_escape_string($conn, $value);
            $showWrong = $value;
    
            // Fetch correct answer from the database
            $sql = "SELECT * FROM test_data WHERE id = $questionId";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $correctOption = $row['test_answer'];
    
                // Get the letter corresponding to the option
                $selectedLetter = '✗ : ';
                $correctLetter = '✔ ';
    
                // Check if selected option is correct
                if ($selectedOption === $correctOption) {
                    //Handle correct answer
                    $question = $row['test_question'];
                    echo "<div class='container mt-5'>
                         <div class='container bg-white rounded-2'>
                             <div class='row p-3'>
                                 <ul style='list-style-type:disc;'>
                                     <li>$question</li>
                                     <p style='color:green;'>$correctLetter: $correctOption</p>
                                    
                                 </ol>
                                </div>
                            </div>
                            </div>
                        ";

                    $userScore++;
                } elseif ($selectedOption == '') {
                    // Handle unanswered questions
                    $question = $row['test_question'];
                    echo "<div class='container mt-5'>
                         <div class='container bg-white rounded-2'>
                             <div class='row p-3'>
                                 <ul style='list-style-type:disc;'>
                                     <li>$question</li>
                                     <p style='color:red;'>$selectedLetter: Unattempted</p>
                                     <p style='color:green;'>$correctLetter: $correctOption</p>
                                     
                                 </ol>
                                </div>
                            </div>
                            </div>
                        ";
    
                    $unanswered++;
                } elseif ($selectedOption !== $correctOption) {
                    // Handle incorrect answer
                    $question = $row['test_question'];
                    echo "<div class='container mt-5'>
                        <div class='container bg-white rounded-2'>
                            <div class='row p-3'>
                            <ul style='list-style-type:disc;'>
                                    <li>$question</li>
                                    <p style='color:red;'>$selectedLetter: $selectedOption</p>
                                    <p style='color:green;'>$correctLetter: $correctOption</p>
                                     
                                </ol>
                            </div>
                        </div>
                    </div>";
    
                    $incorrect++;
                }
            } else {
                // Handle database query error
                die("Database query error: " . mysqli_error($conn));
            }
        }
    }
    

    // Display the results
    // echo "Your score: $userScore <br>";
    // echo "Your incorrect answers: $incorrect <br>";
    // echo "Unanswered questions: $unanswered";

    // Optionally, you can store the score in a database or session for later retrieval.
    // Example: $_SESSION['user_score'] = $userScore;
    } else {
         // Redirect or handle the case where the form wasn't submitted properly
     header('Location: error_page.php');
         exit();
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-5">
            <div class="container bg-white rounded-2 ">
                <div class="row p-2 justify-content-center">
                    <div class="col-lg-4 ">
                        <h4 class="h4 text-center">Your Scores </h4>
                    </div>
                    <div class="row p-2 justify-content-center">
                        <div class="col-lg-6 text-lg-start">
                            Correct Answer:
                            <?php echo $userScore; ?>
                        </div>
                    </div>
                    <div class="row p-2 justify-content-center">
                        <div class="col-lg-6 text-lg-start">
                            Incorrect Answer:
                            <?php echo $incorrect; ?>
                        </div>
                    </div>
                    <div class="row p-2 justify-content-center">
                        <div class="col-lg-6 text-lg-start">Unanswered:
                            <?php echo $unanswered; ?>
                        </div>
                    </div>
                    <div class="row p-2 justify-content-center">
                        <div class="col-lg-6 text-lg-start">
                            Total score:
                            <?php echo $userScore."/". $userScore+$incorrect+$unanswered; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </main>
    <footer>
        <!-- place footer here -->
   
  <?php 
    include('footer.php');
    
    ?>
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