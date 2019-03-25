<?php echo $config['company']['h']; ?>

<p>
	We are kindly asking our local community, our friends from the surrounding areas, and anyone who enjoys a good Renaissance Festival to help us raise money in order to continue to build a better Little Apple Renaissance Festival every year.
</p>
<p>
	This money will be used to help pay for the professional performers and musicians we invite to entertain everyone.  It will also help to pay for the costumes and props that decorate and help to create the atmosphere that makes the renaissance festival come alive.  This money will help to pay for the insurance that will cover everyone in case of accidents, safety first!  Last but certainly not least, it will help us keep our site in City Park, where admission to the event can continue to be absolutely free!
</p>
<?php echo $config['facebook']['p']; ?>
<p>
	We are looking forward to bringing you more fun every year!
</p>
<p>
	Thank you!
</p>

<div>&nbsp;</div>
<?php echo $config['html']['page-break']; ?>
<p>
	If you wish to sponsor us with a donation of money, please use the <a href="https://www.facebook.com/donate/2349758838577870/2377712119130474/" target=_blank title="Donate to our Facebook Fundraiser">Facebook fundraiser</a> below.
</p>
<p>
	<div>&nbsp;</div>
	<div id="fb-donate-wrapper" style="position:relative; display:inline-block; width:100%; max-width:450px; height:610px;">
		<iframe id="fb-donate" src="" style="border:none;overflow:hidden;width:100%;height:100%;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		<a class="fill-absolute" href="https://www.facebook.com/donate/2349758838577870/2377712119130474/" target=_blank title="Donate to our Facebook Fundraiser"></a>
	</div>
</p>
<script>
	// RESIZE FACEBOOK IFRAME TO FIT SCREEN
	var pageLoad = (function(){
		var url = 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLittleAppleRenFest%2Fposts%2F2377712119130474&width=';
		// default is w: 350, h: 610
		var w = 450;
		var h = 610;
		var cw = Math.round($('#content-container').width());
		//if (cw < 350) cw = 350;
		if (cw < 450) w = cw;
		console.log('fb window w: ' + w + ', h: ' + h);
		$('#fb-donate-wrapper').css({'width': w + 'px', 'height': h + 'px'});
		$('#fb-donate').attr('src', url + w);
	});
	window.onload = pageLoad;
	/*
	window.onresize = (function() {
		clearTimeout($.data(this, 'scrollTimer'));
		$.data(this, 'scrollTimer', setTimeout(function() {
			// do something
			pageLoad();
		}, 100));
	});
	*/
</script>

<div>&nbsp;</div>
<?php echo $config['html']['page-break']; ?>
<p>
	Otherwise, if you are interested in sponsoring us with a contribution of goods or services, please feel free to <a href="/contact">contact us</a>.
</p>