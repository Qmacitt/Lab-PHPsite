<html>
<head>
<title>Sweets Cafe</title>
<?php 

require("lib/phpfunctions.php");

session_start();
validate_or_bounce();


session_destroy();
header("refresh: 3; url=login.php");


?>
</head>

<body>
Good bye, Redirecting in 3 seconds.
</body>
</html>