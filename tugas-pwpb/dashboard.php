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
    <title>Warung Online</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="" alt="">
                    <span class="nav-item">DashBoard</span>
                </a></li>
                <li><a href="profile.php">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="shop/shop.php">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="nav-item">Toko</span>
                </a></li>
                <li><a href="cart/cart.php">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Checkout</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-wallet"></i>
                    <span class="nav-item">Pembayaran</span>
                </a></li>
                <li><a href="form/logout.php" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Diskon</h1>
                <i class="fas fa-shopping-basket"></i>
            </div>
            <div class="main-diskon">
                <div class="card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Flash Sale</h3>
                    <p>Berlaku Hingga 2.2.2023</p>
                    <button>Beli Sekarang</button>
                </div>
                <div class="card">
                    <i class="fab fa-wordpress"></i>
                    <h3>Flash Sale</h3>
                    <p>Berlaku Hingga 2.2.2023</p>
                    <button>Beli Sekarang</button>
                </div>
                <div class="card">
                    <i class="fas fa-palette"></i>
                    <h3>Flash Sale</h3>
                    <p>Berlaku Hingga 2.2.2023</p>
                    <button>Beli Sekarang</button>
                </div>
                <div class="card">
                    <i class="fab fa-app-store-ios"></i>
                    <h3>Flash Sale</h3>
                    <p>Berlaku Hingga 2.2.2023</p>
                    <button>Beli Sekarang</button>
                </div>
            </div>
            <section class="main-populer">
                <h1>Produk Terlaris</h1>
                <div class="populer-box">
                  <ul>
                    <button class="tablinks active" onclick="openProduct(event, 'Pakaian')">Pakaian</button>
                    <button class="tablinks" onclick="openProduct(event, 'Sepatu')">Sepatu</button>
                    <button class="tablinks" onclick="openProduct(event, 'Topi')">Topi</button>
                    <button class="tablinks" onclick="openProduct(event, 'Earphone')">Earphone</button>
                  </ul> 
                  <div class="tabcontent" id="Pakaian" style="display: flex;">
                  <div class="populer">
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Pakaian</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Pakaian</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Pakaian</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                  </div>
                </div>
                <div class="tabcontent" id="Sepatu">
                  <div class="populer">
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Sepatu</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Sepatu</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Sepatu</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                  </div>
                </div>
                <div class="tabcontent" id="Topi">
                  <div class="populer">
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Topi</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Topi</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Topi</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                  </div>
                </div>
                <div class="tabcontent" id="Earphone">
                  <div class="populer">
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Earphone</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Earphone</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>kategori</h3>
                        <p>Earphone</p>
                        <button>Telusuri</button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                  </div>
                </div>
                </div>
            </section>
        </section>
    </div>

    <script>
        function openProduct(evt, productName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(productName).style.display = "flex";
          evt.currentTarget.className += " active";
        }
</script>
</body>
</html>