<?php
session_start();
session_destroy();
session_start();
$_SESSION['message'] = "Du har loggats ut";
header("Location: index.php");
exit;