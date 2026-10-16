
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>

    <form method="post" action="index.php?page=produk&action=update">
        <input type="hidden" name="id"
               value="<?= (int) $produk['id'] ?>">

        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk"
               value="<?= htmlspecialchars($produk['nama_produk']) ?>"
               required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori"
               value="<?= htmlspecialchars($produk['kategori']) ?>"
               required><br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" min="0" step="0.01"
               value="<?= htmlspecialchars((string) $produk['harga']) ?>"
               required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" min="0" step="1"
               value="<?= (int) $produk['stok'] ?>"
               required><br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi"><?= htmlspecialchars($produk['deskripsi'] ?? '') ?></textarea><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=produk">Kembali</a>
    </form>
</body>
</html>
