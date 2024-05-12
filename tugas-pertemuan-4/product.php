<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

    <?php
        $products = [
            ["Barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15], 
            ["Barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8], 
            ["Barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50], 
            ["Barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25], 
            ["Barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
        ];
    ?>

    <div class="container">
        <h1>Form Produk</h1>
        <form action="" method="POST">
            <div class="form-group row">
                <label for="barang" class="col-4 col-form-label">Nama Barang</label> 
                <div class="col-8">
                <input id="barang" name="barang" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Harga</label> 
                <div class="col-8">
                <input id="harga" name="harga" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                <div class="col-8">
                <input id="deskripsi" name="deskripsi" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label> 
                <div class="col-8">
                <input id="stok" name="stok" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"]=='POST') {
                $barang = $_POST["barang"];
                $harga = $_POST["harga"];
                $deskripsi = $_POST["deskripsi"];
                $stok = $_POST["stok"];

                $produk = [
                    "Barang" => $barang,
                    "Harga" => $harga,
                    "Deskripsi" => $deskripsi,
                    "Stok" => $stok
                ];

                array_push($products, $produk);
            }?>

        <hr>
        <h1>Daftar Produk</h1>
        <table>
            <th>No</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
    
            <?php $counter = 1;?>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $counter++ ?></td>
                    <td><?= $product["Barang"] ?></td>
                    <td><?= $product["Harga"] ?></td>
                    <td><?= $product["Deskripsi"] ?></td>
                    <td><?= $product["Stok"] ?></td>
                </tr>
            <?php } ?>
        </table>
    
    </div>
</body>
</html>