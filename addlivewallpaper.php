<?php

require_once('include/database.php');
$page_title = "Add Live Wallpaper";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Live Wallpaper</li>
  </ul>

  <h1 class="text-center">ADD Live Wallpaper</h1>
  <p class="lead text-center">Please add your live wallpaper</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="livewallpaperprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newName" name="wp_name" placeholder="Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="newPath" class="col-sm-3 control-label">Path</label>
        <div class="col-sm-9">
          <input type="text" id="newPath" class="form-control" name="wp_path" placeholder="Enter Path" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>