<?php

include 'config/app.php';

// Menerima ID barang dari URL
$id_barang = (int)$_GET['id_barang'];

// Menghapus data barang
if (delete_barang($id_barang) > 0) {
    echo "<script>
        alert('Data Barang Berhasil Dihapus');
        document.location.href = 'index2.php';
    </script>";
} else {
    echo "<script>
        alert('Data Barang Gagal Dihapus');
        document.location.href = 'index2.php';
    </script>";
}
?>