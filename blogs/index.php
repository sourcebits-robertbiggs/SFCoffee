<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="msapplication-tap-highlight" content="no">
	<title>SF COFFEE</title>
	<?php

	$agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = 'desktop';

	if (preg_match("/android/i", $agent))
	 {
		$browser = 'android';
	 }
	 elseif (preg_match("/trident/i", $agent))
	 {
	 	$browser = 'ie';
	 }
	 elseif (preg_match("/iP(hone|od|ad)/i", $agent))
	 {
		$browser = 'ios';
	 }

	switch ($browser) {
		case 'ie':
			echo '<link rel="stylesheet" href="/sfcoffee/public/chui/chui.win-3.0.css"><script type="text/javascript" src="/sfcoffee/public/chui/chocolatechip-3.0.js"></script><script type="text/javascript" src="/sfcoffee/public/chui/chui-3.0.js"></script><script type="text/javascript" src="/sfcoffee/models/shops-mobile.js"></script><script type="text/javascript" src="/sfcoffee/public/scripts/mobile.js"></script>';
			break;
		case 'android':
			echo '<link rel="stylesheet" href="/sfcoffee/public/chui/chui.android-3.0.css"><script type="text/javascript" src="/sfcoffee/public/chui/chocolatechip-3.0.js"></script><script type="text/javascript" src="/sfcoffee/public/chui/chui-3.0.js"></script><script type="text/javascript" src="/sfcoffee/models/shops-mobile.js"></script><script type="text/javascript" src="/sfcoffee/public/scripts/mobile.js"></script>';
			break;
		case 'ios':
			echo '<link rel="stylesheet" href="/sfcoffee/public/chui/chui.ios-3.0.css"><script type="text/javascript" src="/sfcoffee/public/chui/chocolatechip-3.0.js"></script><script type="text/javascript" src="/sfcoffee/public/chui/chui-3.0.js"></script><script type="text/javascript" src="/sfcoffee/models/shops-mobile.js"></script><script type="text/javascript" src="/sfcoffee/public/scripts/mobile.js"></script>';
			break;

	}
?>
</head>
<body>
	<nav class='current'>
		
	</nav>
	<article id='main' class='current'>
		<section>
			<a id='exploreButton' class='button explore'>Explore Places</a>
		</section>
	</article>
	<nav class="next">
		<a href="#" id='backToMain' class="button backTo">Home</a>
		<h1>Coffee Shops</h1>
	</nav>
	<article id="blogs" class="next">
		<section>
			<ul id='blog-list' class="list"></ul>
		</section>
	</article>
	<nav class="next">
		<a href="#" class="button back">Shops</a>
		<h1>Coffe Shops</h1>
	</nav>
	<article id="detail" class="next">
		<section>
			<ul class="list" id="blogDetail"></ul>
		</section>
	</article>
</body>
</html>


