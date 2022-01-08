<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="databt.css">
</head>
<body>
    
    <h1>Welcome to My Guestbook</h1>
        <div class="centerbutton">
                <a href="index.php"><button class="button">Form Guestbook</button></a>
                <a href="databt.php"><button class="button">View Guestbook</button></a>
        </div>

    <?php
        if(isset($_SESSION['status']))
        {
            ?>
            <div class="alert"> 
            <strong>Hey</strong> <?php echo $_SESSION['status']; ?>
            </div>
            <?php
            
            unset($_SESSION['status']);
        }
    ?>

    <table id="customers">
        <tr>
            <th>Posted</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>Pesan</th>
        </tr>
        <?php
            include "koneksi.php";
            $sql = mysqli_query ($connect, "select * from bukutamu");
            while ($result = mysqli_fetch_array($sql)){ 
        ?>
        <tr>
            <td><?php echo $result[1];?></td>
            <td><?php echo $result[2];?></td>
            <td><?php echo $result[3];?></td>
            <td><?php echo $result[4];?></td>
        </tr>
        <?php } ?>
    </table>

        <footer>
            <h3>Nama Anggota Kelompok</h3>
            <table class="tabel_footer">
            <tr>
                <td>Mochammad Andi Rambana</td>
                <td>54418178</td>
            </tr>
            <tr>
                <td>Dimas Pradipta Putra</td>
                <td>51418971</td>
            </tr>
            <tr>
                <td>Reza Pratama</td>
                <td>56418060</td>
            </tr>
            </table>
        </footer>
</body>
</html>