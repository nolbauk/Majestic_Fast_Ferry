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
        <form>
          <h1>LOGIN</h1>
          <hr />
          <p>Please log in to continue</p>
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Username"
          />
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
          />
          <!-- Implementasi Event pada tombol Login -->
          <button
            type="button"
            onclick="submitLoginForm()"
            style="color: #ffa12c"
          >
            LOGIN
          </button>
          <p>
            <a href="register.html">REGISTRASI</a>
          </p>
        </form>
      </div>
      <div class="right">
        <img src="assets/majestic.png" alt="" class="logo" width="100%" />
      </div>
    </div>
    <script>
      function submitLoginForm() {
        // Mengambil nilai dari input username dan password
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        // validasi sederhana
        if (username === "admin" && password === "123") {
          alert("Login berhasil!"); // Menampilkan pesan jika login berhasil
          // Simpan informasi login ke localStorage
          localStorage.setItem("loggedIn", "true");
          // Alihkan pengguna ke halaman admin.html
          window.location.href = "admin.html";
        } else {
          alert("Login gagal. Periksa kembali username dan password Anda."); // Menampilkan pesan jika login gagal
        }
      }
    </script>
    <?php
    // Set cookie jika login berhasil
    if (isset($_GET['login']) && $_GET['login'] === 'success') {
        setcookie('loggedIn', 'true', time() + 5, '/');
    }
    ?>
  </body>
</html>