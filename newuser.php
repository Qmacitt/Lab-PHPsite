<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->



<head>
<?php

// Create connection object
$user = "qma5";  
$conn = mysqli_connect("localhost",$user,$user,$user);


// Check connection
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

$message="";
if (isset($_POST['choice']))
{
    $choice = $_POST['choice'];
    if ($choice == "Create User")
    {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
    	      $password = $_POST['password'];
    	      $verifypassword = $_POST['verifypassword'];
    	      if ($password == $verifypassword) 
    	      {
    	          $stmt = $conn->prepare("INSERT INTO users SET username=?, 
                                         email=?, 
                                         usergroup=?,
                                         encrypted_password=? ");
    	          $stmt->bind_param("ssss", $username, $email, $usergroup, $encrypted);
    
    	          $username=$_POST['username'];
    	          $usergroup=$_POST['usergroup'];
    	          $email=$_POST['email'];
    	          $encrypted = password_hash($password, PASSWORD_DEFAULT);
    	    
    	          $stmt->execute();
                         
                $message= "<br>Success, Redirecting in 3 seconds.<br>";
                header("refresh: 3; url=login.php");
	           }
         }
         else
         {
               $message= "Please make sure password confirmation matches your password.<br>";    
         
         
         }
    }else if ($choice == "Cancel")
    
    {
        header("Location: login.php");
    
    }
}

?>
</head>
<body>

<hr>
<form method='POST'>
<div align=center>
<table>
<tr><td align=right>Userame: </td><td><input type='text' name='username'> </td></tr>
<tr><td align=right>Email: </td><td><input type='text' name='email'> </td></tr>
<tr><td align=right>Usergroup: </td><td><input type='text' name='usergroup'> </td></tr>
<tr><td align=right>Password: </td><td><input type='password' name='password'> </td></tr>
<tr><td align=right>Password Confirmation: </td><td><input type='password' name='verifypassword'> </td></tr>
<tr><td></td></td></tr>
<tr><td></td></td></tr>
<tr><td align=right><input type='submit' name='choice' value='Create User'/></td><td align=right><input type='submit' name='choice' value='Cancel'/></td></tr>
</table>
</div>
</form>
<hr>
<p><?php echo $message;?></p>
</body>
</html>
