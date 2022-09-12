<?php

// memulai session
session_start();

// mematikan session
$_SESSION = [];
session_unset();
session_destroy();

// untuk menghapus penggunaan cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login.php");
exit;

?>