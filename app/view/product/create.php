<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Kategori</title>
</head>
<body>
    <h1>Tambah Kategori</h1>

    <form method="POST" action="/kategori/store">
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" name="nama_kategori" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="/kategori">Kembali ke Daftar Kategori</a>
</body>
</html>
