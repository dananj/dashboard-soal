<?php
include "pegawai.php";

$pegawai = new Pegawai();


if ($_GET['proses'] == "delete")
{

    $id = $_GET['id'];

    if ($pegawai->deleteDataHotel($id) > 0)
    {
        echo "
        <script>alert('Data Berhasil dihapus');
        document.location.href='../index.php?page=list_hotel';
        </script>";
    }
    else
    {
        echo "<script>
				alert('Data Gagal Dihapus !');
				document.location.href='../index.php?page=list_hotel';
      </script>";

    }

}


