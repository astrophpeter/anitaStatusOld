<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/myccs.css" rel="stylesheet">


  </head>

  <body>

    <?php include 'includes/header.php';?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <?php include 'includes/banner.php';?>

        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
              <li><a data-toggle="tab" href="#dataflow">Data Flow</a></li>
              <li><a data-toggle="tab" href="#power">Power</a></li>
              <li><a data-toggle="tab" href="#memory">Memory</a></li>
              <li><a data-toggle="tab" href="#temperature">Temperature</a></li>
            </ul>

            <div class="tab-content">
            <div id="temperature" class="tab-pane fade">
               <?php include 'includes/temperature.php';?>
            </div>
            <div id="overview" class="tab-pane fade in active">
              <table class="table">
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
            <div id="dataflow" class="tab-pane fade">
              <h3>Menu 2</h3>
              <p>Some content in menu 2.</p>
            </div>
          </div>

          <div id="content">
     <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
       <li class="active"><a href="#red" data-toggle="tab">Red</a>
       </li>
       <li><a href="#orange" data-toggle="tab">Orange</a>
       </li>
       <li><a href="#yellow" data-toggle="tab">Yellow</a>
       </li>
       <li><a href="#green" data-toggle="tab">Green</a>
       </li>
       <li><a href="#blue" data-toggle="tab">Blue</a>
       </li>
     </ul>
   </div>
   <div id="my-tab-content" class="tab-content">
     <div class="tab-pane active" id="red">
       <h1>Red</h1>
       <p>red red red red red red</p>
     </div>
     <div class="tab-pane" id="orange">
       <h1>Orange</h1>
       <p>orange orange orange orange orange</p>
     </div>
     <div class="tab-pane" id="yellow">
       <h1>Yellow</h1>
       <p>yellow yellow yellow yellow yellow</p>
     </div>
     <div class="tab-pane" id="green">
       <h1>Green</h1>
       <p>green green green green green</p>
     </div>
     <div class="tab-pane" id="blue">
       <h1>Blue</h1>
       <p>blue blue blue blue blue</p>
     </div>
   </div>



          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">


              <div class="panel panel-default">
                <div class="panel-heading">Recent Packet Meta Data</div>
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
