<?php
require_once("User.php");
$username = $_POST["user"];
$password = $_POST["password"];

//Message session
session_start();
//$_SESSION['message'] = '';
$_SESSION['username'] = $_POST["user"];
$User = new \model\User();

if ($_POST["user"] == $User->getUserName() && $_POST["password"] == $User->getPassword())
{
    $_SESSION['message'] = 'Grattis inloggningen lyckades:)';
    $_SESSION['User'] = 'True';
    header("Location: admin.php");
    exit;
}
else if ($_POST["user"] == "")
{
    $_SESSION['message'] = 'Användarnamn saknas';
        header("Location: index.php");
        exit;
}
else if ($_POST["password"] == "")
{
    $_SESSION['message'] = 'Lösenord saknas';
    header("Location: index.php");
    exit;
}
else if ($_POST["user"] != $User->getUserName() || $_POST["password"] != $User->getPassword())
{
    $_SESSION['message'] = 'Fel användarnamn eller lösenord';
    header("Location: index.php");
    exit;
}
else
{
    $_SESSION['message'] = 'Användarnamn saknas';
    header("Location: index.php");
    exit;
}

