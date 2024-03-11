<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php 
    include('header.php');
    
    ?>
    </header>
    <main>
        <?php 
            
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($id === false || $id === null) {
             echo "Invalid ID parameter.";
                // Handle the error or redirect as needed.
             exit;
        }

            include('config.php');
            // $sql="SELECT * FROM `q_paper` WHERE `standard`='10th std maharashtra board' AND `id`='$id';";
             $sql="SELECT * FROM `q_paper` WHERE `id`='$id';";
            $result=mysqli_query($conn,$sql);
            $rows=mysqli_fetch_assoc($result);
            
            echo "<div class='container m-xm-0'>
            <embed class='col-lg-12'  src='paper/{$rows['pdf']}#toolbar=0' type='application/pdf' height='800px'>
            </div>
                   
              ";

         
         
        ?>
        

    </main>
    <!-- <embed class='col-12' src='paper/{$rows['pdf']}#toolbar=0' type='application/pdf'  height='600px'> -->
    <!-- <iframe src='paper/{$rows['pdf']}' frameborder='0'></iframe> -->
    <!-- <iframe src='paper/{$rows['pdf']}' width='100%' height='600px' style='border: none;'></iframe> -->
    <!-- <a href="paper/<?php echo $rows['pdf']; ?>">download</a> -->
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