<?php

session_start();

$products = [ 
    ["barang" => "Printer", "harga" => 1200000, "deskripsi" => "Printer merk HP", "stok" => 15], 
    ["barang" => "Tablet", "harga" => 2000000, "deskripsi" => "Tablet merk Samsung", "stok" => 8], 
    ["barang" => "Mouse", "harga" => 150000, "deskripsi" => "Mouse merk Logitech", "stok" => 50], 
    ["barang" => "Speaker", "harga" => 500000, "deskripsi" => "Speaker merk JBL", "stok" => 25], 
    ["barang" => "Headset", "harga" => 250000, "deskripsi" => "Headset merk Sony", "stok" => 30] 
];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_product =[
        "barang" => $_POST['barang'],
        "harga" => $_POST['harga'],
        "deskripsi" => $_POST['deskripsi'],
        "stok" => $_POST['stok']
    ];

    // menyimpan produk baru
    if (!isset($_SESSION['new_producs'])) {
        $_SESSION['new_products'] = [];
    }
    $_SESSION['new_products'] [] = $new_product;
}

// produk lama dan baru
if (!isset($_SESSION['new_producs'])) {
    $products = array_merge($products, $_SESSION['new_products']);
}

?>

<h1>Daftar Produk</h1>
    <table border="2">
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        
        <?php foreach ($products as $produk) { ?>
        <tr>
            <td><?php echo $produk['barang'] ?></td>
            <td><?= $produk['harga'] ?></td>
            <td><?= $produk['deskripsi'] ?></td>
            <td><?= $produk['stok'] ?></td>
        </tr>
        <?php } ?>
    </table>