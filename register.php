<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="assets/majestic.png" />
    <title>Daftar</title>
  </head>
  <body>
    <div class="container">
      <div class="login">
        <form action="register-proses.php" method="post">
          <h1>SIGN UP</h1>
          <hr />
          <p>
            <label for="username">Username</label>
            <input class="input" type="username" name="username" placeholder="Username" />
            <label for="email">Email</label>
            <input class="input" type="email" name="email" placeholder="Email" />
            <label for="password">Password</label>
            <input class="input" type="password" name="password" placeholder="Password" />
            <button style="color: #ffa12c" type="submit" class="btn-register" name="register" id="register">FINISH</button>
          </p>
        </form>
        <p>
          <a href="index.html">Go back home</a>
        </p>
      </div>
      <div class="right">
        <img src="assets/majestic.png" class="logo" />
      </div>
    </div>
  </body>
</html>
