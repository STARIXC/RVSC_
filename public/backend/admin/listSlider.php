<?php
include_once './inc/header.php';
include_once './slider/sliderClass.php';
$sliderClass=new SliderClass();
$listSlider=$sliderClass->listSlider();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>List Slider</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="http://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
          <br/>
        <h3 class="text-muted">List Slider</h3>
        <br/>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                  <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="addSlider.php">Add Slider</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="listSlider.php">List Slider</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Big Text</th>
                        <th>Small Text</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(count($listSlider)){
                        foreach ($listSlider as $value) {
                            echo '<tr>
                                <td>'.$value[ID].'</td>
                                <td>'.$value[ImageName].'</td>
                                <td>'.$value[BigText].'</td>
                                <td>'.$value[SmallText].'</td>
                                </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
       <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
