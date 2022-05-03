<html>
<head>
<title>Sweets Cafe</title>
<?php 

require("lib/phpfunctions.php");

session_start();
validate_or_bounce();

?>
</head>

<body>
<?php readfile("lib/header.html"); ?>


<?php require("lib/footer.php"); ?>
</body>
</html>