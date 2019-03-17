<?php

// LOAD A GOOGLE FORMS FORM
function loadGoogleForm($id, $title, $height = "640px") {
	
	// 1FAIpQLSem1CSeTHaGLiUwKE7hmeL0GIrjNtiD1qDhdtwMXB_XuQyUzQ
	
	echo '
	<p>
		<iframe onload="window.scrollTo(0, 0);" src="https://docs.google.com/forms/d/e/' . $id . '/viewform?embedded=true" style="margin-top:5px; width:100%; max-width:650px; height:' . $height . ';" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		<div style="text-align:left;"><a style="text-decoration:none;" href="https://docs.google.com/forms/d/e/' . $id . '/viewform" target=_blank>' . $title . '</a></div>
	</p>
	';
}
	
?>