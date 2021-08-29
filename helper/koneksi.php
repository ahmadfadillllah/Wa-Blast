<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "wa-blast";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://localhost/wa-blast/";
date_default_timezone_set('Asia/Jakarta');
