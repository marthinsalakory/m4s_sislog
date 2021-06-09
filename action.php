<?php include "connection.php";

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $active = 1;

    // cek konfirmasi password
    if ($password != $password2) {
        $_SESSION =
            [
                'konfirmasi_password' => true,
            ];
        header("Location: register.php");
        exit;
    }

    // query insert data users
    $query = "INSERT INTO users
                    VALUES
                    ('', '$email', '$username', '$nama_lengkap', '$password', '$active')
                    ";
    mysqli_query($conn, $query);


    $users_rows =  mysqli_affected_rows($conn);

    // insert data auth_groups_users
    $groups_id = 2;
    $users_id = query("SELECT * FROM users ORDER BY id DESC LIMIT 1")[0]['id'];

    $query = "INSERT INTO auth_groups_users
    VALUES
    ('$groups_id', '$users_id')
    ";
    mysqli_query($conn, $query);


    $auth_groups_users_rows =  mysqli_affected_rows($conn);

    if ($users_rows > 0 && $auth_groups_users_rows > 0) {
        $_SESSION =
            [
                'berhasil' => true,
            ];
        header("Location: login.php");
        exit;
    }

    header("Location: register.php");
    exit;
}
