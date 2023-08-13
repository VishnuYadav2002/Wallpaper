<?php

require_once('include/database.php');
$page_title = "Add Nature";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Nature</li>
  </ul>

  <h1 class="text-center">ADD Nature</h1>
  <p class="lead text-center">Please add your Nature</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Natureprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newNatureName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newNatureName" name="n_name" placeholder="Nature Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newNature" class="col-sm-3 control-label">Nature Path</label>
        <div class="col-sm-9">
          <input type="text" id="newNature" class="form-control" name="n_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Nature</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>