<?php

// ... ambil data dari database
include 'proses-list-buku.php';

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
        <h1> Perpustakaan</h1>

        <?php include '../sidebar.php' ?>

        <div class="content">
            <h1>Daftar Buku</h1>
            <div class="btn-tambah-div">
                <a href="tambah-buku.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_buku)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th><u>Judul</u></th>
                    <th><u>Kategori</u></th>
                    <th><u>Deskripsi</u></th>
                    <th><u>Jumlah</u></th>
                    <th><u>Cover</u></th>
                    <th width="18%"><u>Pilihan</u></th>
                </tr>
                <?php foreach ($data_buku as $buku) : ?>
                <tr>
                    <td><?php echo $buku['buku_judul'] ?></td>
                    <td><?php echo $buku['kategori_nama'] ?></td>
                    <td><?php echo $buku['buku_deskripsi'] ?></td>
                    <td><?php echo $buku['buku_jumlah'] ?></td>
                    <td><img class="buku-cover" src="cover/<?php echo $buku['buku_cover'] ?>"></td>
                    <td>
                        <a href="edit-buku.php?id_buku=<?php echo $buku['buku_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-buku.php?id_buku=<?php echo $buku['buku_id']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
