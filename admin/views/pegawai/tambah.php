<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=pegawai&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Pegawai</label>
            <input type="text" name="nama_dokter" required value="<?=(isset($_POST['nama_pegawai']))?$_POST['nama_pegawai']:'';?>" class="form-control">
            <input type="hidden" name="id_pegawai"  value="<?=(isset($_POST['id_pegawai']))?$_POST['id_pegawai']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama_pegawai']))?$err['nama_pegawai']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
            <input type="text" name="alamat" value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['alamat']))?$err['alamat']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Nomor Telfon</label>
            <input type="number" name="notelp_pegawai" value="<?=(isset($_POST['notelp_pegawai']))?$_POST['nptelp_pegawai']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['notelp_pegawai']))?$err['notelp_pegawai']:'';?></span>
        </div>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>