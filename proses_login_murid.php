<?php
include("config.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // echo $username.'-'.$email.'-'.$password;
    $sql = "SELECT id_murid, username, foto FROM murid WHERE email='$email' AND 
    password='$password'";
    $query = mysqli_query ($mysqli, $sql) or die ("Tidak ada database");
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    session_start();
    $_SESSION['id_murid'] = $data['id_murid'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['foto'] = $data['foto'];

    if ($row==1) {
        echo "<script>alert('Login murid sukses!')</script>";
        echo "<script>top.location='murid/'</script>";
    }else{
        echo "<script>alert('Login murid gagal!')</script>";
        echo "<script>top.location='index.php'</script>";
    }

?>
