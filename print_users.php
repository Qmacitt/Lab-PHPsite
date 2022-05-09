<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->

<head>
<title>Users List</title>
<?php 

// Create connection object
$user = "qma5";  
$conn = mysqli_connect("localhost",$user,$user,$user);


function printTable($result)
{

    if ($result->num_rows > 0) 
    {
        echo"<table border=1>";
        echo"<tr><th>id</th><th>username</th><th>email</th><th>usergroup</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
            echo"<tr align=center>";
            echo "<td width='20%'>" .$row["id"]. "</td>";
            echo "<td width='20%'>" .$row["username"]. "</td>";
            echo "<td width='20%'>" .$row["email"]. "</td>";
            echo "<td width='20%'>" .$row["usergroup"]."</td>";
          
            echo"</tr>";
        }
        echo"</table><br>";
    } 
    else 
    {
        echo "0 results";
    }
}


// Check connection
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}


// Read Table
$sql = "SELECT * FROM users;";
$result = $conn->query($sql);

if (isset($_POST['choice']))
{

    if ($_POST['choice'] == 'OK')
    {
	      header('Location: welcome.php');
    }
    
}  


?>

</head>

<body>
<h3>Users List</h3>
<hr>
<center>
<?php printTable($result); ?>

<form method='POST'>

<input type='submit' name='choice' value='OK'>

</form>
</center>
</body>
</html>



