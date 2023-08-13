<?php

require_once('include/database.php');
$page_title = "Add Bike";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Bike</li>
  </ul>

  <h1 class="text-center">ADD Bike</h1>
  <p class="lead text-center">Please add your Bike</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Bikeprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newBikeName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newBikeName" name="bike_name" placeholder="Bike Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newBike" class="col-sm-3 control-label">Bike Path</label>
        <div class="col-sm-9">
          <input type="text" id="newBike" class="form-control" name="bike_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Bike</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>