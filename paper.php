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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php 
    include('header.php');
    
    ?>
    </header>
    <div class="container mt-5">
       

                    <?php 
        include('config.php');
        $standard=$_GET["standard"];
           
       $year=2023;

        for ($i=0; $i <5 ; $i++) { 
            $sql="SELECT * FROM `q_paper` WHERE `standard`='$standard' AND `year`='$year';";
            echo " <div class='h4'>Maharashtra board Question Paper $year</div>";
            $result=mysqli_query($conn,$sql);
            echo " <div class='table-responsive my-3'>
           
            <table class='table table-bordered'>

                <tbody class='text-center'>";
                
                while ($rows=mysqli_fetch_assoc($result)) {
                    
                    echo "<tr>
                    <td scope='row'>{$rows['description']}</td>
                    <td><a
                    name=''
                    id=''
                    class='btn btn-outline-secondary btn-sm  text-center'
                    href='view.php?id={$rows['id']}'
                    role='button'
                    ><i class='bi bi-eye'></i></a>
                    <a
                    name=''
                    id=''
                    class='btn btn-outline-danger btn-sm m-1  '
                    href='download.php?id={$rows['id']}'
                    role='button'
                    ><i class='bi bi-file-earmark-arrow-down'></i></a></td> </tr>";
                }
                $year--;
                echo "      </tbody>
                </table>
            </div>";
            
        }
    



        
    //     while ($rows=mysqli_fetch_assoc($result)) {
            
    //         echo " <tr>
    //         <td scope='row'>{$rows['description']}</td>
    //         <td><a
    //         name=''
    //         id=''
    //         class='btn btn-outline-secondary btn-sm  text-center'
    //         href='view.php?id={$rows['id']}'
    //         role='button'
    //         ><i class='bi bi-eye'></i></a>
    //         <a
    //         name=''
    //         id=''
    //         class='btn btn-outline-danger btn-sm m-1  '
    //         href='download.php?id={$rows['id']}'
    //         role='button'
    //         ><i class='bi bi-file-earmark-arrow-down'></i></a>
    // </td>
    // </tr>";
    //     }


        ?>
    



          

    </div>

    <main>


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