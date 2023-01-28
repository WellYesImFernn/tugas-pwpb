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
    <title>Dasboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="sidebar">
        <div class="brand">
            <i class="fa-solid fa-qrcode"></i>&nbsp;&nbsp;
            <h1>Warung Online</h1>
        </div>
        <ul>
            <li><a href="shop/shop.php"><i class="fa-solid fa-shop"></i>&nbsp;<span>Toko</span></a></li>
            <li><a href="cart.php"><i class="fa-sharp fa-solid fa-basket-shopping"></i>&nbsp;<span>Keranjang</span></a></li>
            <li><a href="cart.php"><i class="fa-solid fa-wallet"></i>&nbsp;&nbsp;<span>Pembayaran</span></a></li>
            <li><a href="help.php"><i class="fa-regular fa-circle-question"></i>&nbsp;&nbsp;<span>Bantuan</span></a></li>
            <li><a href="settings.php"><i class="fa-solid fa-gear"></i>&nbsp;&nbsp;<span>Pengaturan</span></a></li>
            <li><a href="index.php"><i class="fa-solid fa-left-long"></i>&nbsp;&nbsp;<span>Kembali</span></a></li>
            <li><a href="#" class="logout"><i class="fa-solid fa-right-from-bracket"></i><span> Log Out</span></a></li>
            
        </ul>
    </div>

    <div class="container">
        <div class="header">
        </div>
    </div>
    <div class="container">
    <h1 style="margin-top: 200px; margin-left: 400px; font-size: 50px;">WIP</h1>
    </div>
</body>
</html>