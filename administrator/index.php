<?php
include "header.php";
include "navbar.php";
?>

<body>
    <style>
    body {
        margin: 0;
        padding: 0;
        background: url(011.webp);
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        font-family: 'Century Schoolbook';
    }
    </style>
</body>
<div class="container">
    <div class="card mt-3">
        <div class="text-center card bg-danger-subtle text-black">
            <div class="card-header">
                SELAMAT DATANG DIHALAMAN ADMINISTRATOR
            </div>
        </div>
        <div class="container">
            <div class="mt-5">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card bg-danger-subtle text-black">
                                <div class="card-body">
                                    Data Barang
                                    <?php
                                    include '../koneksi.php';
                                    $data_produk = mysqli_query($koneksi, "SELECT * FROM produk");
                                    $jumlah_produk = mysqli_num_rows($data_produk);
                                    ?>
                                    <h3><?php echo $jumlah_produk; ?></h3>
                                    <a href="data_barang.php" class="btn btn-outline-dark btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-danger-subtle text-black">
                                <div class="card-body">
                                    Data Pembelian
                                    <?php
                                    include '../koneksi.php';
                                    $data_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan");
                                    $jumlah_penjualan = mysqli_num_rows($data_penjualan);
                                    ?>
                                    <h3><?php echo $jumlah_penjualan; ?></h3>
                                    <a href="pembelian.php" class="btn btn-outline-dark btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-danger-subtle text-black">
                                <div class="card-body">
                                    Data Pengguna
                                    <?php
                                    include '../koneksi.php';
                                    $data_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
                                    $jumlah_petugas = mysqli_num_rows($data_petugas);
                                    ?>
                                    <h3><?php echo $jumlah_petugas; ?></h3>
                                    <a href="data_pengguna.php" class="btn btn-outline-dark btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<?php
include "footer.php";
?>