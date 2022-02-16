    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Data Kontak</h1>
                        <a href="<?php echo base_url() ?>backadmin/kontak/tambah" class="btn btn-info btn-sm">Tambah Kontak</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Tipe</td>
                                        <td>Kontak</td>
                                        <td colspan="2">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($kontak as $d): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->tipe ?></td>
                                        <td><?php echo $d->kontak ?></td>
                                        <td><a href="<?php echo base_url().'backadmin/kontak/edit/'.$d->id_kontak ?>">Edit</a></td>
                                        <td><a href="<?php echo base_url().'backadmin/kontak/hapus/'.$d->id_kontak ?>">Hapus</a></td>
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