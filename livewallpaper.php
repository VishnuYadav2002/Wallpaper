<?php

$page_title = "Live Wallpaper";

require_once ('include/header.php');
require_once ('include/database.php');

//select statement
$query_str = "SELECT * FROM livewp";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	<div class="container wrapper">

		<ul class="breadcrumb">
			<li><a href="home.php">Home</a></li>
			<li class="active">Live Wallpaper</li>
		</ul>

		<h1 class="text-center">Live Wallpapers</h1>

		<div class="row">
			<div class="col-xs-4 col-xs-offset-8">
				<form action="livewallaperSearch.php" method="get" class="form-inline search-form" role="form">
					<div class="input-group">
						<label class="sr-only" for="livewallaperSearch">Search Live Wallpaper</label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="livewp" placeholder="Search" id="livewallaperSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary">Go!</button>
				</form>
			</div>
		</div>
		<br><br>
		<div class="livewallpaper-list">
			<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
				<?php endif; ?>
				
					
							<div class="container">
							<div class="text-center">
									<a href="<?php echo $result_row['wp_path'] ?>">
									<video width="500px" controls>	
									<source src="<?php echo $result_row['wp_path'] ?>" type=video/mp4 >
									</video> 
									
								</a>
							</div>
							<h3 class="text-center">
								<a href="<?php echo $result_row['wp_path'] ?>" download> <?php
								echo   $result_row['wp_name'];
								?><a/>
							</h3>
						</div>
				
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
		</div>
	</div>






<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('include/footer.php');
?>