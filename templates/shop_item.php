<html>
<head>
<title>Sweets Cafe</title>
<?php 

require("lib/phpfunctions.php");

session_start();
validate_or_bounce();

$ITEM = 'XXX';

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

<?php echo $_SESSION[$ITEM] . " $ITEM <br>"; ?>

<form method='POST'>
<input type='submit' name='choice' value='Add 1'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove 1'>
<input type='submit' name='choice' value='Remove All'>
</form>

<?php require("lib/footer.php"); ?>
</body>
</html>