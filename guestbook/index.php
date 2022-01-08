<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
        <h1>Welcome to My Guestbook</h1>
        <div class="centerbutton">
                <a href="index.php"><button class="button">Form Guestbook</button></a>
                <a href="databt.php"><button class="button">View Guestbook</button></a>
        </div>
        <div class="center">
        <form action="inputbt.php" method="POST">
                <label for="fname">Name :</label>
                <input type="text" id="nama" name="nama" placeholder="Tulis nama..">
                <label for="lname">E-Mail :</label>
                <input type="text" id="email" name="email" placeholder="Tulis e-mail..">
                <label for="subject">Message :</label>
                <textarea id="subject" name="pesan" placeholder="Tulis pesan.." style="height:100px"></textarea>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
        </div>
        
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