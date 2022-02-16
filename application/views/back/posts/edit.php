<div class="card">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <?php foreach($kategori as $k): ?>
                            <option value="<?php echo $k->id_kategori ?>" <?php echo $k->id_kategori  == $data->id_kategori  ? 'selected' : '' ?>><?php echo $k->nama_kategori ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control" value="<?= $data->title ?>">
                </div>
                <div class="form-group">
                    <label for="description">Deksripsi</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $data->description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="meta_keyword">Meta Keyword</label>
                    <input type="text" name="meta_keyword" class="form-control" value="<?= $data->meta_keyword ?>">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control"><?= $data->meta_description ?></textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image">
                    <label class="input-group-text" for="inputGroupFile02">Image Posts</label>
                </div>
                <div class="form-group">
                    <label for="alt_img">ALT IMG</label>
                    <input type="text" name="alt_img" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>
        </div>
    </form>
</div>