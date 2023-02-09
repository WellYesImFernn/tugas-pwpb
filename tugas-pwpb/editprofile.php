<?php
include 'form/koneksi.php';
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: form/login.php');
}


  $query = mysqli_query($con, "SELECT * FROM users WHERE username = '".$_SESSION['username']."' ");
  $d = mysqli_fetch_object($query);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/profile.css">
<title>Edit Profil | WO</title>
</head>
<body>
<?php require 'nav/nav.php' ?>
<div id="profil" class="section">
  <div class="container">
    <h3>Profil</h3>
    <div class="box">
      <form action="" method="POST">
        <input type="text" name="name" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->name?>" required>
        <input type="text" name="username" placeholder="Username" class="input-control" value="<?php echo $d->username?>" required>
        <input type="text" name="email" placeholder="Email" class="input-control" value="<?php echo $d->email?>" required>
        <input type="text" name="notelp" placeholder="Nomor Telpon" class="input-control" value="<?php echo $d->no_hp?>" required>
        <input type="submit" name="submit" value="Ubah Profil" class="btn">
      </form>
      <?php
        if(isset($_POST['submit'])){

            $nama      = $_POST['name'];
            $username  = $_POST['username'];
            $email     = $_POST['email'];
            $notelp    = $_POST['notelp'];
            
            $update    = mysqli_query($con, "UPDATE users SET
                                name = '".$nama."',
                                username = '".$username."',
                                email = '".$email."',
                                no_hp = '".$notelp."' 
                                WHERE id = '".$d->id."' ");

            if($update){
                header('Location: profile.php');
            } else {
                echo 'Gagal' ,mysqli_error($con);
            }
        }

        ?>
    </div>
  </div>
  <a href="profile.php" class="btn">Kembali Ke Profil</a>
</div>
</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>