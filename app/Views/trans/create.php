<?= $this->extend('admin/components/sidebar'); ?>
<?= $this->section('admin'); ?>  
<div class="container">     
    <div class="row">         
        <div class="col-8">             
            <h2 class="my-3 text-black">Tambah Data Transaksi</h2>             
            <form action="/transaction/save" method="post" enctype="multipart/form-data">                 
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="no_bukti_transaksi" class="col-sm-2 col-form-label text-black">No Bukti Transaksi</label>                     
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="no_bukti_transaksi" name="no_bukti_transaksi" required>                     
                    </div>
                </div>
                <div class="row mb-3">                     
                    <label for="no_polisi" class="col-sm-2 col-form-label text-black">No Polisi</label>                     
                    <div class="col-sm-7">                         
                        <input type="text" class="form-control" id="no_polisi" name="no_polisi" required>                     
                    </div>                 
                </div>                 
                <div class="row mb-3">                     
                    <label for="pemilik" class="col-sm-2 col-form-label text-black">Pemilik</label>                     
                    <div class="col-sm-7">                         
                        <input type="text" class="form-control" id="pemilik" name="pemilik" required>                     
                    </div>                 
                </div>                 
                <div class="row mb-3">                     
                    <label for="tanggal" class="col-sm-2 col-form-label text-black">Tanggal</label>                     
                    <div class="col-sm-7">                         
                        <input type="datetime-local" class="form-control" id="tanggal" name="tanggal">                     
                    </div>                 
                </div>                 
                <div class="row mb-3">                     
                    <label for="jenis_kendaraan" class="col-sm-2 col-form-label text-black">Jenis Kendaraan</label>                     
                    <div class="col-sm-7">                         
                        <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>                     
                    </div>                 
                </div>                 
                <div class="row mb-3">                     
                    <label for="tarif" class="col-sm-2 col-form-label text-black">Tarif</label>                     
                    <div class="col-sm-7">                         
                        <input type="number" class="form-control" id="tarif" name="tarif" required>                     
                    </div>                 
                </div>                 
                <div class="row mb-3">                     
                    <label for="status" class="col-sm-2 col-form-label text-black">Status</label>                     
                    <div class="col-sm-7">                         
                        <select class="form-select" name="status" id="status" required>                             
                            <option value="proses">Proses</option>                             
                            <option value="selesai">Selesai</option>                             
                            <option value="batal">Batal</option>                         
                        </select>                     
                    </div>                 
                </div>                 
                <button type="submit" class="btn btn-outline-primary">Tambah Data</button>             
            </form>         
        </div>     
    </div> 
</div>  
<?= $this->endSection(); ?>  
