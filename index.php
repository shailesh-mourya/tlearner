<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script>
    function basicConcepts() {
      window.location.href = "basic_topic.php";
    }
    function textbookSolution() {
      window.location.href = "filter.php";
    }
    function testSolution() {
      window.location.href = "test_filter.php"
    }
    function gK() {
      window.location.href = "gk_topic.php";
    }
    function questionSolution() {
      window.location.href = "paper_std.php";
    }
    // function nimokeys() {
    //   alert('coming soon...')
    //   // window.location.href = "filter.php";
    // }
  </script>

</head>

<body>
  <header>
    <!-- place navbar here
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">

        <a class="navbar-brand text-center" href="#">
          <img src="image/logo.png" class="img-fluid rounded-top " height="30px" width="30px" alt="">
          TLearner
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
            <li class="nav-item  ">
              <a class="nav-link active" href="#" aria-current="page">Home <span
                  class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-share-fill text-primary"></i>
              </a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link" href="#">
                <i class="bi bi-person-circle"></i>
              </a>
            </li>

          </ul>





        </div>
      </div>
    </nav> -->

    <?php 
    include('header.php');
    
    ?>

  </header>

  <!-- banner -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 ">

        <div id="carouselExampleSlidesOnly" class="carousel slide h-75" data-bs-ride="carousel">
          <div class="carousel-inner h-7">
            <div class="carousel-item h-75 active">
              <img src="image/banner.png" class="d-block w-100 h-75 " alt="...">

            </div>
            <div class="carousel-item h-75">
              <img src="image/2.jpg" class="d-block w-100 h-75 " alt="...">
            </div>
            <!-- <div class="carousel-item">
              <img src="/image/3.jpg" class="d-block w-100" alt="...">
            </div> -->
            <div class=" carousel-indicators w-100 opacity-75  m-3">
              <form action="" method="get">
                <div class="d-inline-flex">
                  <input type="text" class="form-control d-inline-block m-1" name="" id="" aria-describedby="helpId"
                    placeholder="search your query">
                  <button class="btn btn-outline-primary d-inline m-1" type="submit" value="Submit"> <i
                      class="bi bi-search"></i></button>
                </div>


              </form>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>





  <!-- card -->
  <div class="container mt-5">
    <div class="display-6 text-center">Services</div>
    <div class="row justify-content-center">

      <!-- for basic concept card -->
      <div class="col-lg-3 m-2">
        <div class="card" onclick="basicConcepts()">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class=" ps-2 bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
          <div class="card-body">
            <h4 class="h6">Basic Concepts</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>

      <!-- for textbooks solution card -->
      <div class="col-lg-3 m-2">
        <div class="card" onclick="textbookSolution()">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class=" ps-2 bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
          <div class="card-body">
            <h4 class="h6">Textbook Solution</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>

      <!-- for test and solution card -->
      <div class="col-lg-3 m-2">
        <div class="card" onclick="testSolution()">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class=" ps-2 bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
          <div class="card-body">
            <h4 class="h6">Test & solution</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>

      <!-- for g.k card -->
      <div class="col-lg-3 m-2">
        <div class="card" onclick="gK()">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class=" ps-2 bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
          <div class="card-body">
            <h4 class="h6">G.K</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>

      <!-- for question paper and solution card -->
      <div class="col-lg-3 m-2">
        <div class="card" onclick="questionSolution()">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class=" ps-2 bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
          <div class="card-body">
            <h4 class="h6">Question paper & solution</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>

      <!-- for nimokeys card -->
      <div class="col-lg-3 m-2">
        <div class="card " data-bs-toggle="modal" data-bs-target="#nimokeys">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class=" ps-2 bi bi-journal-text" viewBox="0 0 16 16">
            <path
              d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
          </svg>
          <div class="card-body">
            <h4 class="h6">Nimokeys</h4>
            <p class="card-text">Text</p>
          </div>
        </div>
      </div>


    </div>
  </div>

  <!-- popup Modal for notification in nimokeys -->
  <div class="modal fade" id="nimokeys" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          This feature is coming soon..
        </div>

      </div>
    </div>
  </div>

  <!-- footer part -->
  <?php 
    include('footer.php');
    
    ?>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>