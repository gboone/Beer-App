<! Doctype html>
<html id="beerapp">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="style.css">
</head>
<title>BEER!</title>
<body>
<?php 
$beer = $_POST[beer];
$abv = $_POST[abvc];
$size = $_POST[size];
$cost = $_POST[cost];
unset($_POST[submit]);
?>
	<div id="results" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
		<div class="modal-header">
		<h3>Success!</h3>
	</div>
	<div class="modal-body">
		<?php
		$abv = $abv/100;
		$alcoz = $abv*$size;
		$beernum = $alcoz / $cost;
		
		if (empty($beer)) {echo $beer; print_r("<p>Your beer has a beer value of " . round(100*$beernum,2) . "</p>");}
		
		elseif (!empty($beer)) {print_r("<p>" . $beer . " at $" . $cost . " has a beer value of " . round(100*$beernum,2) . "</p>");}?>
		<div class="alert alert-info"><a href="about-beer.php#this-number">What does this number mean?</a></div>
	</div>
	<div class="modal-footer">
		<button class="btn" onClick="history.go(-1);return true;">Close</button>
	</div>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/bootstrap.min.js"></script>
</body>
</html>
<?php //if (empty($_POST)) { ?>
	
<!--
	<div id="results" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
		<div class="modal-header">
			<h3>Oops!</h3>
		</div>
		<div class="modal-body">
			<p>Please fill in the form. If the buttons aren't working, manually type the values into the text boxes below. Click outside this window to close.</p>
		</div>
		<div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
-->
<?php
//} ?>