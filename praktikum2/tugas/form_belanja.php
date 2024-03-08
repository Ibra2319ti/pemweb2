<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3 class="pl-2 text-success text-center">Belanja Online</h3>
    <div class="container" style="margin-top: -3%;">
        <div class="row">
            <div class="col-md-6">
                <div class="container px-5 my-5">
                    <form method="post" action="form_belanja.php">
                        <div class="form-group row">
                            <label for="nama_customer" class="col-4 col-form-label">Customer :</label> 
                            <div class="col-8">
                                <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Produk :</label> 
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="tv" type="radio" class="custom-control-input" value="TV"> 
                                    <label for="tv" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="Kulkas"> 
                                    <label for="kulkas" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="mesin_cuci" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                    <label for="mesin_cuci" class="custom-control-label">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-4 col-form-label">Jumlah :</label> 
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 pt-5">
                <table class="table table-striped table-dark text-dark" >
                    <thead class="table-success">
                        <tr>
                            <th>Barang</th>
                            <td>List Harga</td>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr class="table-success">
                            <th scope="row">TV</th>
                            <td>Rp. 3.700.000 </td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Kulkas</th>
                            <td>Rp. 4.900.000</td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Mesin Cuci</th>
                            <td>Rp. 2.800.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>

    <?php 
    if (isset($_POST['submit'])) {
        $nama_customer = $_POST['nama_customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $total_belanja = '';

        if ($produk == 'TV'){
            $harga_satuan = 3700000;
            $total_belanja = number_format($harga_satuan * $jumlah, 0, ",", ".");
        }
        elseif($produk == 'Kulkas'){
            $harga_satuan = 4900000;
            $total_belanja = number_format($harga_satuan * $jumlah, 0, ",", ".");
        }
        elseif($produk == 'Mesin Cuci') {
            $harga_satuan = 2800000;
            $total_belanja = number_format($harga_satuan * $jumlah, 0, ",", ".");

        }
    
    ?>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table-info table-striped text-bold">
                        <thead>
                            <tr>
                                <th scope="col">Informasi Belanja</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Customer</td>
                                <td><?= $nama_customer ?></td>
                            </tr>
                            <tr>
                                <td>Produk Pilihan</td>
                                <td><?= $produk ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Beli</td>
                                <td><?= $jumlah ?></td>
                            </tr> 
                            <tr>
                                <td>Total Belanja</td>
                                <td><?= $total_belanja ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</body>
</html>
