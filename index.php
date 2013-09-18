<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hello World
 * Date: 2013-09-04
 * Time: 14:59
 * To change this template use File | Settings | File Templates.
 * test
 */
require_once("HTMLPage.php" );
$HTMLPage = new \view\HTMLPage();

session_start();
if (isset($_SESSION['User']))
{
    header("Location: admin.php");
    exit;
}
else if (isset($_SESSION['message']))
{
    $title = $_SESSION['message'];
    session_destroy();
    //Fixa unset
}
else
{
    $title = "Välkommen";
}
echo $HTMLPage->getIndexPage($title);

?>