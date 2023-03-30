<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5EBEB;
        }
        h2 {
            color: #333333;
            text-align: center;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            border: 3px solid #A75D5D;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }
        tr:hover {
            background-color: #A75D5D;
        }
        form {
            max-width: 500px;
            margin: auto;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #A75D5D;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #D27685;
        }
        a {
            color: #A75D5D;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 20px;
            color: white;
            background-color: #D27685;
        }
    </style>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <br/>
    <a href="index.php">Kembali</a>
    <br/>
    <br/>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>NRP : </td>
                <td><input type="number" name="NRP"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Jenis_Kelamin</td>
                <td><input type="text" name="Jenis_Kelamin"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>No_HP</td>
                <td><input type="number" name="No_Hp"></td>
            </tr>
            <tr>
                <td>Asal_SMA</td>
                <td><input type="text" name="Asal_SMA"></td>
            </tr>
            <tr>
                <td>Matkul_Favorit</td>
                <td><input type="text" name="Matkul_Favorit"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>