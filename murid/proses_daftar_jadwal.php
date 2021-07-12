<?php
    include("../config.php");
    session_start();
    $id_murid = $_SESSION['id_murid'];
    $id_jadwal = $_POST['jadwal'];


    //echo $id_murid."-".$jadwal;
    $sql = "INSERT INTO murid_jadwal (id_murid, id_jadwal) VALUE ('$id_murid','$id_jadwal')";
    $query = mysqli_query ($mysqli, $sql) or die ("Tidak ada database");

    if ($query) {
        echo "<script>alert('Daftar jadwal sukses!')</script>";
        echo "<script>top.location='jadwal.php?id_murid=".$id_murid."'</script>";
    }else{
        echo "<script>alert('Daftar jadwal gagal!')</script>";
        echo "<script>top.location='jadwal.php?id_murid=".$id_murid."'</script>";
    }

?>
