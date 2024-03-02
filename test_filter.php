<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
    </head>

    <body >
        <header>
            <!-- place navbar here -->
            <?php 
    include('header.php');
    
    ?>
        </header>
        <main>
        <h3 class="h3 text-center mt-5 "> Choose Test Topics</h3>
        <div class="container d-lg-flex flex-lg-wrap justify-content-center">
           
          
                
                
        <?php 
include('config.php');
$sql="SELECT DISTINCT `test_topic` FROM `test_data`;";
$result=mysqli_query($conn,$sql);

while ($rows=mysqli_fetch_assoc($result)) {

        echo "
        
                  <a
                name=''
                id=''
                class='container-fluid col-xs-2 col-sm-2 col-lg-3 mt-2 m-lg-2 btn btn-primary text-center'
                href='test_question.php?id={$rows['test_topic']}'
                role='button'
                >{$rows['test_topic']}</a
            >
       
    ";
}


?>
    
        </div>

        </main>
     
        
        <footer>
            <!-- place footer here -->
            <?php 
    include('footer.php');
    
    ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>









