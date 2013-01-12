<! Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>
<title>BEER!</title>
<body id="beerapp">
<div class="container">

<form name="abvcalc" action="beer-app.php" method="post">
	<fieldset>
		<div class="row">
			<div class="span12">
				<div class="alert alert-info"><a href="about-beer.php">About this app.</a></div>
				<h3>Name the Beer:</h3>
				<input type="text" id="beer" class="inputs" name="beer" value=""><span class="help-inline hidden-phone">Type the name of the beer here if you want to add it to your favorites list.</span><span class="help-inline visible-phone">Type the name of the beer.</span>
				
			</div>
		</div>
		<div class="row">
			<div class="span3 btn-group" data-toggle="buttons-radio">
				<h3>ABV Value:</h3>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('10');">10%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('9');">9%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('8.5');">8.5%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('8');">8%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('7.5');">7.5%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('7');">7%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('6.5');">6.5%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('6');">6%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('5.5');">5.5%</button>
					<button type="button" type="button" class="btn btn-block" name="abv" onClick="$('#abv').val('5.4')">5.4%</button>
					<input type="text" id="abv" class="inputs" name="abvc" value="" placeholder="Not listed? Type your ABV e.g. 9 not 9%">
			</div>
			
			<div class="span3 btn-group" data-toggle="buttons-radio">
				<h3>Size:</h3>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('32');">32 oz (one quart)</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('25.3605');">750ml (wine bottle, oil can)</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('24');">24 oz (some tall boys)</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('22');">22 oz</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('20');">20 oz</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('16');">16 oz (one pint; tallboy)</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('14');">14 oz</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('12');">12 oz (can)</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('10');">10 oz</button>
					<button type="button" class="btn btn-block" name="size" onClick="$('#size').val('4');">4 oz taster</button>
				<input type="text" id="size" class="inputs" name="size" placeholder="Not listed? Type your glass size in fl oz.">
			</div>
			
			<div class="span3 btn-group" data-toggle="buttons-radio">
				<h3>Price:</h3>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('10');">$10</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('9.5');">$9.50</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('9');">$9</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('8');">$8</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('7');">$7</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('6');">$6</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('5.5');">$5.50</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('5');">$5</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('4.5');">$4.50</button>
					<button type="button" class="btn btn-block" name="cost" onClick="$('#cost').val('4');">$4</button>
				<input type="text" id="cost" class="inputs" name="cost" placeholder="Not listed? Type it here (5 not $5).">
				
			</div>
			
			<div class="span3">
				<h3>Quick Reference</h3>
				<ul>
					<div class="well well-large hidden-desktop">
						Below are some equivalencies for common beer sizes and a couple metric conversions that should be accurate enough for this app.
					</div>
						<li>One Pint: 16oz</li>
						<li>One liter: 33.8oz</li>
						<li>One quart (half growler): 32 oz</li>
						<li>750ml (Wine/Belgian bottle, Fosters Oil Can) 25.3605</li>
						<li>Growler (half gallon): 64oz (<a href="http://en.wikipedia.org/wiki/Beer_bottle#Growler">typically</a>)</li>
						<li>Bomber: 22oz</li>
						<li>Tallboys are typically a pint but can range up to 24oz, smaller cans and standard bottles are typically 12 oz</li>
						<li>Forty: really, can't figure this one out? Perhaps you've had too much beer.</li>
				</ul>
			</div>
		</div>
		
		<div class="row">
			<div class="span9"><input type="submit" class="btn btn-block" name="submit"></div>
			<div class="span3"><button type="button" class="btn btn-block" onclick="$('.inputs').val('');$('.btn-large').getAttributeNode("class").removeAttributeNode("active");">Clear All</button></div>
		</div> 
		<div class="row hidden-phone">
			<h3>To Do list</h3>
					<ul>
						<div class="well well-large">
							These are things we hope to include in the future or that need working on in the meantime. If it's here, we know about it.
						</div>
						<li>Keep a list of recently found beers in the left column.</li>
						<li>Load the results in a modal instead of a separate page.</li>
						<li>Interface with a DB to create a running record of beers searched for and their values.</li>
						<li>Other measures for beer value, i.e., Bitterness density per volume (IBU/oz/USD). Not sure if that specific example really makes sense.</li>
					</ul>
		</div>
	</fieldset>
</form>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/bootstrap.min.js"></script>
</body>
</html>