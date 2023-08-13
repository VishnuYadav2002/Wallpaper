<?php

require_once('include/database.php');
$page_title = "Add Music";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Music</li>
  </ul>

  <h1 class="text-center">ADD Music</h1>
  <p class="lead text-center">Please add your Music</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Musicprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newMusicName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newMusicName" name="m_name" placeholder="Music Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newMusic" class="col-sm-3 control-label">Music Path</label>
        <div class="col-sm-9">
          <input type="text" id="newMusic" class="form-control" name="m_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Music</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>