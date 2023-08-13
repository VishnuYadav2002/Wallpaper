<?php

require_once('include/database.php');
$page_title = "Add Drawing";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Drawing</li>
  </ul>

  <h1 class="text-center">ADD Drawing</h1>
  <p class="lead text-center">Please add your Drawing</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Drawingprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newDrawingName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newDrawingName" name="drawing_name" placeholder="Drawing Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newDrawing" class="col-sm-3 control-label">Drawing Path</label>
        <div class="col-sm-9">
          <input type="text" id="newDrawing" class="form-control" name="drawing_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Drawing</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>