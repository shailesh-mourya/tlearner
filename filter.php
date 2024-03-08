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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    //for My level
    $(document).ready(function () {
      // Attach change event handler to the radio group
      $('input[name="option"]').change(function () {
        // Get the value of the selected radio button
        var selectedOption = $(this).val();

        // Hide all other radio buttons and their labels in the group
        $('input[name="option"]').not(':checked').each(function () {
          // Check if the current radio button is not the selected one
          if ($(this).val() !== selectedOption) {
            // Hide the entire parent label element
            $(this).parent('label').hide();
          }
        });
      });
    });

    //for My board
    $(document).ready(function () {
      // Attach change event handler to the radio group
      $('input[name="options2"]').change(function () {
        // Get the value of the selected radio button
        var selectedOption = $(this).val();

        // Hide all other radio buttons and their labels in the group
        $('input[name="options2"]').not(':checked').each(function () {
          // Check if the current radio button is not the selected one
          if ($(this).val() !== selectedOption) {
            // Hide the entire parent label element
            $(this).parent('label').hide();
          }
        });
      });
    });

    //for standard
    $(document).ready(function () {
      $("#1to4").click(function () {
        $("#4to1").show();
      });
      $("#5to8").click(function () {
        $("#8to5").show();
      });
      $("#9to10").click(function () {
        $("#10to9").show();
      });
      $("#11to12").click(function () {
        $("#12to11").show();
      });

    });
  </script>
</head>

<body>
  <header>
    <?php 
    include('header.php');
    
    ?>
  </header>
  <main>
    <div class="p-1">
      <div class="container border border-2 rounded-3 " style="background-color: white ;">
        <div class="row">
          <div class="col-lg-12">
            <span>Your recent searches</span>
          </div>
        </div>

        <!-- for search input -->
        <div class="row">
          <div class="col-lg-10 m-3 ">
            <form action="" method="post">
              <div class="input-group mb-3 ">
                <input type="search" class="form-control" placeholder="Ask me!" aria-label="Recipient's username"
                  aria-describedby="button-addon2" />
                <button class="btn btn-success me-3" type="button" id="search_btn" value="search">
                  Go
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-lg-center">
            <span class="">OR</span>
          </div>
        </div>
        <!-- for manual select -->
        <div class="row">
          <div class="col-lg-12">1. My Board</div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <label class="border border-2 bg-success  container-fluid m-2">
              <input type="radio" name="options2" value="level1" style="display:none" />
              CBSC
            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <input type="radio" name="options2" value="level2" style="display:none" />
              Maharashtra State Board
            </label>
          </div>
        </div>
        <!-- for level "my level" -->
        <div class="row">
          <div class="col-lg-12">2. My Level</div>
        </div>
        <!-- for my level option -->
        <div class="row">
          <div class="col-lg-12">
            <label class="border border-2 bg-success  container-fluid m-2" id="1to4">
              <input type="radio" name="option" value="level1" style="display:none" />
              1st to 4th
            </label>

            <label class="border border-2 bg-success   container-fluid m-2" id="5to8">
              <input type="radio" name="option" value="level2" style="display:none" />
              5th to 8th
            </label>
            <label class="border border-2 bg-success  container-fluid m-2" id="9to10">
              <input type="radio" name="option" value="level3" style="display:none" />
              9th to 10th
            </label>
            <label class="border border-2 bg-success  container-fluid m-2" id="11to12">
              <input type="radio" name="option" value="level4" style="display:none" />
              11th to 12th
            </label>
            <label class="border border-2 bg-success  container-fluid m-2" id="btog">
              <input type="radio" name="option" value="level5" style="display:none" />
              Bachelor/Graduate
            </label>
            <label class="border border-2 bg-success container-fluid m-2" id="mtopg">
              <input type="radio" name="option" value="level6" style="display:none" />
              Master/Post Graduate
            </label>
          </div>
        </div>
        <!-- for level standard -->
        <div class="row">
          <div class="col-lg-12">3. Standard</div>
        </div>
        <!-- 1st to 4th -->
        <div class="row mb-2 " style="display:none;color: black;" id="4to1">
          <div class="col-lg-12">
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>1st
                Standard</a>

            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>2nd
                Standard</a>

            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>3rd
                Standard</a>

            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>4th
                Standard</a>

            </label>


          </div>
        </div>

        <!-- 5th to 8th -->
        <div class="row" style="display:none" id="8to5">
          <div class="col-lg-12">
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>5th
                Standard</a>

            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>6th
                Standard</a>

            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>7th
                Standard</a>

            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>8th
                Standard</a>

            </label>
          </div>
        </div>
        <!-- 9th to 10th -->
        <div class="row" style="display:none" id="10to9">
          <div class="col-lg-12">

            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>9th
                Standard</a>
            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>10th
                Standard</a>
            </label>
          </div>
        </div>

        <!-- 11th to 12th -->
        <div class="row" style="display:none" id="12to11">
          <div class="col-lg-12">
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>11th
                Standard</a>
            </label>
            <label class="border border-2 bg-success  container-fluid m-2">
              <a name='' id='' class=" text-dark text-decoration-none" href="view_books.php?id=water" role='button'>12th
                Standard</a>
            </label>

          </div>
        </div>
      </div>



    </div>


    </div>
    </div>
  </main>
  <!-- footer -->
  <?php 
    include('footer.php');
    
    ?>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>