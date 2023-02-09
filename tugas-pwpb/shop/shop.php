<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: form/login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda | WO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="shop.css">
  </head>
  <body>
    <!-- Dimas -->
    <?php include 'nav.php'; ?>
    <div class="container text-center" style="margin-top: 40px;">
        <div class="row">
          <div class="col border border-dark">
            <img src="../img/mb1.jpg" width="300px" height="300px" alt="">
            <h3>Puma MB 0.1 Rick And Morty</h3>
            <p>Rp 2.700.000</p>
            <p>Diskon 30%</p>
            <a href="shopmenu/mb01.php"><button>Beli</button></a>
          </div>
          <div class="col ms-5 me-5 border border-dark">
            <img src="../img/mb2.jpg" width="300px" height="200px" alt="">
            <h3>Puma Mb 0.2</h3>
            <P>Rp 3.000.000</P>
            <p>Diskon 10%</p>
            <a href="shopmenu/mb2.php"><Button>Beli</Button></a>
          </div>
            <div class="col border border-dark">
                <img src="../img/lebron20.jpg" width="300px" height="250px" alt="">
                <h3>Lebron 20</h3>
                <P>Rp 3.000.000</P>
                <p>Diskon 5%</p>
                <Button>Beli</Button>
              </div>
              <div class="mt-5 col border border-dark">
                <img src="../img/ip14.jpg" width="300px" height="300px" alt="">
                <h3>Iphone 14 Pro Max</h3>
                <P>Rp 25.000.000</P>
                <Button>Beli</Button>
              </div>
              <div class="mt-5 ms-5 me-5 col border border-dark">
                <img src="../img/headset.jpg" width="300px" height="300px" alt="">
                <h3>Headset Gaming</h3>
                <P>Rp 1.000.000</P>
                <Button>Beli</Button>
              </div>
              <div class="mt-5 col border border-dark">
                <img src="../img/airpod.jpg" width="300px" height="300px" alt="">
                <h3>airpod 1 2</h3>
                <P>Rp 899.000</P>
                <Button>Beli</Button>
              </div>
              <div class="mt-5 col border border-dark">
                <img src="../img/kd15.jpg" width="300px" height="300px" alt="">
                <h3>Kevin Durant 15</h3>
                <P>Rp 2.300.000</P>
                <p>Diskon 30%</p>
                <Button>Beli</Button>
              </div>
              <div class="mt-5 me-5 ms-5 col border border-dark">
                <img src="../img/bodo amat.jpg" width="300px" height="300px" alt="">
                <h3>Baju Bodo Amat</h3>
                <P>Rp 100.000</P>
                <p>Diskon 1%</p>
                <Button>Beli</Button>
              </div>
              <div class="mt-5 col border border-dark">
                <img src="../img/jaket bandung.jpg" width="300px" height="300px" alt="">
                <h3>Jaket Tirizzz</h3>
                <P>Rp 799.999</P>
                <p>Diskon 20%</p>
                <Button>Beli</Button>
              </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>