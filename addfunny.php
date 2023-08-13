<?php

require_once('include/database.php');
$page_title = "Add Funny";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Funny</li>
  </ul>

  <h1 class="text-center">ADD Funny</h1>
  <p class="lead text-center">Please add your Funny</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Funnyprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newFunnyName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newFunnyName" name="f_name" placeholder="Funny Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newFunny" class="col-sm-3 control-label">Funny Path</label>
        <div class="col-sm-9">
          <input type="text" id="newFunny" class="form-control" name="f_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Funny</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>