<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/majestic.png" />
    <link rel="stylesheet" href="css/admin.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Majestic Admin</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <img src="assets/majestic.png" alt="" width="60" />
        <span class="logo_name"> Majestic</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="jadwal/jadwal.php">
            <i class="bx bx-box"></i>
            <span class="links_name">Jadwal</span>
          </a>
        </li>
        <li>
          <a href="tujuan/tujuan.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Tujuan</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
        </div>
        <div class="profile-details">
          <a href="logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Logout</span>
          </a>
        </div>
      </nav>
      <div class="home-content">
        <h1>Welcome to the unknown</h1>
      </div>
    </section>
  </body>
</html>