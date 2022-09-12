<?php

// memulai session
session_start();

// mematikan session
$_SESSION = [];
session_unset();
session_destroy();

header("Location: login.php");
exit;

?>