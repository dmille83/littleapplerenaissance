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
	
	var elements = document.getElementsByClassName("photo-container")[0].getElementsByTagName('img');
	for (var i = 0; i < elements.length; i++) {
		elements[i].onclick = function(){
			photoExpand(this);
		}
	}
	
});

function photoExpand(element) {
	if (element === null) {
		document.getElementById("photo-container-expand").style.display = "none";
	} else {
		document.getElementById("photo-container-expand").style.display = "block";
		document.getElementById("photo-frame").src = element.src;
		document.getElementById("photo-frame").title = element.title;
		document.getElementById("photo-title").innerHTML = element.title;
	}
}