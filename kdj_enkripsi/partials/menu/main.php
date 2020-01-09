<!-- Ini menu Main -->
<?php

use classes\Mahasiswa;

$mahasiswas = $Mahasiswa->getAllMahasiswa();

if (@$_GET['aksi'] == 'hapus' && isset($_GET['id'])) {
    $MahasiswaDelete = new Mahasiswa($con);
    $MahasiswaDelete->id = $_GET['id'];
    $res = $MahasiswaDelete->delete();
    if ($res == true) {
        header("Location: /kdj_enkripsi");
    }
}

?>
<div class="container">
<center><h1><b>ENKRIPSI </b>KTM Politeknik Tegal</h1></center>
	<hr>
    <br/><br/>
    <div class="box-header">
          <a href="?menu=tambah" class="btn btn-success" role="button" title="Tambah Data"><i class="fas fa-plus"></i> TAMBAH DATA</a>
          </div><br>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <th><center>No</center></th>
        <th><center>NIM</center></th>
        <th><center>Nama Lengkap</center></th>
        <th><center>Tempat Lahir</center></th>
        <th><center>Tanggal Lahir</center></th>
        <th><center>Alamat</center></th>
        <th><center>Prodi</center></th>
        <th><center>Aksi</center></th>
    </thead>
    <tbody>
        <?php $i = 0;
        foreach ($mahasiswas as $mahasiswa) : ?>
            <tr>
                <td><?= $i -= -1 ?></td>
                <td><?= $mahasiswa->nim ?></td>
                <td><?= $mahasiswa->nama ?></td>
                <td><?= $mahasiswa->tmp_lahir ?></td>
                <td><?= $mahasiswa->tgl_lahir ?></td>
                <td><?= $mahasiswa->alamat ?></td>
                <td><?= $mahasiswa->prodi ?></td>
                <td>
                <a href="?menu=edit&id=<?= $mahasiswa->id ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><b><i class="fas fa-edit"></i></b></a>
                <a href="?aksi=hapus&id=<?= $mahasiswa->id ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"><b><i class="fas fa-user-minus"></i></b></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="container text-center">
    <strong>{} with ❤</strong> <b>by 3People</b>
</div>
</div>