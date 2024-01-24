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
        <div>
            <h2 class="h2 text-center m-3 text-black bg-primary p-2">
                Logical Reasoning:verbal
            </h2>


            <?php 
       
        
        include('config.php');
        $sql="SELECT * FROM `t_solution`;";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {

         echo "<div class='container mt-2'>";
        

          while ($rows=mysqli_fetch_assoc($result)) {
            
            echo "<div class='border border-1 p-2'>";
            
            echo "<span class='h6 text-uppercase '>{$rows['section']}</span><span class='h6 text-uppercase'>| {$rows['question_no']}</span><span class='h6 text-uppercase'>|Page {$rows['page_no']}</span>";
            echo "<hr />";
            echo "<p>{$rows['question']}</p>";
           
          echo " <p class='d-inline-flex gap-1'>
          <button class='btn' style='background-color: #f7eeee' type='button' data-bs-toggle='collapse'
            data-bs-target='#collapseExample{$rows['id']}' aria-expanded='false' aria-controls='collapseExample'>
            <i class='bi bi-eye-fill'></i> Show Answer
          </button>
        </p>";

           
        echo "</div> ";
          
         
        echo "<div class='collapse mb-1' id='collapseExample{$rows['id']}'>
            <div class='card card-body'>
              <p><strong>Answer:</strong></p>
  
              <p> {$rows['answer']}</p>
  
              <p>
            
              </p>
            </div>
        </div> ";
            

          }
         


        }
        
        
        
        
        
        ?>



            <!--       
      <div class="container mt-2">
        <hr />
        <p>1) what is the difference in the place value of 5 in the number</p>
        <ol type="A">
          <li>8</li>
          <li>6</li>
          <li>4</li>
          <li>2</li>
        </ol>

        <p class="d-inline-flex gap-1">
          <button class="btn" style="background-color: #f7eeee" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-eye-fill"></i> Show Answer
          </button>
        </p>
        <div class="collapse mb-1" id="collapseExample2">
          <div class="card card-body">
            <p><strong>Answer:</strong> B</p>

            <p><strong>Explanation:</strong></p>

            <p>
              It is a simple division series in which each number is one-half
              of the previous number. We can also say that each number is
              divided by 2 to arrive at the next number;
            </p>
          </div>
        </div>
      </div>
      <div class="container mt-2">
        <hr />
        <p>1) what is the difference in the place value of 5 in the number</p>
        <ol type="A">
          <li>8</li>
          <li>6</li>
          <li>4</li>
          <li>2</li>
        </ol>

        <p class="d-inline-flex gap-1">
          <button class="btn" style="background-color: #f7eeee" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-eye-fill"></i> Show Answer
          </button>
        </p>
        <div class="collapse mb-1" id="collapseExample3">
          <div class="card card-body">
            <p><strong>Answer:</strong> B</p>

            <p><strong>Explanation:</strong></p>

            <p>
              It is a simple division series in which each number is one-half
              of the previous number. We can also say that each number is
              divided by 2 to arrive at the next number;
            </p>
          </div>
        </div>
      </div>
      <div class="container mt-2">
        <hr />
        <p>1) what is the difference in the place value of 5 in the number</p>
        <ol type="A">
          <li>8</li>
          <li>6</li>
          <li>4</li>
          <li>2</li>
        </ol>

        <p class="d-inline-flex gap-1">
          <button class="btn" style="background-color: #f7eeee" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-eye-fill"></i> Show Answer
          </button>
        </p>
        <div class="collapse mb-1" id="collapseExample2">
          <div class="card card-body">
            <p><strong>Answer:</strong> B</p>

            <p><strong>Explanation:</strong></p>

            <p>
              It is a simple division series in which each number is one-half
              of the previous number. We can also say that each number is
              divided by 2 to arrive at the next number;
            </p>
          </div>
        </div>
      </div>
      <div class="container mt-2">
        <hr />
        <p>1) what is the difference in the place value of 5 in the number</p>
        <ol type="A">
          <li>8</li>
          <li>6</li>
          <li>4</li>
          <li>2</li>
        </ol>

        <p class="d-inline-flex gap-1">
          <button class="btn" style="background-color: #f7eeee" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-eye-fill"></i> Show Answer
          </button>
        </p>
        <div class="collapse mb-1" id="collapseExample3">
          <div class="card card-body">
            <p><strong>Answer:</strong> B</p>

            <p><strong>Explanation:</strong></p>

            <p>
              It is a simple division series in which each number is one-half
              of the previous number. We can also say that each number is
              divided by 2 to arrive at the next number;
            </p>
          </div>
        </div>
      </div>
    </div> -->

            <!-- sidebar -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
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
                            <a class="nav-link" href="#"><i class="bi bi-telephone-fill text-primary"></i> Contact
                                Us</a>
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