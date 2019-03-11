function detectswipe(el,func) {
	// SOURCE:	https://stackoverflow.com/questions/15084675/how-to-implement-swipe-gestures-for-mobile-devices
	swipe_det = new Object();
	swipe_det.sX = 0; swipe_det.sY = 0; swipe_det.eX = 0; swipe_det.eY = 0;
	
	//var min_x = 30;	//min x swipe for horizontal swipe
	var max_x = 30;		//max x difference for vertical swipe
	var min_y = 50;	//min y swipe for vertical swipe
	var max_y = 60;		//max y difference for horizontal swipe
	
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
	},false);
	el.addEventListener('touchend',function(e){
		
		//alert( (swipe_det.sX - swipe_det.eX) + "," + (swipe_det.sY - swipe_det.eY) );
		
		// I'd recommend to set min_x dynamically, because when you swipe 400px up and only 40px right, you probably intend to swipe up.
		var min_x = Math.abs(swipe_det.eY - swipe_det.sY);	//min x swipe for horizontal swipe
		//var min_y = Math.abs(swipe_det.eX - swipe_det.sX);	//min y swipe for vertical swipe
		
		//horizontal detection
		if ((((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) && ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y) && (swipe_det.eX > 0)))) {
			if(swipe_det.eX > swipe_det.sX) direc = "r";
			else direc = "l";
		}
		//vertical detection
		else if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x) && (swipe_det.eY > 0)))) {
			if(swipe_det.eY > swipe_det.sY) direc = "d";
			else direc = "u";
		}
		//call function
		if (direc != "") {
			if(typeof func == 'function') func(el,direc);
		}
		direc = "";
		swipe_det.sX = 0; swipe_det.sY = 0; swipe_det.eX = 0; swipe_det.eY = 0;
	},false);	
}