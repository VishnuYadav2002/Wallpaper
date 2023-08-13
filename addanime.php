<?php

require_once('include/database.php');
$page_title = "Add Anime";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Anime</li>
  </ul>

  <h1 class="text-center">ADD Anime</h1>
  <p class="lead text-center">Please add your Anime</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="Animeprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newAnimeName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newAnimeName" name="anime_name" placeholder="Anime Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newAnime" class="col-sm-3 control-label">Anime Path</label>
        <div class="col-sm-9">
          <input type="text" id="newAnime" class="form-control" name="anime_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Anime</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>