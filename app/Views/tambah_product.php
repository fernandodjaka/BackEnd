<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webleb</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>
    <form action="<?= base_url('insertproduct') ?>" method="post">
        <div class="vid-container">
            <div class="inner-container">
                <div class="box">
                    <h1>Tambah Data</h1>
                    <input type="text" name="nama_product" id="nama_product" placeholder="Nama Produk" required>
                    <input name="description" id="description" placeholder="Deskripsi" required></input>
                    <button type="submit">Tambah</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>