<?php 
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA KELAS 1 D3 IT A</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #F5EBEB}

        th {
            background-color: #A75D5D;
            color: white;
        }

        a {
            text-decoration: none;
            padding: 5px 20px;
            border-radius: 20px;
            color: white;
            background-color: #EAC7C7;
        }

        a:hover {
            background-color: #D3756B;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center; font-family: Helvetica;">DAFTAR MAHASISWA</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table>
        <tr >
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jenis_Kelamin</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No_Hp</th>
            <th>Asal_SMA</th>
            <th>Matkul_Favorit</th>
            <th>Aksi</th>
        </tr>
        <?php 
        // include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM `daftar mahasiswa` WHERE 1");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NRP']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Jenis_Kelamin']; ?></td>
                <td><?php echo $d['Jurusan']; ?></td>
                <td><?php echo $d['Email']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['No_Hp']; ?></td>
                <td><?php echo $d['Asal_SMA']; ?></td>
                <td><?php echo $d['Matkul_Favorit']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>