<?php
$conn = mysqli_connect("localhost","root","","db_simple_academy");

if(mysqli_connect_errno()){
    echo "Koneksi gagal!".mysqli_connect_errno();
}


?>