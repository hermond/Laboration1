<?php
session_start();
session_unset($_SESSION['User']);

$_SESSION['message'] = "Du har loggats ut";
header("Location: index.php");
exit;