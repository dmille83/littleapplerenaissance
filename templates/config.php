<?php

// GLOBAL SETTINGS USED IN MULTIPLE PLACES IN THE WEBSITE

/**
 *	CONFIG VAR INDEXING SCHEMA:
 *	
 *	INDEX	USAGE
 *	--		--
 *	name	raw text string
 *	url		raw url string
 *	a		hyperlink html element
 *	p		paragraph html element
 *	id		id# of an external resource, such as a form
*/

/*** GENERAL SETTINGS ***/

// RECURRING HTML PAGE ELEMENTS
$config['html']['page-break'] = '<div class="page-break"></div>';


/*** INTERNAL INFO ***/

// COMPANY
$config['company']['name'] = 'Little Apple Renaissance Festival';
$config['company']['h'] = '<h3>' . $config['company']['name'] . '</h3>';

// CONTACT INFO
$config['phone']['a'] = '<a href="tel:+1-913-547-1653">(913) 547-1653</a>';
$config['email']['url'] = 'littleapplerenfest@gmail.com';
$config['email']['a'] = '<a href="mailto:' . $config['email']['url'] . '">' . $config['email']['url'] . '</a>';
$config['contact']['p'] = $config['html']['page-break'] . '<p>Questions? We may also be reached at ' . $config['phone']['a'] . ' or at ' . $config['email']['a'] . '</p>';

// CALENDAR
$config['calendar']['p'] = '<p>Comes to town on October 19th - 20th at Manhattan City Park.</p>';

// ADMISSION COST
$config['admission']['p'] = '<p><strong>Admission to this event is free!</strong></p>';


/*** EXTERNAL RESOURCES ***/

// PHOTO GALLERY
$config['photos']['folder']['main']['id'] = '17n-iswLPlotLuCsP2t70a7KDK2Indi2m';		// Main GDrive Photo-Gallery Folder ID#
$config['photos']['folder']['homepage']['id'] = '1XtoXy34BvHQZGtFGuC7QQARLcz27EIws';	// Homepage Sub-Folder ID# (Best Photos)

// FACEBOOK
$config['facebook']['url'] = 'https://www.facebook.com/LittleAppleRenFest';
$config['facebook']['a'] = '<a href="' . $config['facebook']['url'] . '" title="Facebook" target=_blank>facebook.com/LittleAppleRenFest</a>';
$config['facebook']['p'] = '<p>Find further details on Facebook at ' . $config['facebook']['a'] . '</p>';

// WUFOO
$config['photos']['wufoo']['contactus']['id'] = 'zdt3dk91fnpg50';	// Contact Us Form ID#
$config['photos']['wufoo']['contactus']['height'] = '640';
$config['photos']['wufoo']['vendorapplication']['id'] = 'mo2dx3q0wgf8u5';	// Vendor Application Form ID#
$config['photos']['wufoo']['vendorapplication']['height'] = '1576';

// GOOGLE FORMS
$config['google']['forms']['contactus']['id'] = '1FAIpQLSeBmlJzKbP3UbBng-kyL5fahgr_RscfY-TTzblCM9-Vxin1mw';			// Contact Us Form ID#
$config['google']['forms']['contactus']['title'] = 'Contact Us Form';
$config['google']['forms']['contactus']['height'] = '1100px';
$config['google']['forms']['vendorapplication']['id'] = '1FAIpQLSem1CSeTHaGLiUwKE7hmeL0GIrjNtiD1qDhdtwMXB_XuQyUzQ';	// Vendor Application Form ID#
$config['google']['forms']['vendorapplication']['title'] = 'Vendor Application Form';
$config['google']['forms']['vendorapplication']['height'] = '4500px'; //'640px';

?>