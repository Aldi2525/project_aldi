<?php

// ... ambil data dari database
include 'proses-list-anggota.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>Perpustakaan</h1>

        <?php include '../sidebar.php' ?>

        <div class="content">
            <h1>Daftar Anggota</h1>
            <div class="btn-tambah-div">
                <a href="tambah-anggota.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_anggota)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th><u>Nama</u></th>
                    <th><u>Alamat</u></th>
                    <th><u>JK</u></th>
                    <th><u>o Telepon</u>N</th>
                    <th width="18%"><u>Pilihan</u></th>
                </tr>
                <?php foreach ($data_anggota as $anggota) : ?>
                <tr>
                    <td><?php echo $anggota['anggota_nama'] ?></td>
                    <td><?php echo $anggota['anggota_alamat'] ?></td>
                    <td><?php echo $anggota['anggota_jk'] ?></td>
                    <td><?php echo $anggota['anggota_telp'] ?></td>
                    <td>
                        <a href="edit-anggota.php?id_anggota=<?php echo $anggota['anggota_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-anggota.php?id_anggota=<?php echo $anggota['anggota_id']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
                
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>