var ajaxObject = false;
function evaluatebeer() {
	ajaxObject = false;
	ajaxObject = new XMLHttpRequest{};
	if (!ajaxObject) {
			alert('Sorry, perhaps it is time to update your browser. Try Google Chrome: http://google.com/chrome');
	return false;
	}
	
	ajaxObject.onreadystatechange = resolveBeerNum;
	ajaxObject.open('GET', 'beer-ajax.php?=' + productID.value, true); //open the query
		ajaxObject.send(null); //close it and wait for readystate changes
	return true; // this sets up to run function ajaxResponse next
} //end the function doAjaxQuery

function ajaxResponse() { //process the query, no parameters allowed
	if (ajaxObject.readyState == 4) { //is the page finished loading?
		if (ajaxObject.status == 200) { //if everything is g2g? Then let's get to work!
			
			//pull in the results of the php business here.
			var xmlData = ajaxObject.responseXML.documentElement;
			if (xmlData.getElementsByTagName("requeststatus")[0].firstChild.data != 'OK') {
                // if <requeststatus> isn't OK, then stop processing
                alert("Sorry, there was an error.");
                return;x
            }
             var beerName = xmlData.getElementsByTagName("name")[0].firstChild.data;
             var beerABVC = xmlData.getElementsByTagName("abvc")[0].firstChild.data;
             var beerCost = xmlData.getElementsByTagName("cost")[0].firstChild.data;
             var beerSize = xmlData.getElementsByTagName("size")[0].firstChild.data;
			
		}//end if
		else { //something is hosed
			alert('Something is hosed. It is probably your fault. Error: ' + ajaxObject.status.toString() + '.');
		}
	}//endif, keep waiting on that readyState to == 4
}//end function ajaxResponse