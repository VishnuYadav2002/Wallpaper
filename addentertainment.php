<?php

require_once('include/database.php');
$page_title = "Add Entertainment";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Entertainment</li>
  </ul>

  <h1 class="text-center">ADD Entertainment</h1>
  <p class="lead text-center">Please add your Entertainment</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Entertainmentprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newEntertainmentName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newEntertainmentName" name="e_name" placeholder="Entertainment Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newEntertainment" class="col-sm-3 control-label">Entertainment Path</label>
        <div class="col-sm-9">
          <input type="text" id="newEntertainment" class="form-control" name="e_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Entertainment</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>