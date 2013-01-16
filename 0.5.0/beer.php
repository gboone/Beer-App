<?php 
unset($_POST[submit]);
$abv = $_POST[abvc]/100;
$alcoz = $abv*$_POST[size];
$beernum = $alcoz / $_POST[cost];
if ($_POST[abvc] = 0 || $_POST[size] = 0 || $_POST[cost] = 0) {
	die();
	} else {
?>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<div id="BeerNum" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="BeerNum" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Results:</h3>
  </div>
  <div class="modal-body">
    <?	
    if (empty($beer)) {
		
		echo $beer; print_r("<p>Your beer has a beer value of " . round(100*$beernum,2) . "</p>");
		
	} elseif (!empty($beer)) {
		
	print_r("<p>" . $beer . " at $" . $cost . " has a beer value of " . round(100*$beernum,2) . "</p>");
		
	}?>
		
	<div class="alert alert-info"><a href="about-beer.php#this-number">What does this number mean?</a></div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<?php } ?>