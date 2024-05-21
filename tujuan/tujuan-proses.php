<?php 
include '../connection.php';
if(isset($_POST['simpan'])) {
    $dari = $_POST['dari'];
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    
    var_dump($dari, $destination, $price);
    $sql = "INSERT INTO tb_tujuan VALUES (NULL, '$dari', '$destination', $price)";
    echo $sql;

    if(empty($dari) || empty($destination)|| empty($price)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'tujuan-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Tujuan Berhasil Ditambahkan');
                window.location = 'tujuan.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'tujuan-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $dari = $_POST['dari'];
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    $id_tujuan = $_POST['id_tujuan'];

    $sql = "UPDATE tb_tujuan SET 
            dari = '$dari',
            destination = '$destination',
            price = '$price'
            WHERE id_tujuan = $id_tujuan
            ";

            var_dump($sql); 

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Tujuan Berhasil Diubah');
                window.location = 'tujuan.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'tujuan-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id_tujuan = $_POST['id_tujuan'];    

    $sql = "DELETE FROM tb_tujuan WHERE id_tujuan = $id_tujuan";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Tujuan Berhasil Dihapus');
                window.location = 'tujuan.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Tujuan Gagal Dihapus');
                window.location = 'tujuan.php';
            </script>
        ";
    }
}else {
    header('location: tujuan.php');
}