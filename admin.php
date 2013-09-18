<?php
require_once("HTMLPage.php" );

session_start();

if (!isset($_SESSION['User']))
{
    header("Location: index.php");
    exit;
}
if (isset($_SESSION['message']))
{
    $title = $_SESSION['message'];
}
else
{
    $title = "";
}

$HTMLPage = new \view\HTMLPage();
echo $HTMLPage->getAdminPage($title);


unset($_SESSION['message']);
/*echo "
<form action='logout.php' method='post' >
<input type='submit' value='Logout'>

</form>";*/
