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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src=js/form.js></script>

</head>

<body class="bg-login-image">

  <div class="container">
  
    <param id="ip" value="<?php echo $_POST['ip'] ?>"></param>
    <param id="user" value="<?php echo $_POST['user'] ?>"></param>
    <param id="key" value="<?php echo $_POST['key'] ?>"></param>
    
    <div class="row m-4 ">

          <div class="card text-center d-flex col p-0 shadow-sm">
            <div class="card-header bg-purple ">
              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="ether-tab" data-toggle="tab" href="#ether" role="tab"
                    aria-controls="ether" aria-selected="true">Serviços Utilizados</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add"
                    aria-selected="false">Cadastro</a>
                </li>
              </ul>
            </div>

            <div class="card-body">

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active " id="ether" role="tabpanel" aria-labelledby="ether-tab">

                  <table id="tabela-ether" class="table  ">
                    <thead>
                      <tr>
                        <th scope="col">Serviço</th>
                        <th scope="col">Porta</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>

                </div>
                <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">

                  <div class=" m-3">
                    <h3>Cadastro de Cliente</h3>
                    <hr>

                    <div>
                    
                    <form class="user" action="back/gera_script.php" method="post">
                    <div class="form-group">
                     Nome do Cliente: <input type="text" name="cliente" class="form-control form-control-user" id="exampleInput" placeholder="Client Name">
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
                    <hr>

                    <div class="showUP"></div>

                    </div>
                    
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
  </div> 

</html>