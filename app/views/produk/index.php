
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h2>Daftar Produk</h2>

    <a href="index.php?page=produk&action=create">
        Tambah Produk
    </a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($produk as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['nama_produk']) ?></td>
            <td><?= htmlspecialchars($p['kategori']) ?></td>
            <td>Rp<?= number_format((float) $p['harga'], 0, ',', '.') ?></td>
            <td><?= (int) $p['stok'] ?></td>
            <td><?= htmlspecialchars($p['deskripsi'] ?? '') ?></td>
            <td>
                <a href="index.php?page=produk&action=edit&id=<?= (int) $p['id'] ?>">Edit</a>

                <form method="post"
                      action="index.php?page=produk&action=delete"
                      style="display:inline"
                      onsubmit="return confirm('Hapus produk ini?')">
                    <input type="hidden" name="id" value="<?= (int) $p['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
