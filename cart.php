<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->

<head>
<title>Sweets Cafe</title>
<?php 

require("lib/phpfunctions.php");

function showCart()
{
    echo "Shopping Cart: <br><br><center><table border=1 width=30%>";
    
    $items = array('cake','cookie','sandwich','tiramisu');
    foreach ($items as $item)
    {
        if (isset($_SESSION[$item]) && $_SESSION[$item] > 0)
        {             
            echo "<tr><td align=right>".$item.": </td>";
            echo "<td width=50% align=center>".$_SESSION[$item]."</td></tr>";
            
        }
    }
    echo "</table></center><br>";
}


session_start();
validate_or_bounce();

?>
</head>

<body>
<?php readfile("lib/header.html"); ?>
<?php showCart() ?>
<?php require("lib/footer.php"); ?>
</body>
</html>