<!--  I honor Parkland core values by affirming that I have followed all academic integrity guidelines for this work.
Qing Ma CSC-155-201H_2022SP -->

<html>
<head>
<title>PHP Shopping Site</title>

<?php 
require ("lib/phpfunctions.php");
session_start();

$message="";
$username = getPost('user_name');
$password = getPost('pass_word');

if (isset($_POST['choice']))
{
    if ($_POST['choice'] == 'Login')
    {
	      if (validate_login($username, $password)){ 
	          $_SESSION['username'] = $username;
	          header('Location: welcome.php');
	      }else{
	          $message = "Invalid username or password!";
        }
    }
}  

?>
</head>

<body>
This is a student sample website. <br>
Please enter username and password provided below.<br><hr>

<form method='POST'>

<table>
<tr><td>Userame: </td><td><input type='text' name='user_name' value='<?php showPost("user_name");?>'> </td></tr>
<tr><td>Password: </td><td><input type='password' name='pass_word' value='<?php showPost("pass_word");?>'> </td></tr>
<tr><td></td><td align=right><input type='submit' name='choice' value='Login'></td></tr>
</table>

Username: root<br>
Password: pass123<br>
<hr>
<p><?php echo $message;?></p>

</body>
</html>
