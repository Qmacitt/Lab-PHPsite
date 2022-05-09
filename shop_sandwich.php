<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->


<head>
<title>Sweets Cafe</title>
<?php 

require("lib/phpfunctions.php");

session_start();
validate_or_bounce();

$ITEM = 'sandwich';

if (! isset( $_SESSION[$ITEM] ))
{
    $_SESSION[$ITEM] = 0;
}


if ( isset( $_POST['choice'] ) ) 
{
    $choice = $_POST['choice'];
    if ($choice == 'Add 1')
    {
    $_SESSION[$ITEM] += 1;
    }
    else if ($choice == 'Add 10')
    {
    $_SESSION[$ITEM] += 10;
    }
    else if ($choice == 'Remove 1')
    {
    $_SESSION[$ITEM] -= 1;
    }
    else if ($choice == 'Remove All')
    {
    $_SESSION[$ITEM] = 0;
    }
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<center>
<img width='200' src='images/sandwich.jpg'><br>
<?php echo $_SESSION[$ITEM]." ".$ITEM."s in your cart. <br><br>"; ?>

<form method='POST'>
<input type='submit' name='choice' value='Add 1'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove 1'>
<input type='submit' name='choice' value='Remove All'>
</form>
</center>
<?php require("lib/footer.php"); ?>
</body>
</html>