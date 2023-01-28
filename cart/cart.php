<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: form/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/cart.css">
    <title>Shopping Cart | WO</title>
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="../index.php" class="navbar-brand">W.O</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="../shop/shop.php" class="nav-link text-light">Shop</a>
            </li>
            <li class="nav-item ml-4">
                <a href="../profile.php" class="nav-link text-light">Profil</a>
            </li>
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid bg-light" style="height:90vh">
  <div class="container">
    <h1 class="display-4 text-center mt-4">Payment</h1>

    <section id="cart-container" class="container my-5">
        <h5>Keranjang</h5>
        <table width="100%">
            <thead>
                <tr>
                    <td>Hapus</td>
                    <td>Gambar</td>
                    <td>Produk</td>
                    <td>Harga</td>
                    <td>Kuantitas</td>
                    <td>Total</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    <td><img src="../img/mb2.jpg" alt=""></td>
                    <td><h5>Puma Mb 2</h5></td>
                    <td><h5>Rp 3.000.000</h5></td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td><h5>RP 3.000.000</h5></td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    <td><img src="../img/lebron20.jpg" alt=""></td>
                    <td><h5>Lebron 20</h5></td>
                    <td><h5>Rp 3.000.000</h5></td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td><h5>Rp 3.000.000</h5></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-bottom" class="container">
        <div class="row">
        <div class="metode col-lg-6 col-md-6 col-12 mb-4">
                <div>
                    <h5>Metode Pembayaran</h5>
                    <div class="d-flex justify-content-between">
                        <form>
                          <input type="radio" id="tunai" name="metodepembayaran" value="tunai">
                          <label for="tunai">Tunai</label><br>
                          <input type="radio" id="ovo" name="metodepembayaran" value="ovo">
                          <label for="ovo">OVO</label><br>
                          <input type="radio" id="CC" name="metodepembayaran" value="CC">
                          <label for="CC">Kartu Kredit <i class="fa fa-credit-card"></i></label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="total col-lg-6 col-md-6 col-12">
                <div>
                    <h5>Cart Total</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <p>RP 6.000.000</p>
                    </div>
                    <hr class="second-hr">
                    <button class="ml-auto">Konfirmasi Pembayaran</button>
                </div>
            </div>

            <a href="../index.php">Batalkan</a>
        </div>
    </section>
  </div>


</div>
</body>
</html>