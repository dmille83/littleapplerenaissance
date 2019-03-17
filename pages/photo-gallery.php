<?php echo $larf_header_h; ?>

<?php
	echo $photos_header;
	$gallery_id1 = '1XtoXy34BvHQZGtFGuC7QQARLcz27EIws'; // Homepage sub-folder (show best photos first)
	$gallery_id2 = '17n-iswLPlotLuCsP2t70a7KDK2Indi2m'; // Main GDrive folder
	loadPhotosGDrive($gallery_id1);
	loadPhotosGDrive($gallery_id2);
	echo $photos_footer;
?>

<p>
	<a href="<?php echo getPhotosGDriveUrl($gallery_id2); ?>" target=_blank>Google Drive Folder</a>
</p>