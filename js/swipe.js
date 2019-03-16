function detectswipe(el,func) {
	// SOURCE:	https://stackoverflow.com/questions/15084675/how-to-implement-swipe-gestures-for-mobile-devices
	swipe_det = new Object();
	swipe_det.sX = 0; swipe_det.sY = 0; swipe_det.eX = 0; swipe_det.eY = 0;
	
	var min_x = 60;	//min x swipe for horizontal swipe
	var min_y = 60;	//min y swipe for vertical swipe
	
	/*
	function detectswipexy() {
		var x = swipe_det.eX - swipe_det.sX;
		var y = swipe_det.eY - swipe_det.sY;
		if (Math.abs(x) > Math.abs(y)) {
			// horizontal detection
			if (Math.abs(x) >= min_x) {
				return [x, 0];
			}
		} else {
			// vertical detection
			if (Math.abs(y) >= min_y) {
				return [0, y];
			}
		}
	}
	*/
	
	var direc = "";
	el.addEventListener('touchstart',function(e){
		var t = e.touches[0];
		swipe_det.sX = t.screenX; 
		swipe_det.sY = t.screenY;
	},false);
	el.addEventListener('touchmove',function(e){
		e.preventDefault();
		var t = e.touches[0];
		swipe_det.eX = t.screenX;
		swipe_det.eY = t.screenY;
		
		// Animated swipe
		var x = swipe_det.eX - swipe_det.sX;
		var y = swipe_det.eY - swipe_det.sY;
		
		// Photo swipe down
		if (y > 0 && Math.abs(x) <= Math.abs(y)) {
			el.style.top = y + "px";
		} else {
			el.style.top = "";
		}
		
		// Photo nav left/right
		if (Math.abs(x) > Math.abs(y)) {
			document.getElementById("photo-frame").style.left = x + "px";
		} else {
			document.getElementById("photo-frame").style.left = "";
		}
		
	},false);
	el.addEventListener('touchend',function(e){
		
		//alert( (swipe_det.sX - swipe_det.eX) + "," + (swipe_det.sY - swipe_det.eY) );
		
		// Animated swipe
		el.style.top = "";
		//el.style.left = "";
		
		// Photo nav left/right
		document.getElementById("photo-frame").style.left = "";
		document.getElementById("photo-frame").style.right = "";
		
		// direction detection
		var x = swipe_det.eX - swipe_det.sX;
		var y = swipe_det.eY - swipe_det.sY;
		if (Math.abs(x) > Math.abs(y)) {
			// horizontal detection
			if (Math.abs(x) >= min_x) {
				if(x > 0) direc = "r";
				else direc = "l";
			}
		} else {
			// vertical detection
			if (Math.abs(y) >= min_y) {
				if(y > 0) direc = "d";
				else direc = "u";
			}
		}
		
		// call function
		if (direc != "") {
			if(typeof func == 'function') func(el,direc);
		}
		
		// reset
		direc = "";
		swipe_det.sX = 0; swipe_det.sY = 0; swipe_det.eX = 0; swipe_det.eY = 0;
		
	},false);	
}