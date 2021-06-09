<?php

// BaseURL
$BASEURL = "http://localhost/sipat";

session_start();

// koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sipat';

$conn = new mysqli($servername, $username, $password, $dbname);
