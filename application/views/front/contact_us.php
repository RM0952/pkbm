<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card py-3">
                <h1>Kontak Kami</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 offset-2 text-center">
                            <h4>Bila ada yang ingin ditanyakan seputar pendaftaran online, anda bisa menghubungi kontak kami dibawah ini</h4>
                            <br>
                            <?php foreach($kontak->result() as $k): ?>
                                <h5><?php echo $k->tipe.' : '.$k->kontak ?> </h5>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>