    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Data Slider</h1>
                        <a href="<?php echo base_url() ?>backadmin/slider/tambah" class="btn btn-info btn-sm">Tambah Slider</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>ALT IMG</td>
                                        <td>Gambar</td>
                                        <td colspan="2">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($slider as $d): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->alt_img ?></td>
                                        <td><img src="<?php echo base_url().'uploads/'.$d->img_name ?>" alt="" width="100"></td>
                                        <td><a href="<?php echo base_url().'backadmin/slider/edit/'.$d->id_slider ?>">Edit</a></td>
                                        <td><a href="<?php echo base_url().'backadmin/slider/hapus/'.$d->id_slider ?>">Hapus</a></td>
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