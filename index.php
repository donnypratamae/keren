<?php 
  session_start();
  $pesan=isset($_SESSION['error'])?$_SESSION['error']:NULL;
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.svg" /> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
  </script>
  <script src="assets/js/bootstrap.bundle.min.js">
  </script> 
  <title>LMS-STMIK_WP</title>
</head>   

<body >
  <div class="container alert-primary mt-5 p-5 rounded">
        <h2>Login</h2>
        <?php if($pesan !== NULL ||$pesan!=''){?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>ERROR:</strong><?=$pesan;?>
          </div>
          <?php }?>
      <p>Silahkan masukkan username dan password:</p>
      <form action="controllers/login.php" method="POST">
        <div class="form group">
          <label for="usr">Name: </label>
          <input type="text" class="form-control" id="usr" name="usr"   placeholder="username">
        </div>
        <div class="form group">
          <label for="pwd">password: </label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
        </div>
        <button type="submit" class="btn-primary btn mt-2 ">Log in</button>
      </form>
    </div >
  </div>
  <p class="text-center mt-3">Hakim Firman Febrian / 20.230.0063</p>
</body>
</html>