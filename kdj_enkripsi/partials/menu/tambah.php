<?php

use classes\Mahasiswa;

if (isset($_POST['addMahasiswa'])) {
    $MahasiswaAdd = new Mahasiswa($con);
    $MahasiswaAdd->nim = $_POST['nim'];
    $MahasiswaAdd->nama = $_POST['nama'];
    $MahasiswaAdd->tmp_lahir = $_POST['tmp_lahir'];
    $MahasiswaAdd->tgl_lahir = $_POST['tgl_lahir'];
    $MahasiswaAdd->alamat = $_POST['alamat'];
    $MahasiswaAdd->prodi = $_POST['prodi'];
    $res = $MahasiswaAdd->save('add');
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
    <div class="form-group col-lg-5">
    <div style="float: left;">    
    <label for="nim"><b>NIM</b></label>
    </div>
    <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim" id="nim"></div>
    <br>
    
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="nama"><b>Nama Lengkap </b></label>
    </div>
    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Mahasiswa" name="nama" id="nama"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="tmp_lahir"><b>Tempat Lahir</b></label>
    </div>
    <input type="text" class="form-control" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" id="tmp_lahir"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="tgl_lahir">Tanggal Lahir</label>
    </div>
    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="alamat">Alamat</label>
    </div>
    <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap" id="alamat" cols="20" rows="3"></textarea></div>
    <br>
    <div class="form-group col-lg-5">
    <div style="float: left;">
    <label for="prodi">Prodi</label>
    </div>
    <input type="text" class="form-control" placeholder="Masukkan Prodi" name="prodi" id="prodi"></div>
    <br>
    <button type="submit" name="addMahasiswa" class="btn btn-primary"><i class="fas fa-save"></i> Tambah Data</button> 
    <!-- <input type="submit"  name="addMahasiswa" value="Tambah" class="btn btn-primary"> -->
    <a href="/kdj_enkripsi" class="btn btn-dark" role="button" title="Kembali"><i class="fas fa-backspace"></i> Kembali</a>
</form>
</center>
<br>
<div class="container text-center">
    <strong>{} with ❤</strong> <b>by 3People</b>
</div>
<br>
</div>