<?php echo $larf_header_h; ?>
<p>Comes to town on October 19th - 20th at Manhattan City Park.</p>
<p>Find us on Facebook at <?php echo $larf_facebook_link; ?></p>
<p><strong>Join us in Revelry</strong></p>
<p>
	<table border=0 class="padding-5">
		<tr><td>Feasting</td><td>Shoppes</td></tr>
		<tr><td>Medieval Combat</td><td>Family Activities</td></tr>
		<tr><td>Demonstrations</td><td>Performances</td></tr>
	</table>
</p>
<?php echo $larf_admission_p; ?>

<?php
	echo $photos_header;
	loadPhotosGDrive('1XtoXy34BvHQZGtFGuC7QQARLcz27EIws');
	echo $photos_footer;
?>