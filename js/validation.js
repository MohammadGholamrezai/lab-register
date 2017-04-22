function commonPermitted(e) {
	var arr = [
		8, // backspace
		9, // tab
		16, // shift
		17, // ctrl
		35, // end
		36, // home
		37, // left
		39, // right
		46, // del
		// you may want to permit enter/return here too
	];
	if (arr.indexOf(e.keyCode) != -1)
		return true;
	if (e.ctrlKey && ['a', 'c', 'v', 'x'].indexOf(String.fromCharCode(e.keyCode).toLowerCase()))
		return true;
	return;
}

function numberValidate(e) {
	
	var theEvent = e || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode( key );
	//alert(key);
	if (commonPermitted(e)) return;
	
	var regex = /^[0-9]/;
	if( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}
	
function textValidate(e) {
	var theEvent = e || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode( key );

	if (commonPermitted(e)) return;		
// \u0600-\u06FF حروف فارسی 
	var regex = /^[0-9a-zA-Z\u0600-\u06FF\. -]/;
	
	if( !regex.test(key)) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}
