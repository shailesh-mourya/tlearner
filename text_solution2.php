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
        <?php 
             include('header.php');
         ?>
    </header>
    <main>
<div class="mx-1 my-2">
        <div class="container-fluid  bg-white rounded-3">
            <div class="row">



                <?php 
    include('config.php');
   // $id=$_GET["id"];
    $sql="SELECT * FROM `text_solution2` WHERE `b_standard`='6th' and `b_chapter`='Natural Resources2';";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($result);
    echo " <div class='col'>  <h3>Chapter Name:{$rows['b_chapter']}</h3>";
    echo "{$rows['b_solution']}</div>";
    
    ?>

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