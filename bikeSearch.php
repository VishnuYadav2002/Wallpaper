<?php

$page_title = "Bike Search";

require_once ('include/header.php');
require_once('include/database.php');

$name = $_GET['bike'];

//select statement
$query_str = "SELECT * FROM $tblBike WHERE bike_name LIKE '%" .$name. "%' ";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
} else { //display results in a table
    ?>
	<div class="container wrapper">
		
		<ul class="breadcrumb">
			<li><a href="home.php">Home</a></li>
			<li><a href="bike.php">Wallpaper</a></li>
			<li class="active">Search Results</li>
		</ul>
		
	    <h1 class="text-center">Search Results</h1>
	    
	    <div class="row">
			<div class="col-xs-4 col-xs-offset-8">
				<form action="<?=$_SERVER['PHP_SELF']?>" class="form-inline search-form" method="get" role="form">
					<div class="input-group">
						<label class="sr-only" for="bikeSearch">Search bike</label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="bike" placeholder="Search" id="bikeSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary">Go!</button>
				</form>
			</div>
		</div>
    
    <?php 
    	$num_rows = mysqli_num_rows($result);
    	if ($num_rows == 0) {
    		echo "<p class='lead text-center'>No results found for <strong>". $name . "</strong>. Please search again.</p>";
    	} else {
        //insert a row into the table for each row of data
		$i = 0;
		while ( $result_row = $result->fetch_assoc() ) :
			$i++;
			if ($i == 1) :
	?>
			<div class="row">
			<?php endif; ?>
				<div class="col-xs-4">
					<div class="thumbnail">
						<div class="caption">
							<div class="text-center">
									<a href="<?php echo $result_row['bike_path'] ?>">
									<img src="<?php echo $result_row['bike_path'] ?>" style="height: 500px;" download>
									<a href="<?php echo $result_row['bike_path'] ?>" download> <?php
								echo   $result_row['bike_name'];
								?><a/> 
								</a>
							</div>
								
						</div>
					</div>
				</div>
		<?php if ($i == 3) : ?>
			</div>
		<?php $i=0; endif; endwhile; ?>
		</div>
	</div>
  <?php
		}
		// clean up resultsets when we're done with them!
	    $result->close();
	}
	
	// close the connection.
	$conn->close();
	
	include ('include/footer.php');