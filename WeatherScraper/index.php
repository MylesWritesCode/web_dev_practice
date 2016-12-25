<!-- CONVERT TO PHP AFTER LAYOUT IS FINISHED -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Weather Scraper</title>
  </head>
  <body>
    <nav class="nav navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Weather Scraper</a>
        </div> <!-- navbar-header -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </div> <!-- container-fluid -->
    </nav>
    <br><br><br><br><br><br><br><br><br><br>
    <div id="background">
    </div> <!-- background -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="POST" class="form-group">
            <h1 class="text-center"><strong>The Weather App</strong></h1>
            <h4 class="text-center">Enter the name of a city below</h4>
            <br>
            <input class="form-control" type="text" name="cityName">
            <br>
            <button class="btn btn-primary btn-lg center-block">Submit</button>
          </form>
          <div class="alert" name="weatherDescription">
            <!-- Placeholder for code that describes weather conditions -->
          </div>
          <?php
            // Get data from cityName ($_POST["cityName"])
            // Make sure string is a city name
            // Run through weather scraper api?
            // call id weatherDescriptor and echo html to the div
          ?>
        </div> <!-- col-md-6 col-md-offset-3 -->
      </div> <!-- row -->
    </div> <!-- container -->
    <script type="text/javascript" src="scripts.js"></script>
  </body>
</html>
