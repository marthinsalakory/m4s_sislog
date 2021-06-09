<?php

session_start();

// koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sipat';

$conn = new mysqli($servername, $username, $password, $dbname);

// clash untuk pesan login
function set_pesan_login($pesan, $warna)
{
    $_SESSION['flash'] = [
        'pesan' => $pesan,
        'warna'  => $warna
    ];
}

function pesan_login()
{
    if (isset($_SESSION['flash'])) {
        echo '<h5 class="text-center font-weight-bold text-' . $_SESSION['flash']['warna'] . ' mb-4">
                    ' . $_SESSION['flash']['pesan'] . '
                  </h5>';
        unset($_SESSION['flash']);
    }
}
