<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="assets/majestic.png" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="container">
      <div class="login">
        <form action="login-proses.php" method="post">
          <h1>LOGIN</h1>
          <hr />
          <p>Please log in to continue</p>
          <label for="username">Username</label>
          <input class="input" type="text" name="username" placeholder="Username" />
          <label for="password">Password</label>
          <input class="input" type="password" name="password" placeholder="Password" />
          <!-- Implementasi Event pada tombol Login -->
          <button
            type="submit"
            onclick="submitLoginForm()"
            style="color: #ffa12c"
            class="btn_login" 
            name="login"  
            id="login"
          >
            LOGIN
          </button>
          <p>
            <a href="register.php">REGISTRASI</a>
          </p>
        </form>
      </div>
      <div class="right">
        <img src="assets/majestic.png" alt="" class="logo" width="100%" />
      </div>
    </div>
    <?php
    // Set cookie jika login berhasil
    if (isset($_GET['login']) && $_GET['login'] === 'success') {
        setcookie('loggedIn', 'true', time() + 5, '/');
    }
    ?>
  </body>
</html>
