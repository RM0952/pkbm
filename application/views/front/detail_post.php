<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h1><?php echo $detail_post->row()->title ?></h1>
                <hr>
                    <img src="<?php echo base_url().'uploads/'.$detail_post->row()->image; ?>" alt="" class="w-100">
                     <hr>
                <?php echo $detail_post->row()->description ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-kontak text-white">Info & Kontak</div>
                        <div class="card-body">
                            <ul>
                                <?php foreach($kontak->result() as $r): ?>
                                    <li><a href="#" style="text-decoration:none"><?= $r->tipe.' - '.$r->kontak ?></a></li>
                                    <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-kontak text-white">
                            Peta Sekolah
                        </div>
                        <div class="card-body">
                        <?php echo $embed_lokasi ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
