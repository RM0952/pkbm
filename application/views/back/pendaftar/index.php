    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Data Pendaftar</h1>
                        <a href="<?php echo base_url() ?>backadmin/pendaftar/tambah" class="btn btn-info btn-sm">Tambah Pendaftar</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>NIS</td>
                                        <td>NISN</td>
                                        <td>Nama</td>
                                        <td>Tempat Lahir</td>
                                        <td>Tanggal Lahir</td>
                                        <td>Jenis Kelamin</td>
                                        <td>NIK</td>
                                        <td>Agama</td>
                                        <td>Nama Ibu</td>
                                        <td>Nama Ayah</td>
                                        <td>No HP</td>
                                        <td>No WA</td>
                                        <td>Alamat</td>
                                        <td colspan="2">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($pendaftar as $d): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->nis ?></td>
                                        <td><?php echo $d->nisn ?></td>
                                        <td><?php echo $d->nama ?></td>
                                        <td><?php echo $d->tempat_lahir ?></td>
                                        <td><?php echo $d->tanggal_lahir ?></td>
                                        <td><?php echo $d->jk ?></td>
                                        <td><?php echo $d->nik ?></td>
                                        <td><?php echo $d->agama ?></td>
                                        <td><?php echo $d->nama_ibu ?></td>
                                        <td><?php echo $d->nama_ayah ?></td>
                                        <td><?php echo $d->no_hp ?></td>
                                        <td><?php echo $d->no_wa ?></td>
                                        <td><?php echo $d->alamat ?></td>
                                        <td><a href="<?php echo base_url().'backadmin/pendaftar/edit/'.$d->id_pendaftar ?>">Edit</a></td>
                                        <td><a href="<?php echo base_url().'backadmin/pendaftar/hapus/'.$d->id_pendaftar ?>">Hapus</a></td>
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