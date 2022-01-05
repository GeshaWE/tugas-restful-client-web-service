<div class="container">

    <?php if($this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <dv class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Barang<strong> Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </dv>
    </div>
    <?php endif ?>

    <div class="row">
        <div class="col-lg">
        <h3>Daftar Barang</h3>
        <?php if(empty($barang)) : ?>
            <div class="alert alert-danger" role="alert">
            Data yang anda cari tidak ditemukan!
            </div>
        <?php endif ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
                    <input type="text" class="form-control" placeholder="Cari Data Barang..." name="cari">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3 mb-2">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Data Barang</a> 
        </div>
    </div>

        <ul class="list-group">
            <?php foreach ( $barang as $brg ) : ?>
                <li class="list-group-item">
                    <?= $brg['nama_barang']; ?>
                    <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin anda ingin menghapus ini?');" >Hapus</a>
                    <a href="<?= base_url(); ?>barang/detail/<?= $brg['id']; ?>" class="badge badge-primary float-right">Informasi</a>
                    <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id']; ?>" class="badge badge-success float-right">Edit Data</a>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>

</div>

