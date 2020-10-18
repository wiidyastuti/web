<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=pegawai&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Pegawai</label>
            <input type="text" name="nama" required value="<?=(isset($_POST['nama']))?$_POST['nama']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama']))?$err['nama']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Email</label>
            <input type="email" name="email" value="<?=(isset($_POST['email']))?$_POST['email']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['email']))?$err['email']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
            <input type="text" name="alamat" value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['alamat']))?$err['alamat']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Nomor Telfon</label>
            <input type="number" name="notelp" value="<?=(isset($_POST['notelp']))?$_POST['notelp']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['notelp']))?$err['notelp']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Jabatan</label>
            <input type="text" name="jabatan" value="<?=(isset($_POST['jabatan']))?$_POST['jabatan']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['jabatan']))?$err['jabatan']:'';?></span>
        </div>
    </div>
    <div class="form-group">
            <button type="submit" name="add" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>