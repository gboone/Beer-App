<?php //if (isset($_POST[submit]){unset($_POST[submit]);}

if (isset($_POST)) {
	$abvc = strip_tags(intval($_POST[abvc]));
	$size = strip_tags(intval($_POST[size]));
	$cost = strip_tags(intval($_POST[cost]));
	$beer = $_POST[name];
	$abv = $abvc/100;
	$alcoz = $abv*$size;
	$beernum = $alcoz/$cost;
	
} ?>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">Results:</h3>
  </div>
  <div class="modal-body">
    <?	
    if (empty($beer)) {
		
		echo $beer; print_r("<p>Your beer has a beer value of " . round(100*$beernum,2) . "</p>");
		
	} elseif (!empty($beer)) {
		
	print_r("<p>" . $beer . " at $" . $cost . " has a beer value of " . round(100*$beernum,2) . "</p>");
		
	}
	?>
		
	<div class="alert alert-info"><a href="about-beer.php#this-number">What does this number mean?</a></div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
