<?php
session_start(); //start a session
header("Content-type: text/plain");
unset($_GET[submit]);
$beer['name'] = $_GET[beer];
$beer['abvc'] = $_GET[abvc];
$beer['size'] = $_GET[size];
$beer['cost'] = $_GET[cost];
print_r($beer);
?>
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