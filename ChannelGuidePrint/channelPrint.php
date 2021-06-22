<?php
	global $title; 
	error_reporting(0);
	include 'header.php';

?>


	<link rel="stylesheet" media="print" href="css/print.css"/>
	<script src="js/sort.js"></script>
		
			
	<div class="wrapper">
		<section class="div1 m1">
			<div id="print">
				<a href="channelLineUp.php">Back</a>
				
				
<?php
	$packageSelected = $_POST['subject'];	
	$packageURL = ("https://www.celectcom.net/channel-lineup/" . $packageSelected . "/");

			
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $packageURL);

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);

	$doc = new DOMDocument;
	$doc->loadHTML($response);
	$k = 0;
	$channelName = "";
	$sd = "";
	$hd = "";		
?>
			
	
				<table id="channels" class="w3-table-all">
					<caption><? print_r($packageSelected . " Package")?></caption>
					<tbody>
						<tr>
							<th class="channel">Channel Name</th>
							<th class="sd">SD Channel #</th>
							<th class="hd">HD Channel #</th>
						</tr>
				

<?php
	$rows = $doc->getElementsByTagName('tr');
					
	foreach($rows as $row ) {			
		$cells = $row->getElementsByTagName('td');	
		
	 	foreach($cells as $cell) {				
			$channelName = $cells->item(1)->textContent;
			$sd = $cells->item(2)->textContent;
			$hd = $cells->item(3)->textContent;			
		};				
			echo '		<tr>';
			echo '<td class="item channel">' . $channelName . '</td>';
			echo '<td>' . $sd . '</td>';
			echo '<td>' . $hd . '</td>';
			echo'</tr';		
	};	
?>

					
					</tbody>
				</table>
			</div>
		</section>
	</div>


