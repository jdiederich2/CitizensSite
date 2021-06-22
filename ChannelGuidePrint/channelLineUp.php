<?php
	global $title; 
	error_reporting(0);
	include 'header.php';

?>


	<link rel="stylesheet" media="print" href="css/print.css" />
	<script src="https://www.w3schools.com/lib/w3.js"></script>
	<script src="js/sort.js"></script>
		
			
	<div class="wrapper">
		<section class="div1 m1">
			<div class="m1 m25 center">
				<form action="channelPrint.php" method="post">
					<h1 class="h-dark">Select your package</h1>
					<button id="local" name="subject" type="submit" value="Local">Local</button>
					<button id="essential" name="subject" type="submit" value="Essential">Essential</button>
					<button id="entertainment" name="subject" type="submit" value="Entertainment">Entertainment</button>
					<button id="essential" name="subject" type="submit" value="Stingray">Stingray Music</button>
				</form>
			</div>
		</section>
			
<?php include 'footer.php';