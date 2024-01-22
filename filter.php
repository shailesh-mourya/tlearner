<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <script>

  </script>

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body style="background-color: #6200EE ;">
  <header>
    <?php 
    include('header.php');
    
    ?>
  </header>
  <main>
    <div class="container border border-2 " style="background-color: white ;">
      <div class="row">
        <div class="col-lg-12">
          <span>Your recent searches</span>
        </div>
        <div class="col-lg-10 m-3 ">
          <form action="" method="post">
            <div class="input-group mb-3 ">
              <input type="search" class="form-control" placeholder="Ask me!" aria-label="Recipient's username"
                aria-describedby="button-addon2" />
              <button class="btn btn-success" type="button" id="search_btn" value="search">
                Go
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-12 text-lg-center">
          <span class="">OR</span>
        </div>
        <div class="row">
          <div class="col-lg-12">1. My Level</div>
          <div class="col-lg-12">
            <label class="border border-2 bg-success text-center m-2" style="width: 200px" id="contentToHide">
              <input type="radio" name="options" value="level1" onclick="hideContent();" checked />
              1st to 4th
            </label>

            <label class="border border-2 bg-success text-center m-2" style="width: 200px" id="contentToHide">
              <input type="radio" name="options" value="level2" onclick="hideContent();" />
              5th to 8th
            </label>
            <label class="border border-2 bg-success text-center m-2" style="width: 200px" id="contentToHide">
              <input type="radio" name="options" value="level3" onclick="hideContent();" />
              9th to 10th
            </label>
            <label class="border border-2 bg-success text-center m-2" style="width: 200px" id="contentToHide">
              <input type="radio" name="options" value="level4" onclick="hideContent();" />
              11th to 12th
            </label>
            <label class="border border-2 bg-success text-center m-2" style="width: 200px" id="contentToHide">
              <input type="radio" name="options" value="level5" onclick="hideContent();" />
              Bachelor/Graduate
            </label>
            <label class="border border-2 bg-success text-center m-2" style="width: 200px" id="contentToHide">
              <input type="radio" name="options" value="level6" onclick="hideContent();" />
              Master/Post Graduate
            </label>


          </div>
          <div class="col-lg-12">2. My Board</div>
          <div class="col-lg-12">
            <label class="border border-2 bg-success  container-fluid m-2">
              <input type="radio" name="options2" value="level1" onclick="hideContent();" checked />
              CBSC
            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <input type="radio" name="options2" value="level1" onclick="hideContent();" checked />
              Maharashtra State Board
            </label>
          </div>
        </div>

      </div>
    </div>
  </main>
  <!-- footer -->
  <div class="container-fluid mt-5 bg-primary">
    <div class="row">
      <div class="col-lg-12">
        <center>
          <span>
            <img src="image/logo.png" class="img-fluid d-inline mt-1" height="40px" width="40px" alt="" />

            <div class="display-6">TLearner</div>
          </span>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 mt-2 mb-4 text-center">
        Copyright &copy;
        <a href="" class="text-warning">TLearner</a>
        .Designed with <i class="bi bi-heart-fill text-danger"></i>
        by
        <a href="" class="text-warning">Shailesh Mourya</a>
        All rights reserved.
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>