<?php
    // if (!isset($_SESSION)) {
    //     session_start();
    // }

    // if ($_SESSION['role']=="kasir") {
    //     echo "<script>location.href='../sign-in.php';</script>";
    // } elseif ($_SESSION['role']=="owner") {
    //     echo "<script>location.href='../sign-in.php';</script>";
    // }

if ($_POST) {
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $role=$_POST['role'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');
        location.href='add-user.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');
        location.href='add-user.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');
        location.href='add-user.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');
        location.href='add-user.php';</script>";
    } elseif (empty($kota)) {
        echo "<script>alert('akota tidak boleh kosong');
        location.href='add-user.php';</script>";
    } elseif (empty($role)) {
            echo "<script>alert('role tidak boleh kosong');
            location.href='add-user.php';</script>";
    } else {
        include "../../../conn.php";

        $insert=mysqli_query($conn, "insert into user (nama,username,password,alamat,kota,role) value ('".$nama."','".$username."','".md5($password)."','".$alamat."','".$kota."','".$role."')");

        if ($insert) {
            echo "<script>alert('Sukses menambahkan user');
            location.href='user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');
            location.href='add-user.php';</script>";
        }
    }
}
?>