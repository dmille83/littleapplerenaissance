<?php
	echo $config['company']['h'];
	loadPhotosGDrive(array(
		 $config['photos']['folder']['homepage']['id']	// Homepage Sub-Folder (Best Photos)
		,$config['photos']['folder']['main']['id']		// Main GDrive Photo-Gallery Folder
	));
	loadPhotosGDriveUrl($config['photos']['folder']['main']['id']);
?>