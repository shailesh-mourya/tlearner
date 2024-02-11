<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <!-- place navbar here -->
        <?php 
        include('header.php');
        
        ?>
    </header>
    <main>
        <!-- question model -->

        <div class="m-1 m-lg-3 rounded-2" style="background-color:white">
            <p class="m-3 sticky-top text-center rounded bg-primary" style="opacity: 90%;">Time left:
                <span id="timer" class="text-danger text-center"></span>
            </p>
            <script>
                var timeLeft = 300; // 5 minutes countdown
                function startTimer() {
                    var timerInterval = setInterval(function () {
                        timeLeft--;
                        document.getElementById('timer').innerText = timeLeft + 's';
                        if (timeLeft <= 0) {
                            clearInterval(timerInterval);
                            document.getElementById('testForm').submit(); // Automatically submit the form when time is up
                        }
                    }, 1000);
                }
                window.onload = startTimer;
            </script>

            <?php 
        $topic=1;
        
        include('config.php');
        $sql="SELECT * FROM `gk_test` WHERE `topic_name`='solar system';";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($result);
        echo "<h1 class='h5 text-center mt-2'>Test on topic solar system</h1>";
        

        if (mysqli_num_rows($result)>0) {

         echo "<div class='container mt-2'>";
         echo "<form action='process_test.php' method='post'><ol type='1'>";

            while ($rows = mysqli_fetch_assoc($result)) {
                echo "<hr />";
                echo "<li><p>{$rows['gk_question']}</p></li>";
                echo "<input type='hidden' name='r{$rows['id']}' type='radio' value='' checked>";
                echo "<ol type='A'>
                    <li><input class='form-check-input  mx-1' name='r{$rows['id']}' type='radio' value='{$rows['gk_option1']}' id='checkbox1'>{$rows['gk_option1']}</li>
                    <li><input class='form-check-input  mx-1' name='r{$rows['id']}' type='radio' value='{$rows['gk_option2']}' id='checkbox2'>{$rows['gk_option2']}</li>
                    <li><input class='form-check-input  mx-1' name='r{$rows['id']}' type='radio' value='{$rows['gk_option3']}' id='checkbox3'>{$rows['gk_option3']}</li>
                    <li><input class='form-check-input  mx-1' name='r{$rows['id']}' type='radio' value='{$rows['gk_option4']}' id='checkbox4'>{$rows['gk_option4']}</li>
                </ol>";
            }
            
          echo "</ol></div>";


        }
        
        
        
        
        
        ?>
            <div class=' text-center mb-4'>
                <button class="btn mb-4" style="background-color: #f7eeee" type="submit">
                    <i class="bi bi-eye-fill"></i> Submit
                </button>
            </div>
            </form>
        </div>




    </main>
    <footer>
        <!-- place footer here -->

        <?php 
  include('footer.php');
  
  ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>