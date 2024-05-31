<?php 
  session_start();
  if ($_SESSION['username'] == null) {
      header('location:login.php');
      exit();
  }

  include('connection.php');
  $resulttujuan = mysqli_query($koneksi, "SELECT COUNT(*) AS totaltujuan FROM tb_tujuan");
  $datatujuan = mysqli_fetch_assoc($resulttujuan);
  $totalTujuan = $datatujuan['totaltujuan'];
  $resultjadwal = mysqli_query($koneksi, "SELECT COUNT(*) AS totaljadwal FROM tb_jadwal");
  $datajadwal = mysqli_fetch_assoc($resultjadwal);
  $totalJadwal = $datajadwal['totaljadwal'];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/majestic.png" />
    <link rel="stylesheet" href="css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Majestic Admin</title>
    <style>
      /* Widget Styles */
      .widget {
          background-color: #4a90e2;
          color: white;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: center;
          margin: 20px 0;
          transition: transform 0.3s;
      }

      .widget:hover {
          transform: translateY(-5px);
      }

      .widget h3 {
          margin: 0;
          font-size: 24px;
          font-weight: 500;
      }

      .widget p {
          margin: 10px 0 0;
          font-size: 20px;
          font-weight: bold;
      }
    </style>
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
            <div class="widget">
                <h3>Total Data Tujuan</h3>
                <p><?php echo $totalTujuan; ?></p>
            </div>
            <div class="widget">
                <h3>Total Data Jadwal</h3>
                <p><?php echo $totalJadwal; ?></p>
            </div>
        </div>
    </section>
</body>
</html>
