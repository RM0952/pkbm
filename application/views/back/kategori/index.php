    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Kategori</h1>
                        <a href="<?php echo base_url() ?>backadmin/kategori/tambah" class="btn btn-info btn-sm">Tambah Kategori</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Kategori</td>
                                        <td colspan="2">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($kategori as $d): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->nama_kategori ?></td>
                                        <td><a href="<?php echo base_url().'backadmin/kategori/edit/'.$d->id_kategori ?>">Edit</a></td>
                                        <td><a href="<?php echo base_url().'backadmin/kategori/hapus/'.$d->id_kategori ?>">Hapus</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>