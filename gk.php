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


      <?php 
        $topic=$_GET["id"];
        
        include('config.php');
        $sql="SELECT * FROM `gk_test` WHERE `topic_name`='$topic';";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($result);
        echo "<h1 class='h5 text-center mt-2'>General knowledge on topic {$rows['topic_name']}</h1>";
        

        if (mysqli_num_rows($result)>0) {

         echo "<div class='container mt-2'>";
         echo "<ol type='1'>";

          while ($rows=mysqli_fetch_assoc($result)) {
            echo "
            <hr />";
            //echo "<p>{$rows['gk_question']}</p>";
            echo "<li><p>{$rows['gk_question']}</p></li>";
            echo "<ol type='A'>
            <li>{$rows['gk_option1']}</li>
            <li>{$rows['gk_option2']}</li>
            <li>{$rows['gk_option3']}</li>
            <li>{$rows['gk_option4']}</li>
          </ol>";
          echo " <p class='d-inline-flex gap-1'>
          <button class='btn' style='background-color: #f7eeee' type='button' data-bs-toggle='collapse'
            data-bs-target='#collapseExample{$rows['id']}' aria-expanded='false' aria-controls='collapseExample'>
            <i class='bi bi-eye-fill'></i> Show Answer
          </button>
        </p>";

            echo "<div class='collapse mb-1' id='collapseExample{$rows['id']}'>
            <div class='card card-body'>
              <p><strong>Answer:</strong> {$rows['gk_answer']}</p>
  
              <p><strong>Explanation:</strong></p>
  
              <p>
              {$rows['gk_explanation']}
              </p>
            </div>
          </div>
          ";
          
            

          }
          echo "</ol></div>";


        }
        
        
        
        
        
        ?>
    </div>



    <!-- sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">TLearner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active  href=" #" aria-current="page">
              <i class="bi bi-house-door-fill text-primary "></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-person-fill text-primary"></i> About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right text-primary"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-r-circle-fill text-primary"></i> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-telephone-fill text-primary"></i> Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-share-fill text-primary"></i> Share
            </a>
          </li>

        </ul>

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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>