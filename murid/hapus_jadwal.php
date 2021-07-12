<?php
    include("../config.php");
    session_start();
    $id_murid = $_SESSION['id_murid'];
    $id_murid_jadwal = $_GET['id_murid_jadwal'];

    //echo $id_murid."-".$jadwal;
    $sql = "DELETE FROM murid_jadwal WHERE id_murid_jadwal='$id_murid_jadwal'";
    $query = mysqli_query ($mysqli, $sql) or die ("Tidak ada database");

    if ($query) {
        echo "<script>alert('Hapus jadwal sukses!')</script>";
        echo "<script>top.location='jadwal.php?id_murid=".$id_murid."'</script>";
    }else{
        echo "<script>alert('Hapus jadwal gagal!')</script>";
        echo "<script>top.location='jadwal.php?id_murid=".$id_murid."'</script>";
    }

?>
