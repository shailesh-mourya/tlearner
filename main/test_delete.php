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
 <style>
      html,
      body,
      .intro {
        height: 100%;
      }

      table td,
      table th {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
      }

      .card {
        border-radius: 0.5rem;
      }

      .table-scroll {
        border-radius: 0.5rem;
      }

      thead {
        top: 0;
        position: sticky;
      }
</style>

</head>

<body>
  <header>
  
  

  </header>

  <!-- data of container -->

  <section class="intro my-5">
        <h3 class="h3 text-center">Test topics</h3>
        <div class="mask d-flex  h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="card shadow-2-strong">
                  <div class="card-body p-0">
                    <div class="table-responsive table-scroll">
                      <table class="table table-white mb-0">
                        <thead style="background-color: white">
                          <tr class="text-uppercase text-success">
                            <th scope="col">Topic_name</th>
                            <th scope="col">Operation</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      session_start();
                      include('config.php');
                      $sql="SELECT DISTINCT `test_topic` FROM `test_data`;";
                      $result=mysqli_query($conn,$sql);
                      while ($rows=mysqli_fetch_assoc($result)) {
                        
                            echo "<tr>
                           
                            <td>{$rows['test_topic']}</td>
                          
                          <td><a
                          name=''
                          id=''
                          class='btn btn-outline-secondary btn-sm  text-center'
                          href='view_data.php?id={$rows['test_topic']}'
                          role='button'
                          ><i class='bi bi-eye'></i></a>
                          <a
                          name=''
                          id=''
                          class='btn btn-outline-danger btn-sm m-1  '
                          href='delete.php?id={$rows['test_topic']}'
                          role='button'
                          ><i class='bi bi-trash3'></i></a></td> </tr>";
                          
                        }


                        ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>