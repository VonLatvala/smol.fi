<?php require 'inc/Quote.class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>154 edgy thoughts</title>
	<meta name="robots" content="noindex">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
	<div>
    <p id="message" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'"><?php echo Quoter::getQuote(); ?></p>
	</div>
</body>
</html>