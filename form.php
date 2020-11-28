<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Wellcome</title>

  <!-- Custom fonts for this template-->
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


</head>

<body class="bg-login-image">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-6">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="font-weight-bold text-white mb-4">Welcome to Omnichanel</h1>
                  </div>
                  <form class="user" action="back/gera_script.php" method="post">
                    <div class="form-group">
                     Cliente Name: <input type="text" name="cliente" class="form-control form-control-user" id="exampleInput" placeholder="Client Name">
                    </div>
                    <div class="form-group">
                     Redis Port: <input type="number" name="Redis_port" class="form-control form-control-user" id="exampleInput" placeholder="7000" min="7000" max="7005">
                    </div>
                    <div class="form-group">
                    Http Port: <input type="number" name="http_port" class="form-control form-control-user" id="exampleInput" placeholder="8000" min="8000" max="8999">
                    </div>
                    <div class="form-group">
                    Https Port: <input type="number" name="https_port" class="form-control form-control-user" id="exampleInput" placeholder="9000" min="9000" max="9999">
                    </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="submit" class="btn bg-purple text-white btn-user btn-block" value="Submit">
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</html>