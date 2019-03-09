var arr_photos = [];
var arr_photos_idx = null;

function navMenu() {
	var x = document.getElementById("nav-menu");
	if (x.style.display === "table-cell") {
		x.style.display = "";
	} else {
		x.style.display = "table-cell";
	}
}

window.onload = (function(){
	
	/*
	if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$("#nav-mode").text("This is a mobile device");
	} else {
		$("#nav-mode").text("This is NOT a mobile device");
	}
	*/
	
	// Late-load image sources
	[].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
		img.setAttribute('src', img.getAttribute('data-src'));
		img.onload = function() {
			img.removeAttribute('data-src');
		};
	});
	
	// Add event listeners to the photo gallery
	var elements = document.getElementsByClassName("photo-container")
	if (elements.length > 0) {
		var elements = elements[0].getElementsByTagName('img');
		for (var i = 0; i < elements.length; i++) {
			arr_photos[i] = elements[i];
			(function(i){
				elements[i].addEventListener('click', function(){ photoExpand(i); });
			})(i)
		}
	}
	window.onkeydown = function(){ checkKey(); };
	
});

function photoExpand(i) {
	var arrowLeft = document.getElementById("photo-container-expand").getElementsByClassName("nav-arrow-left")[0];
	var arrowRight = document.getElementById("photo-container-expand").getElementsByClassName("nav-arrow-right")[0];
	if (i === null) {
		arr_photos_idx = null;
		document.getElementById("photo-container-expand").style.display = "none";
		document.body.style.overflow = "";
	} else if (i < arr_photos.length && i >= 0) {
		arr_photos_idx = i;
		console.log("photo " + (i+1) + "/" + arr_photos.length);
		var element = arr_photos[i];
		document.body.style.overflow = "hidden";
		document.getElementById("photo-container-expand").style.display = "block";
		document.getElementById("photo-frame").src = element.src;
		document.getElementById("photo-frame").title = element.title;
		document.getElementById("photo-title").innerHTML = element.title;
		if (i == 0) {
			arrowLeft.style.display = "none";
		} else {
			arrowLeft.style.display = "";
			arrowLeft.onclick = function(){ photoExpand(i - 1); };
		}
		if (i == (arr_photos.length - 1)) {
			arrowRight.style.display = "none";
		} else {
			arrowRight.style.display = "";
			arrowRight.onclick = function(){ photoExpand(i + 1); };
		}
	}
}

function checkKey(e) {
	e = e || window.event;
	
	var bPhotos = false;
	if (arr_photos_idx !== null) bPhotos = true;
	
	// left arrow
    if (e.keyCode == '37') {
		if (bPhotos == true) photoExpand(arr_photos_idx - 1);
    }
	
	// right arrow
    if (e.keyCode == '39') {
		if (bPhotos == true) photoExpand(arr_photos_idx + 1);
    }
	
}