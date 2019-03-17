<?php
/***
	TITLE:	LOAD FILES FROM A GOOGLE DRIVE FOLDER AS A PHOTO ALBUM
	USES: 	GOOGLE DRIVE + PHP
	SOURCE:	http://htmlparsing.com/php.html
	SOURCE:	https://stackoverflow.com/questions/20681974/how-to-embed-a-google-drive-folder-in-a-website
	SOURCE:	https://www.publicalbum.org/blog/embedding-google-photos-albums
	PROS:	easy to build, dynamically updates with the folder
	CONS:	alphabetical with no custom sorting (yet)
	
	***
	
	WRAPPER OPTIONS:

	<script src="https://cdn.jsdelivr.net/npm/publicalbum@latest/dist/pa-embed-player.min.js" async></script>
	<div class="pa-embed-player" style="width:100%; max-width:800px; height:480px; display:none;"
		data-link=""
		data-title="Little Apple Ren Fest"
		data-description="Album by Little Apple Ren Fest">
		<?php loadPhotosGDrive('1XtoXy34BvHQZGtFGuC7QQARLcz27EIws'); ?>
		<?php loadPhotosGDrive('17n-iswLPlotLuCsP2t70a7KDK2Indi2m'); ?>
	</div>
	
	<div class="photo-container" title="click on a photo to expand">
		<?php loadPhotosGDrive('1XtoXy34BvHQZGtFGuC7QQARLcz27EIws'); ?>
		<?php loadPhotosGDrive('17n-iswLPlotLuCsP2t70a7KDK2Indi2m'); ?>
	</div>

***/

// PHOTO GALLERY WRAPPER ELEMENTS
// (see ./templates/config.php)

// CONSTRUCT THE URL FOR THE PUBLIC GRID PAGE
function getPhotosGDriveUrl($id) {
	// WHERE $id IS THE ID# IN THE GOOGLE DRIVE FOLDER URL
	return 'https://drive.google.com/embeddedfolderview?id=' . $id . '#grid';
}

// CONSTRUCT A PHOTO GALLERY PAGE ELEMENT
// READ THE PUBLIC GRID PAGE AND PARSE THE IMAGE URLS
// WHERE $array CONTAINS THE ID#S IN THE GOOGLE DRIVE FOLDER URLS
function loadPhotosGDrive($array) {
	echo '<div class="photo-container" title="click on a photo to expand">';
	for ($i = 0; $i < count($array); $i++) {
		$id = $array[$i];
		$url = getPhotosGDriveUrl($id);
		$page = file_get_contents($url);
		$dom = new DOMDocument;
		libxml_use_internal_errors(true);
		$dom->loadHTML($page);
		foreach($dom->getElementsByTagName('img') as $link) {
			$img_src = $link->getAttribute('src');
			$img_title = $link->getAttribute('title');
			if (strpos($img_src, '/type/image/') == false) {
				echo '<img data-src="' . str_replace('=s190', '=s1080', $img_src) . '" title="' . $img_title . '" src="" alt="">';
			}
		}
	}
	echo '</div>';
}

// CONSTRUCT A HYPERLINK PAGE ELEMENT TO THE PUBLIC GRID PAGE
function loadPhotosGDriveUrl($id) {
	// WHERE $id IS THE ID# IN THE GOOGLE DRIVE FOLDER URL
	global $config;
	echo $config['html']['page-break'];
	echo '
	<p>
		<a href="' . getPhotosGDriveUrl($id) . '" target=_blank>Google Drive Folder</a>
	</p>
	';
}

?>