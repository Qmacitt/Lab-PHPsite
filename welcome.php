<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->


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