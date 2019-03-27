function navMenu(c) {
	var x = document.getElementById("nav-menu");
	if (x.style.display === "table-cell" || c === true) {
		x.style.display = "";
	} else {
		x.style.display = "table-cell";
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#nav-menu").offset().top
		}, 100);
	}
}