<!DOCTYPE html>
<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->


<head>
<title>PHP Shopping Site</title>

<?php 
require ("lib/phpfunctions.php");
session_start();

$conn = connectDB();

$message="";
$username = getPost('user_name');
$password = getPost('pass_word');

if (isset($_POST['choice']))
{
    if ($_POST['choice'] == 'Login')
    {
	      if (validate_login($conn, $username, $password)){ 
	          $_SESSION['username'] = $username;
	          header('Location: welcome.php');
	      }else{
	          $message = "Invalid username or password!";
        }
    }
    if ($_POST['choice'] == 'Sign up')
    {
	      header('Location: newuser.php');
    }
    
}  

?>
</head>

<body>
This is a sample website. <br>
Please enter username and password provided below: <br><br>

Username: root<br>
Password: pass123<br>

<hr>

<form method='POST'>
<div align=center>
<table>
<tr><td>Userame: </td><td><input type='text' name='user_name' value='<?php showPost("user_name");?>'> </td></tr>
<tr><td>Password: </td><td><input type='password' name='pass_word' value='<?php showPost("pass_word");?>'> </td></tr>
<tr><td></td></td></tr>
<tr><td></td></td></tr>
<tr><td><input type='submit' name='choice' value='Sign up'></td><td align=right><input type='submit' name='choice' value='Login'></td></tr>
</table>
</div>
</form>
<hr>
<p><?php echo $message;?></p>

</body>
</html>
