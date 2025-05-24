<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373008 Jeremia Dylan Utomo</title>
</head>
<style>
    body {
        font-size: 20px;
    }

    #user_admin {
        color: blue;
        font-size: 32px;
    }

    #sukses {
        font-weight: bold;
    }

    #gagal {
        color: red;
    }

    #user {
        color: black;
    }
</style>

<body>
    <?php
    $password = $_POST['password'];
    $username = $_POST['username'];
    if ($password == 'admin' and $username == 'admin') {
        echo "<p id = sukses>Login berhasil! <br> Selamat datang, <span id = user_admin>$username.</span></p>";
    } else {
        echo "<p id = gagal>Username : <span id = user>$username</span> Tidak Terdaftar!</p>";
    }
    ?>
    <a href="soal_2.html">kembali ke halaman login</a>
</body>

</html>