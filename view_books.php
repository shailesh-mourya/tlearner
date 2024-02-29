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

</head>

<body>
    <header>

        <?php 
    include('header.php');
    
    ?>

    </header>

    <div class="m-1">
        <div class="container rounded-2 " style="background-color: white;">

            <!-- for one subject (loop from db) -->
            <div class="row m-lg-1 pt-3">

                <div class="col-md-6">

                    <div class="card p-lg-2">
                        <img class="img p-lg-2" src="./books_images/ninth_math1.jpg" height="350px" alt="Title" />
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card " style="border: 0px;">
                        <div class="card-body p-lg-2 ">
                            <h4 class="card-title">Mathematics part1</h4>
                            <div class="overflow-auto" style="max-height: 200px;">
                                <ul class="list-group list-group-numbered">

                                    <!-- list of chapter (loop) -->
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <hr>

            <!-- for second subject (loop from db) -->
            <div class="row m-lg-1">

                <div class="col-md-6 mt-2">

                    <div class="card p-lg-2">
                        <img class="img p-lg-2" src="./books_images/ninth_math2.jpg" height="350px" alt="Title" />
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card " style="border: 0px;">
                        <div class="card-body p-lg-2 ">
                            <h4 class="card-title">Mathematics part2</h4>
                            <div class="overflow-auto" style="max-height: 200px;">
                                <ul class="list-group list-group-numbered">
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <hr>

            <!-- for third subject (loop from db) -->
            <div class="row m-lg-1">

                <div class="col-md-6 mt-2">

                    <div class="card p-lg-2">
                        <img class="img p-lg-2" src="./books_images/tenth_math2.png" height="350px" alt="Title" />
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card " style="border: 0px;">
                        <div class="card-body p-lg-2 ">
                            <h4 class="card-title">Mathematics part2</h4>
                            <div class="overflow-auto" style="max-height: 200px;">
                                <ul class="list-group list-group-numbered">
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                    <li class="list-group-item"><a href="#">Active item operation is good for hall
                                            what</a>
                                    </li>
                                    <li class="list-group-item"><a href="#">Item</a></li>
                                    <li class="list-group-item"><a href="#">Disabled item</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <hr>

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