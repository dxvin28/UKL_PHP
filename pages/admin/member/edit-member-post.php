<?php

if (isset($_POST['simpan'])) {
    $id=$_POST['id_member'];
    $nama_member=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $provinsi=$_POST['provinsi'];
    $jk=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
   
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='edit-member.php';</script>";
 
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='edit-member.php';</script>";
    } elseif(empty($kota)){
        //echo "<script>alert('kota tidak boleh kosong');location.href='edit-member.php';</script>";
    } elseif(empty($provinsi)){
        //echo "<script>alert('provinsi tidak boleh kosong');location.href='edit-member.php';</script>";
    } elseif(empty($jk)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='edit-member.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='edit-member.php';</script>";
    } else {

        include "../../../conn.php";
       
       
            $update=mysqli_query($conn,"UPDATE member SET nama='".$nama_member."', alamat='".$alamat."', kota='".$kota."',provinsi='".$provinsi."' ,jenis_kelamin='".$jk."', tlp='".$tlp."' WHERE id_member = '".$id."'");
            if($update){
                echo "<script>alert('Sukses update member');location.href='member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='edit-member.php?id_member=".$id."';</script>";
            }
        } 
    }
    
    

?>
