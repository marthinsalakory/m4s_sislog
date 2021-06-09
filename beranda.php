<?php include "function.php"; ?>
<?php

if (!isset($_SESSION['login']) || !isset($_SESSION['user'])) {
    header("Location: logout.php");
    exit;
}

?>
<h1>Ini adalah halaman beranda</h1><br>
<a href="logout.php">Logout</a>