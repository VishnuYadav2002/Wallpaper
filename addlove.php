<?php

require_once('include/database.php');
$page_title = "Add Love";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Love</li>
  </ul>

  <h1 class="text-center">ADD Love</h1>
  <p class="lead text-center">Please add your Love</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Loveprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newLoveName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newLoveName" name="love_name" placeholder="Love Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newLove" class="col-sm-3 control-label">Love Path</label>
        <div class="col-sm-9">
          <input type="text" id="newLove" class="form-control" name="love_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Love</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>