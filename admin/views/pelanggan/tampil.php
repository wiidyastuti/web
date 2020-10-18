<div class="row">
    <div class="pull-left">
        <h4>Daftar Pelanggan</h4>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>ID Pelanggan</td><td>Nama</td><td>Alamat</td>
            </tr>
        </thead>
        <tbody>
            <?php if($pelanggan != NULL){ 
                $no=1;
                foreach($pelanggan as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['id_pelanggan']?></td><td><?=$row['nama_pelanggan'];?></td><td><?=$row['alamat_pelanggan']?></td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>