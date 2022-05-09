<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->


<head>
<title>Sweets Cafe</title>
<?php 

require("lib/phpfunctions.php");

session_start();
validate_or_bounce();


session_destroy();
header("refresh: 5; url=login.php");


?>
</head>

<body>
Good bye, Redirecting in 5 seconds.
</body>
</html>