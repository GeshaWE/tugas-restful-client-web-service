<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header bg-dark text-white">
                Form Edit Data Barang
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id" value="<?= $barang['id']; ?>">
                        <small class="form-text text-danger"><?= form_error('id') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?= $barang['nama_barang']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_barang') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="<?= $barang['harga']; ?>">
                        <small class="form-text text-danger"><?= form_error('harga') ?></small>
                    </div>
                    <button type="Submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                    <a href="<?= base_url('barang'); ?>" class="btn btn-dark">Kembali</a>
                </form>
            </div>
            </div>
        

        </div>
    </div>

</div>