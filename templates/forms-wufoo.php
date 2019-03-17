<?php

// LOAD A WUFOO FORM
function loadWufooForm($id) {
	
	// zdt3dk91fnpg50
	
	echo '<div>&nbsp;</div>';
	echo '
	<div id="wufoo-' . $id . '"><a href="https://littleapplerenfest.wufoo.com/forms/"' . $id . '">Contact Us</a></div>
	<!--<div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">There are tons of <a href="http://www.wufoo.com/features/">Wufoo features</a> to help make your forms awesome.</div>-->
	<script type="text/javascript">
		var ' . $id . ';(function(d, t) {
			var s = d.createElement(t), options = {
				"userName":"littleapplerenfest",
				"formHash":"' . $id . '",
				"autoResize":true,
				"height":"640",
				"async":true,
				"host":"wufoo.com",
				"header":"show",
				"ssl":true
			};
			s.src = ("https:" == d.location.protocol ? "https://" : "http://") + "secure.wufoo.com/scripts/embed/form.js";
			s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != "complete") if (rs != "loaded") return;
				try { ' . $id . ' = new WufooForm();' . $id . '.initialize(options);' . $id . '.display(); } catch (e) {}
			};
			var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
		})(document, "script");
	</script>
	';
}
	
?>