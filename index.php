<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SFCOFFEE</title>
	<?php

	$agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = 'desktop';

	if (preg_match("/android/i", $agent))
	 {
		$browser = 'android';
	 }
	 elseif (preg_match("/Trident/i", $agent))
	 {
	 	$browser = 'ie';
	 }
	 elseif (preg_match("/iP(hone|od|ad)/i", $agent))
	 {
		$browser = 'ios';
	 }

	switch ($browser) {
		case 'ie':
			echo '<script> window.location = "/sfcoffee/blogs/"</script>';
			break;
		case 'android':
			echo '<script> window.location = "/sfcoffee/blogs/"</script>';
			break;
		case 'ios':
			echo '<script> window.location = "/sfcoffee/blogs/"</script>';
			break;
		default:
			echo '<script> window.location = "/sfcoffee/blogs/1/"</script>';

	}
?>
	
</head>
<body>
	<nav>
		<h1 id='mainTitle'>Coffee Shops of San Francisco</h1>
	</nav>
	<article id='main'>
	</article>	
</body>
</html>