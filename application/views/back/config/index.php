<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title Homepage</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $pengaturan->title ?>">
                        </div>
                        <div class="form-group">
                            <label for="text_nav">Teks Navbar</label>
                            <input type="text" name="text_nav" class="form-control" value="<?php echo $pengaturan->text_nav ?>">
                        </div>
                        <div class="form-group">
                            <label for="embed_lokasi">Embed Lokasi <span style="font-weight: 400; color:red">*Rubah width menjadi 100%</span></label>
                            <textarea name="embed_lokasi" id="embed_lokasi" class="form-control" cols="30" rows="10"><?php echo $pengaturan->embed_lokasi ?></textarea>
                            <!-- <input type="text" name="embed_lokasi" class="form-control" value=""> -->
                        </div>
                        <div class="form-group">
                            <label for="meta_keyword">Teks Navbar</label>
                            <input type="text" name="meta_keyword" class="form-control" value="<?php echo $pengaturan->meta_keyword ?>">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>  
                            <textarea class="form-control" name="meta_description" cols="5" rows="5"><?php echo $pengaturan->meta_description ?></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="logo" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Pilih Logo</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="icon" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Pilih Icon</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>