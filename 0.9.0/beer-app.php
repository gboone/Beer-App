
<?php include_once(beer-ajax.php);
header('Content-Type: text/xml');?>
<productresponse>
<?php
//if (empty $_GET[]) {
//	?><requeststatus>ERROR</requeststatus></productresponse><?php //if no content was submitted, quit
//	die();
//}

if ($_GET[abvc] = 0 OR $_GET[size] = 0 OR $_GET[cost] = 0) {
	?><requeststatus>ERROR</requeststatus></productresponse><?php //if the abv, size, or cost variables are not set, quit to avoid the divide by 0 error
	die();
}
//all good? continue
<requeststatus>OK!</requeststatus>

	<name><<?php echo $beer[1][name]?>></name>
	<abvc><<?php echo $beer[1][abvc]?>></abvc>
	<cost><<?php echo $beer[1][cost]?>></cost>
	<size><<?php echo $beer[1][name]?>></size>

<?php $i ++;?>