<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
               
            <div class="card">
                <h5 class="card-header bg-dark text-white">Info Data Barang</h5>
                <div class="card-body">
                    <h5 class="card-title"> ID : <?= $barang['id']; ?></h5>
                    <p class="card-text"> Nama Barang : <?= $barang['nama_barang']; ?></p>
                    <p class="card-text"> Harga : <?= $barang['harga']; ?></p>
                    <a href="<?= base_url('barang'); ?>" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>