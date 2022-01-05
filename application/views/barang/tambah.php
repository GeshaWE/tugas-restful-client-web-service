<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header bg-dark text-white">
                Form Tambah Data Barang
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                        <small class="form-text text-danger"><?= form_error('nama_barang') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga">
                        <small class="form-text text-danger"><?= form_error('harga') ?></small>
                    </div>
                    <button type="Submit" name="tambah" class="btn btn-success float-right">Tambah Data</button>
                    <a href="<?= base_url('barang'); ?>" class="btn btn-danger">Kembali</a>
                </form>
            </div>
            </div>
        

        </div>
    </div>

</div>