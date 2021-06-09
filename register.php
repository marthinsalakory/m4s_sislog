<?php include "connection.php"; ?>
<form action="action.php" method="POST" style="margin-left: 20px; margin-top: 20px;">
    <?php if (isset($_SESSION['konfirmasi_password'])) : ?>
        <div style="margin-top: 10px;">
            <h2 style="color: red;">Konfirmasi password tidak sesuai</h2>
        </div>
    <?php endif; ?>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="nama_lengkap">Masukan Nama Lengkap : </label><br>
        <input style="margin-top: 5px;" type="text" name="nama_lengkap" id="nama_lengkap">
    </div>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="email">Masukan Email : </label><br>
        <input style="margin-top: 5px;" type="text" name="email" id="email">
    </div>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="username">Masukan Username : </label><br>
        <input style="margin-top: 5px;" type="text" name="username" id="username">
    </div>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="password">Masukan Password : </label><br>
        <input style="margin-top: 5px;" type="text" name="password" id="password">
    </div>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="password2">Konfirmasi Password : </label><br>
        <input style="margin-top: 5px;" type="text" name="password2" id="password2">
    </div>
    <div style="margin-top: 10px;">
        <button style="margin-top: 5px;" type="submit" name="register">register</button><br><br>
        <a href="login.php">registered</a>
    </div>
</form>

<?php unset($_SESSION['konfirmasi_password']); ?>