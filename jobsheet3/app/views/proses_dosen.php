<?php
    include '../classes/database.php';
    $db=new database ();

    $aksi= $_GET['aksi'];
    if ($aksi=="tambah_dosen") {
        $db->tambah_dosen($_POST['nip'],$_POST['nama'],$_POST['alamat']); // post = array asosiatif
        header("location:tampil_dosen.php");
    }
    else if($aksi=="update_dosen"){
        $db->update_dosen($_POST['id'], $_POST['nip'], $_POST['nama'], $_POST['alamat']);
        header ("location:tampil_dosen.php");
    }
    else if ($aksi=="hapus_dosen") {
        $db->hapus_dosen($_GET['id']);
        header ("location:tampil_dosen.php");
    }
?>