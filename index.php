<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>

  <body>

    <?php include 'includes/header.php';?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <div class="alert alert-info" role="alert">Flight Status Live ...</div>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-7">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#">Overview</a></li>
              <li><a href="#">Data Flow</a></li>
              <li><a href="#">Power</a></li>
              <li><a href="#">Memory</a></li>
              <li><a href="#">Altitude</a></li>
            </ul>

            <table class="table">
              <tbody>
                <tr>
                  <th scope="row"></th>
                </tr>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td>Data Flow</td>
                  <td>Last Recieved: 16/10/16:13:34</td>
                  <td><span class="label label-success">Good</span></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Power</td>
                  <td>Last Recieved: 16/10/16:13:34</td>
                  <td><span class="label label-danger">Bad</span></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Memory</td>
                  <td>Last Recieved: 16/10/16:13:34</td>
                  <td><span class="label label-success">Good</span></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Altitude</td>
                  <td>Last Recieved: 16/10/16:13:34</td>
                  <td><span class="label label-warning">Warning</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-3">


              <div class="panel panel-default">
                <div class="panel-heading">Packet Meta Data</div>
                <div class="panel-body">
                  <!-- List group -->
                  <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                </div>
              </div>



          </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
