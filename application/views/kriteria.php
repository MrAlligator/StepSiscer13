<div class="content">
    <div class="container-fluid">
                    <div class="card col-lg-8">
                        <div class="card-header card-header-primary">
                        <h2 class="card-title text-center"><strong>BOBOT KRITERIA</strong></h2>
                        <p class="card-category">Masukkan bobot setiap kriteria dengan nilai 1 hingga 5 dengan catatan :</p>
                        <p class="card-category">Semakin tinggi nilai bobot semakin tinggi tingkat prioritasnya</p>
                        </div>
                        
                        <div class="card-body">
                            <div class="row input-group mb-3r">
                            </div>

                        <div class="row input-group mb-3">
                            <div class="col-1 input-group-prepend">
                                <h2 class="input-group-text text-primary text-center">NO</h2>
                            </div>
                            <div class="col-8 input-group-prepend">
                                <h2 class="input-group-text text-primary text-center">KRITERIA</h2>
                            </div>
                            <div class="col-3 input-group-prepend">
                                <h2 class="input-group-text text-primary text-center">BOBOT</h2>
                            </div>
                        </div>
                        
                        <form method="post" action="<?= base_url('welcome/skor') ?>">
                        <?= $this->session->flashdata('message'); ?>
                            <div class="row input-group mb-3">
                                <?php $i = 1; foreach($kriteria as $crit):?>
                            <div class="col-1 input-group-prepend">
                                <label class="input-group-text"><?=$i?></label>
                                <input class="input-group-text" name="id<?=$i?>"hidden="true" value="<?=$i?>">
                            </div>
                            <div class="col-7 input-group-prepend">
                                <label class="input-group-text"><?=$crit->kriteria?></label>
                                
                            </div>
                            <div class="col-3">
                                <select id="bobot" name="bobot<?=$i?>" class="custom-select">
                                    <option selected>
                                    <?php if(isset($crit->bobot)){ echo $crit->bobot; }else{ echo "Bobot"; } ?> 
                                    </option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        <div class="col-1">
                            <a href="#krit<?=$i++?>" data-toggle="modal"><i class="material-icons">error outline</i></a>
                        </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">PROSES</button>
                        <button type="reset" id="reset" class="btn btn-danger pull-right">BATAL</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
</div>

<?php $i = 1; foreach($kriteria as $crit):?>
<div class="modal" id="krit<?=$i++?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?=$crit->kriteria?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?=$crit->kriteria?> atau <?=$crit->rincian?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>