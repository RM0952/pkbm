    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Posts</h1>
                        <a href="<?php echo base_url() ?>backadmin/posts/tambah" class="btn btn-info btn-sm">Tambah Posts</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Judul</td>
                                        <td>Description</td>
                                        <td>Gambar</td>
                                        <td colspan="2">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($posts as $d): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->title ?></td>
                                        <td><?php echo word_limiter($d->description,20) ?></td>
                                        <td><img class="w-100" src="<?php echo base_url().'uploads/'.$d->image ?>" alt=""></td>
                                        <td><a href="<?php echo base_url().'backadmin/posts/edit/'.$d->id_posts ?>">Edit</a></td>
                                        <td><a href="<?php echo base_url().'backadmin/posts/hapus/'.$d->id_posts ?>">Hapus</a></td>
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