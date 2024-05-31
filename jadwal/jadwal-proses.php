<?php 
include '../connection.php';
if(isset($_POST['simpan'])) {
    $dari = $_POST['dari'];
    $destination = $_POST['destination'];
    $sgp_time = $_POST['sgp_time'];
    $idn_time = $_POST['idn_time'];
    
    var_dump($dari, $destination, $sgp_time, $idn_time);
    $sql = "INSERT INTO tb_jadwal VALUES (NULL, '$dari', '$destination', '$sgp_time', '$idn_time')";
    echo $sql;

    if(empty($dari) || empty($destination)|| empty($sgp_time) || empty($idn_time)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'jadwal-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Jadwal Berhasil Ditambahkan');
                window.location = 'jadwal.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'jadwal-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $dari = $_POST['dari'];
    $destination = $_POST['destination'];
    $sgp_time = $_POST['sgp_time'];
    $idn_time = $_POST['idn_time'];
    $id_jadwal = $_POST['id_jadwal'];

    $sql = "UPDATE tb_jadwal SET 
            dari = '$dari',
            destination = '$destination',
            sgp_time = '$sgp_time',
            idn_time = '$idn_time'
            WHERE id_jadwal = $id_jadwal
            ";

            var_dump($sql); 

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Jadwal Berhasil Diubah');
                window.location = 'jadwal.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'jadwal-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id_jadwal = $_POST['id_jadwal'];    

    $sql = "DELETE FROM tb_jadwal WHERE id_jadwal = $id_jadwal";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Jadwal Berhasil Dihapus');
                window.location = 'jadwal.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Jadwal Gagal Dihapus');
                window.location = 'jadwal.php';
            </script>
        ";
    }
}else {
    header('location: jadwal.php');
}