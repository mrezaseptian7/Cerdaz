<?php
    include("../config.php");

        $id_murid = $_POST['id_murid'];
        $username = $_POST['username'];
        $nama_lengkap = ($_POST['nama_lengkap']);
        $tempat_lahir = ($_POST['tempat_lahir']);
        $tanggal_lahir = ($_POST['tanggal_lahir']);
        $alamat = ($_POST['alamat']);
        $no_hp = ($_POST['no_hp']);

        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];

        //echo $id_murid."-".$username."-".$nama_lengkap."-".$tempat_lahir."-".$tanggal_lahir."-".$alamat."-".$no_hp
        //."-".$lokasi_file."-".$nama_file;

        if(!empty($lokasi_file)){
            $foto="../img/murid/".date("y-m-d h-i-sa").$nama_file;
            move_uploaded_file($lokasi_file,$foto);
            $sql = "UPDATE murid SET nama_lengkap='$nama_lengkap', username='$username',
            tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', 
            no_hp='$no_hp', foto='$foto' WHERE id_murid='$id_murid'";
            $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");
        }else{
            $foto="../img/murid/".date("y-m-d h-i-sa").$nama_file;
            move_uploaded_file($lokasi_file,$foto);
            $sql = "UPDATE murid SET nama_lengkap='$nama_lengkap', username='$username',
            tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', 
            no_hp='$no_hp' WHERE id_murid='$id_murid'";
            $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");
        }


       if ($query) {
            echo "<script>alert('Edit murid sukses!')</script>";
            echo "<script>top.location='profil.php?id_murid=".$id_murid."'</script>";
        }else{
            echo "<script>alert('Edit murid gagal!')</script>";
            echo "<script>top.location='profil.php?id_murid=".$id_murid."'</script>";
        }
?>