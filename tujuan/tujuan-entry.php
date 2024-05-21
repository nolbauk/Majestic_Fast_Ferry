<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<php lang="en" dir="ltr">	
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
	   <h3>Input Tujuan</h3>
	   <div class="form-login">
		<form action="tujuan-proses.php" method="post" enctype="multipart/form-data">
		   <label for="dari">From</label>
		   <input class="input" type="text" name="dari"
				id="dari"/>
		   <label for="destination">Destination</label>
		   <input class="input" type="text" name="destination"
				id="destination"/>
		   <label for="price">Price</label>
		   <input class="input" type="text" name="price"
				id="price"/>
		   <button type="submit" class="btn btn-simpan" 
                        name="simpan">
			      Simpan
		   </button>
		</form>
	   </div>
	</div>
   </section>
</body>
</php>
