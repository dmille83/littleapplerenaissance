<?php echo $config['company']['h']; ?>
<?php echo $config['calendar']['p']; ?>
<p>Find us on Facebook at <?php echo $config['facebook']['a']; ?></p>
<p><strong>Join us in Revelry</strong></p>
<p>
	<table border=0 class="padding-5">
		<tr><td>Feasting</td><td>Shoppes</td></tr>
		<tr><td>Medieval Combat</td><td>Family Activities</td></tr>
		<tr><td>Demonstrations</td><td>Performances</td></tr>
	</table>
</p>
<?php echo $config['admission']['p']; ?>
<?php
	loadPhotosGDrive(array(
		$config['photos']['folder']['homepage']['id']	// Homepage Sub-Folder (Best Photos)
	));
?>