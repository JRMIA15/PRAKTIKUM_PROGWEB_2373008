<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373008 Jeremia Dylan Utomo</title>
</head>
<style>
    .input_salah {
        color: red;
    }
    #div1{
        background-color: lightgray;
        width: 220px;
        padding :10px;

    }
    table{
        width: 220px;
        padding: 10px;
    }
</style>

<body>
    <div>
        <?php
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $posisi = $_POST['position'];

        if (empty($password) and empty($confirm) and empty($nama)) {
            echo '<div class = "input_salah">
                    Data belum di isi!
                </div>';
        } else if (empty($nama)) {
            echo '<div class = "input_salah">
                    Input Nama belum di isi!
                </div>';
        } else if (empty($password)) {
            echo '<div class = "input_salah">
                    Input Password belum di isi!
                </div>';
        } else if (empty($confirm)) {
            echo '<div class = "input_salah">
                    Input Confirm Password belum di isi!
                </div>';
        }else if ($password != $confirm) {
            echo '<div class = "input_salah">
                   Password dan Confirm Password belum sama!
                </div>';
        } else {
            echo
            "<div id='div1'>
                Data yang Anda Masukan!
            </div>

            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>
                        $nama
                    </td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td>:</td>
                    <td>
                        $posisi
                    </td>
                </tr>
            </table>";
        }
        ?>
        <a id="back" href="soal_1.html">back</a>
    </div>
</body>

</html>