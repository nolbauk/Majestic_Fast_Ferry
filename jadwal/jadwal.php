<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
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
          <a href="../jadwal/jadwal.php" class="active">
            <i class="bx bx-box"></i>
            <span class="links_name">Jadwal</span>
          </a>
        </li>
        <li>
          <a href="../tujuan/tujuan.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Tujuan</span>
          </a>
        </li>
        <li></li>
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
        <h3>Jadwal</h3>
        <button type="submit" class="btn btn-tambah">
          <a href="jadwal-entry.php">Tambah Data</a>
        </button>
        <button type="submit" class="btn btn-tambah">
          <a href="jadwal-report.php">Cetak Data</a>
        </button>
        <table class="table-data">
          <thead>
            <tr>
              <th style="width: 25%">From</th>
              <th style="width: 25%">Destination</th>
              <th style="width: 15%">SGP Time</th>
              <th style="width: 15%">IDN Time</th>
              <th style="width: 20%">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include '../connection.php';
              $sql = "SELECT * FROM tb_jadwal";
              $result = mysqli_query($koneksi, $sql);
              if (mysqli_num_rows($result) == 0) {
                echo "
                  <tr>
                    <td colspan='5' align='center'>Data Kosong</td>
                  </tr>
                ";
              }
              while ($data = mysqli_fetch_assoc($result)) {
                echo "
                  <tr>
                    <td>$data[dari]</td>
                    <td>$data[destination]</td>
                    <td>$data[sgp_time]</td>
                    <td>$data[idn_time]</td>
                    <td >
                      <a class='btn-edit' href=jadwal-edit.php?id_jadwal=$data[id_jadwal]>
                        Edit
                      </a> | 
                      <a class='btn-delete' href=jadwal-hapus.php?id_jadwal=$data[id_jadwal]>
                        Hapus
                      </a>
                    </td>
                  </tr>
                ";
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </body>
  <!-- <script>
    // popup boxes pada konfirmasi tombol hapus
    function hapusData() {
      let konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
      if (konfirmasi == true) {
        console.log("Data berhasil dihapus.");
        alert("Data berhasil dihapus!"); // menampilkan pesan sukses
      } else {
        console.log("Penghapusan data dibatalkan.");
      }
    }
  </script> -->
</html>
