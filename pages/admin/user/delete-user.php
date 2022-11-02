<?php 
print_r($_GET);
$id = $_GET['id_user'];
    if($id){
        include "../../../conn.php";
        echo "delete from user where id_user=".$id."";
        $qry_hapus=mysqli_query($conn,"delete from user where id_user=".$id."");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus user');location.href='user.php';</script>";
        } else {
            // echo "<script>alert('Gagal hapus user');location.href='delete-user.php';</script>";
        }
    }
?>
