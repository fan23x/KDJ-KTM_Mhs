<?php
@$id = $_GET['id'];

use classes\Mahasiswa;

$MahasiswaEditView = new Mahasiswa($con);
$MahasiswaEditView->id = $id;
$mahasiswa = $MahasiswaEditView->getMahasiswaById();

if (isset($_POST['editMahasiswa'])) {
    $MahasiswaEdit = new Mahasiswa($con);
    $MahasiswaEdit->id = $_POST['id'];
    $MahasiswaEdit->nim = $_POST['nim'];
    $MahasiswaEdit->nama = $_POST['nama'];
    $MahasiswaEdit->tmp_lahir = $_POST['tmp_lahir'];
    $MahasiswaEdit->tgl_lahir = $_POST['tgl_lahir'];
    $MahasiswaEdit->alamat = $_POST['alamat'];
    $MahasiswaEdit->prodi = $_POST['prodi'];
    $res = $MahasiswaEdit->save();
    if ($res == true) {
        header("Location: /kdj_enkripsi");
    }
}

?>

<div class="container">
<center><h1><b>ENKRIPSI </b>KTM Politeknik Tegal</h1></center>
	<hr>
    <br/><center>
<form action="" method="POST">
    
    <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="nim"><b>NIM</b></label>
    </div>
    <input type="text" class="form-control" name="nim" value="<?= $mahasiswa->nim ?>"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="nama"><b>Nama Lengkap</b></label>
    </div>
    <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa->nama ?>"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="tmp_lahir"><b>Tempat Lahir</b></label>
    </div>
    <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" value="<?= $mahasiswa->tmp_lahir ?>"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="tgl_lahir"><b>Tanggal Lahir</b></label>
    </div>
    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $mahasiswa->tgl_lahir ?>"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="alamat"><b>Alamat Lengkap</b></label>
    </div>
    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="3"><?= $mahasiswa->alamat ?></textarea></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="prodi"><b>Prodi</b></label>
    </div>
    <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $mahasiswa->prodi ?>"></div>
    <br>
    <button type="submit" name="editMahasiswa" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Data</button>
    <!-- <input type="submit" name="editMahasiswa" value="Edit Data" class="btn btn-primary"> -->
    <a href="/kdj_enkripsi" class="btn btn-dark" role="button" title="Kembali"><i class="fas fa-backspace"></i> Kembali</a>
</form>
</center>
<br>
<div class="container text-center">
    <strong>{} with ❤</strong> <b>by 3People</b>
</div>
<br>
</div>