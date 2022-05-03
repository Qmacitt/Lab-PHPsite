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

function password_verify($username, $password)
{
    if ($username=="root" && $password=="pass123")
    {
	      return true;
    }
    else
    {
        return false;
    }
}

?>
