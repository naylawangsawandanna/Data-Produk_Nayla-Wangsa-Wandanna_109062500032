
<?php

class Produk
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, nama_produk, kategori, harga, stok, deskripsi
             FROM produk ORDER BY nama_produk'
        );

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT id, nama_produk, kategori, harga, stok, deskripsi
             FROM produk WHERE id = :id'
        );

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO produk
                (nama_produk, kategori, harga, stok, deskripsi)
                VALUES
                (:nama_produk, :kategori, :harga, :stok, :deskripsi)';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':nama_produk' => $data['nama_produk'],
            ':kategori' => $data['kategori'],
            ':harga' => $data['harga'],
            ':stok' => $data['stok'],
            ':deskripsi' => $data['deskripsi']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE produk
                SET nama_produk = :nama_produk,
                    kategori = :kategori,
                    harga = :harga,
                    stok = :stok,
                    deskripsi = :deskripsi
                WHERE id = :id';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':nama_produk' => $data['nama_produk'],
            ':kategori' => $data['kategori'],
            ':harga' => $data['harga'],
            ':stok' => $data['stok'],
            ':deskripsi' => $data['deskripsi']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            'DELETE FROM produk WHERE id = :id'
        );

        return $stmt->execute([':id' => $id]);
    }
}
