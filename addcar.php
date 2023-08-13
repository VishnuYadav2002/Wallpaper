<?php

require_once('include/database.php');
$page_title = "Add Car";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Car</li>
  </ul>

  <h1 class="text-center">ADD Car</h1>
  <p class="lead text-center">Please add your Car</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Carprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newCarName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newCarName" name="car_name" placeholder="Car Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newCar" class="col-sm-3 control-label">Car Path</label>
        <div class="col-sm-9">
          <input type="text" id="newCar" class="form-control" name="car_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Car</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>