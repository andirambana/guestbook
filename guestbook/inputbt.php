<?php 
    session_start();
?>

    <?php 

    include "koneksi.php";

    $posted         = date('Y-m-d');
    $nama 			= $_POST['nama'];
    $email 			= $_POST['email'];
    $pesan 			= $_POST['pesan'];

    $sql = mysqli_query($connect, "insert into bukutamu
    values('','$posted','$nama','$email','$pesan')");

    if($sql){
        $_SESSION['status'] = "Thank you for signing up Guestbook...";
        header('location:databt.php');
    }

    else {
        echo "something went wrong";
    }

    ?>