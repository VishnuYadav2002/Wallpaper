<?php

require_once('include/database.php');
$page_title = "Add Animal";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Animal</li>
  </ul>

  <h1 class="text-center">ADD Animal</h1>
  <p class="lead text-center">Please add your Animal</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Animalprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newAnimalName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newAnimalName" name="animal_name" placeholder="Animal Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newAnimal" class="col-sm-3 control-label">Animal Path</label>
        <div class="col-sm-9">
          <input type="text" id="newAnimal" class="form-control" name="animal_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Animal</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>