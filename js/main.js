var arr_photos = [];
var arr_photos_idx = 0;

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
				//elements[i].onclick = function(){ photoExpand(i); };
				elements[i].addEventListener('click', function(){ photoExpand(i); });
			})(i)
		}
	}
	
});

function photoExpand(i) {
	console.log(i + "/" + arr_photos.length);
	var arrowLeft = document.getElementById("photo-container-expand").getElementsByClassName("nav-arrow-left")[0];
	var arrowRight = document.getElementById("photo-container-expand").getElementsByClassName("nav-arrow-right")[0];
	if (i === null) {
		document.getElementById("photo-container-expand").style.display = "none";
	} else if (i < arr_photos.length) {
		arr_photos_idx = i;
		var element = arr_photos[i];
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