<h3>Little Apple Renaissance Festival</h3>

<p>
	If you wish to sponsor us with a donation of money, please use the <a href="https://www.facebook.com/donate/2349758838577870/2377712119130474/" target=_blank>Facebook fundraiser</a> below.
</p>
<p style="text-align: center">
	<iframe id="fb-donate" src="" style="border:none;overflow:hidden;width:100%;height:610px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	<!--src="/img/loading.gif"-->
</p>
<script>
	// RESIZE FACEBOOK IFRAME TO FIT SCREEN
	var pageLoad = (function(){
		var url = 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLittleAppleRenFest%2Fposts%2F2377712119130474&width=';
		// default is w: 350, h: 610
		var w = $('#content-container').width();
		var h = '610';
		if (w >= 500) {
			w = '500'
			h = '591';
		} else if (w < 350) {
			w = '350'
			h = '610';
		}
		console.log('fb window w: ' + w + ', h: ' + h);
		$('#fb-donate').css({'width': w + 'px', 'height': h + 'px'});
		$('#fb-donate').attr('src', url + w);
	});
	window.onload = pageLoad;
	$(window).on('resize', function() {
		clearTimeout($.data(this, 'scrollTimer'));
		$.data(this, 'scrollTimer', setTimeout(function() {
			// do something
			pageLoad();
		}, 100));
	});
</script>