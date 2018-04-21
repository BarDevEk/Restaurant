<?php
	
	define("TITLE", "Menu | Franklin's Fine Dining");
	
	include('includes/header.php');
	
	// Strip bad characters function
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	

	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$dish = $menuItems[$menuItem];
	}
	
	
?>


	
	<hr>
	

	<div id="dish">


	
		<h1><?php echo $dish["title"]; ?> <span class="price"><?php echo $dish["price"]; ?> zł</span></h1>
		<p><?php echo $dish["blurb"]; ?></p>
		<br>
		<p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
		<a href="menu.php" class="button previous">&laquo; Back to Menu</a>
		
	</div><!-- dish -->
	
	<hr>

	<?php include 'includes/footer.php'; ?>
	
	



