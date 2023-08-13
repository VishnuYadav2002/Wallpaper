<?php

require_once('include/database.php');
$page_title = "Add Design";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Design</li>
  </ul>

  <h1 class="text-center">ADD Design</h1>
  <p class="lead text-center">Please add your Design</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Designprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newDesignName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newDesignName" name="design_name" placeholder="Design Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newDesign" class="col-sm-3 control-label">Design Path</label>
        <div class="col-sm-9">
          <input type="text" id="newDesign" class="form-control" name="design_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Design</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>