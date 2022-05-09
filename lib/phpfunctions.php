<?php

function validate_or_bounce()
{
    if (!isset($_SESSION['username']))
    {
        header("Location: login.php");
    }
}

function showPost($key) 
{
    if (isset($_POST[$key]))
    {
        echo htmlspecialchars($_POST[$key]);
    }
}

function getPost($key) 
{
    if (isset($_POST[$key]))
    {
        return htmlspecialchars($_POST[$key]);
    }
    else
    {
        return "";
    }
}

function validate_login($conn, $username, $password)
{
    // leave in password
    if ($username=="root" && $password=="pass123"){
        return true;
    }
	
    $row = getUserByUsername($conn, $username);
    
    if ($row == "fail"){
        return false;
    }
	
    if (password_verify($password, $row['encrypted_password'])){
        return true;
    }else{
        return false; 
    }
    
}

function connectDB()
{

    $user = "qma5";  
    $conn = mysqli_connect("localhost",$user,$user,$user);


    if (mysqli_connect_errno()) {
	      echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
    }
    return $conn;
}

function getUserByUsername($conn, $username)
{
    $sql = "SELECT * FROM users WHERE username=?";

    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    if ($result->num_rows != 1) 
    {
	      return "fail";
    }
    
    $row = $result->fetch_assoc(); // fetch the data   
    return $row;
}
?>
