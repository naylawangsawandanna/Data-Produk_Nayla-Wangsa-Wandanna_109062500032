
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>

    <form method="post" action="index.php?page=produk&action=store">
        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" required><br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" min="0" step="0.01" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" min="0" step="1" required><br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=produk">Kembali</a>
    </form>
</body>
</html>
