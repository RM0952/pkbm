    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                        <div id="bg-sd" class="card-header" style="background-color : <?php echo $warnasd->row()->bg_color ?>; color:<?php echo $warnasd->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SD</h4>
                          <form action="<?php echo base_url() ?>backadmin/jalur/editColor" method="post">
                              <input type="hidden" name="jenjang" value="sd">
                            <input type="color" class="input-color" name="bg_color" value="<?php echo $warnasd->row()->bg_color ?>" id="bg-color-sd" onchange="return backgroundWarnaSd(this.value)">
                            <input type="color" class="input-color" name="font_color" value="<?php echo $warnasd->row()->font_color ?>" id="font-color-sd" onchange="return fontColorSd(this.value)">
                            <button type="submit" class="btn btn-success btn-sm" id="save-sd">simpan</button>
                          </form>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($sd->result() as $d): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $d->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$d->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-primary" id="addSD"  data-bs-toggle="modal" data-bs-target="#formSD">Tambah</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                        <div id="bg-smp" class="card-header" style="background-color : <?php echo $warnasmp->row()->bg_color ?>; color:<?php echo $warnasmp->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMP</h4>
                          <form action="<?php echo base_url() ?>backadmin/jalur/editColor" method="post">
                                <input type="hidden" name="jenjang" value="smp">
                                <input type="color" class="input-color" name="bg_color" value="<?php echo $warnasmp->row()->bg_color ?>" id="bg-color-smp" onchange="return backgroundWarnaSmp(this.value)">
                                <input type="color" class="input-color" name="font_color" value="<?php echo $warnasmp->row()->font_color ?>" id="font-color-smp" onchange="return fontColorSmp(this.value)">
                                <button type="submit" class="btn btn-success btn-sm" id="save-sd">simpan</button>
                          </form>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($smp->result() as $p): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $p->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$p->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item"><button type="button" class="btn btn-primary" id="addSMP">Tambah</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                        <div id="bg-sma" class="card-header" style="background-color : <?php echo $warnasma->row()->bg_color ?>; color:<?php echo $warnasma->row()->font_color ?>">
                            <p class="mb-0">Pendaftaran Online Jenjang</p>
                            <h4>Jalur SMA</h4>
                          <form action="<?php echo base_url() ?>backadmin/jalur/editColor" method="post">
                                <input type="hidden" name="jenjang" value="sma">
                            <input type="color" class="input-color" name="bg_color" value="<?php echo $warnasma->row()->bg_color ?>" id="bg-color-sma" onchange="return backgroundWarnaSma(this.value)">
                            <input type="color" class="input-color" name="font_color" value="<?php echo $warnasma->row()->font_color ?>" id="font-color-sma" onchange="return fontColorSma(this.value)">
                            <button type="submit" class="btn btn-success btn-sm" id="save-sd">simpan</button>
                          </form>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($sma->result() as $a): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $a->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$a->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item"><button type="button" class="btn btn-primary" id="addSMA">Tambah</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                        <div id="bg-smk" class="card-header" style="background-color : <?php echo $warnasmk->row()->bg_color ?>; color:<?php echo $warnasmk->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMK</h4>
                          <form action="<?php echo base_url() ?>backadmin/jalur/editColor" method="post">
                                <input type="hidden" name="jenjang" value="smk">
                            <input type="color" class="input-color" name="bg_color" value="<?php echo $warnasmk->row()->bg_color ?>" id="bg-color-smk" onchange="return backgroundWarnaSmk(this.value)">
                            <input type="color" class="input-color" name="font_color" value="<?php echo $warnasmk->row()->font_color ?>" id="font-color-smk" onchange="return fontColorSmk(this.value)">
                            <button type="submit" class="btn btn-success btn-sm" id="save-sd">simpan</button>
                          </form>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($smk->result() as $k): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $k->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$k->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item"><button type="button" class="btn btn-primary" id="addSMK">Tambah</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pedaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="sd">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSD" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSMP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="smp">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSMP" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSMK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="smk">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSMK" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSMA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="sma">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSMA" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function backgroundWarnaSd(value){
            return $('#bg-sd').css('background-color',value)
            // return alert('tes')
        }
        function fontColorSd(value){
            return $('#bg-sd').css('color',value)
            // return alert('tes')
        }
        function backgroundWarnaSmp(value){
            return $('#bg-smp').css('background-color',value)
            // return alert('tes')
        }
        function fontColorSmp(value){
            return $('#bg-smp').css('color',value)
            // return alert('tes')
        }
        function backgroundWarnaSma(value){
            return $('#bg-sma').css('background-color',value)
            // return alert('tes')
        }
        function fontColorSma(value){
            return $('#bg-sma').css('color',value)
            // return alert('tes')
        }
        function backgroundWarnaSmk(value){
            return $('#bg-smk').css('background-color',value)
            // return alert('tes')
        }
        function fontColorSmk(value){
            return $('#bg-smk').css('color',value)
            // return alert('tes')
        }
    </script>