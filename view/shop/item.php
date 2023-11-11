<!DOCTYPE html>
<html>
<head>
    <title>Detail Item</title>
</head>
<body>
    <h1>Detail Item</h1>

    <?php
    // Misalnya, Anda memiliki data item yang ingin ditampilkan
    $item = [
        'id' => 1,
        'name' => 'Nama Item',
        'description' => 'Deskripsi item yang panjang...',
        'price' => 100.00,
    ];

    if ($item) {
    ?>
    <h2><?php echo $item['name']; ?></h2>
    <p><?php echo $item['description']; ?></p>
    <p>Harga: $<?php echo number_format($item['price'], 2); ?></p>
    <!-- Anda dapat menambahkan gambar item jika diperlukan -->
    <img src="path_to_item_image.jpg" alt="<?php echo $item['name']; ?>">

    <!-- Tombol untuk menambahkan item ke keranjang belanja -->
    <form action="judol.cuy/cart" method="post">
        <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
        <button type="submit">Tambahkan ke Keranjang</button>
    </form>
    <?php
    } else {
        echo "Item tidak ditemukan.";
    }
    ?>
</body>
</html>
