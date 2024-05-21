<?php
  include '../connection.php';
  $id_tujuan = $_GET['id_tujuan'];
  if(!isset($_GET['id_tujuan'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'tujuan.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_tujuan WHERE id_tujuan = '$id_tujuan'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="icon" href="../assets/majestic.png" />
   <title>Majestic Admin</title>
</head>
<body>
<div class="sidebar">
	<div class="logo-details">
		<img src="../assets/majestic.png" alt="" width="60" />
		<span class="logo_name"> Majestic</span>
	</div>
	<ul class="nav-links">
	   <li>
		<a href="../admin.php">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="../jadwal/jadwal.php">
		   <i class="bx bx-box"></i>
		   <span class="links_name">Jadwal</span>
		</a>
	   </li>
	   <li>
		<a href="../tujuan/tujuan.php" class="active">
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
			<a href="../logout.php">
				<i class="bx bx-log-out"></i>
				<span class="links_name">Logout</span>
			</a>
		</div>
	</nav>
	<div class="home-content">
	   <h3>Hapus Tujuan</h3>
         <div class="form-login">
            <h4>Apakah Anda Yakin Ingin Menghapus Data?</h4>
            <form
              action="tujuan-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
              <input type="hidden" name="id_tujuan" value="<?= $data['id_tujuan'] ?>">
              <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">
			Yes
		  </button>
		  <button type="submit" class="btn" name="tidak">
			No
		  </button>
            </form>
          </div>
	</div>
   </section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
	   sidebar.classList.toggle("active");
	   if (sidebar.classList.contains("active")) {
		sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
	   } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	   };
   </script>
</body>
</html>
