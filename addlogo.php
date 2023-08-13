<?php

require_once('include/database.php');
$page_title = "Add Logo";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Logo</li>
  </ul>

  <h1 class="text-center">ADD Logo</h1>
  <p class="lead text-center">Please add your Logo</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Logoprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newLogoName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newLogoName" name="logo_name" placeholder="Logo Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newLogo" class="col-sm-3 control-label">Logo Path</label>
        <div class="col-sm-9">
          <input type="text" id="newLogo" class="form-control" name="logo_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Logo</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>