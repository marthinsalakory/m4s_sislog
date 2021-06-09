<?php include "connection.php"; ?>
<form action="action.php" method="POST" style="margin-left: 20px; margin-top: 20px;">
    <?php if (isset($_SESSION['berhasil'])) : ?>
        <div style="margin-top: 10px;">
            <h2 style="color: green;">Success register</h2>
        </div>
    <?php endif; ?>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="username">Masukan Username : </label><br>
        <input style="margin-top: 5px;" type="text" name="username" id="username">
    </div>
    <div style="margin-top: 10px;">
        <label style="margin-top: 5px;" for="password">Masukan Password : </label><br>
        <input style="margin-top: 5px;" type="text" name="password" id="password">
    </div>
    <div style="margin-top: 10px;">
        <button style="margin-top: 5px;" type="submit" name="login">Login</button><br><br>
        <a href="register.php">sign up</a>
    </div>
</form>
<?php unset($_SESSION['berhasil']); ?>