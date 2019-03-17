<?php

// LOAD A GOOGLE FORMS FORM
function loadGoogleForm($array) {
	
	// $array['id'] = '1FAIpQLSem1CSeTHaGLiUwKE7hmeL0GIrjNtiD1qDhdtwMXB_XuQyUzQ';
	// $array['title'] = 'Vendor Application Form';
	// $array['height'] = '640px';
	
	echo '
	<p>
		<iframe onload="window.scrollTo(0, 0);" src="https://docs.google.com/forms/d/e/' . $array['id'] . '/viewform?embedded=true" style="margin-top:5px; width:100%; max-width:650px; height:' . $array['height'] . ';" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		<div style="text-align:left;"><a style="text-decoration:none;" href="https://docs.google.com/forms/d/e/' . $array['id'] . '/viewform" target=_blank>' . $array['title'] . '</a></div>
	</p>
	';
}
	
?>