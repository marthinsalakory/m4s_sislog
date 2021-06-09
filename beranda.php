<?php include "function.php"; ?>
<?php

if (!isset($_SESSION['login']) || !isset($_SESSION['user'])) {
    header("Location: logout.php");
    exit;
}

?>

<?php if (in_groups('admin')) : ?>
    <h1>Halaman Admin</h1>
<?php elseif (in_groups('user')) : ?>
    <h1>Halaman User</h1>
<?php endif; ?>

<br><br>


<h1>Hallo <?= user("nama_lengkap"); ?>, Ini adalah halaman beranda</h1><br>

<a href="logout.php">Logout</a>