            <div class="content">
                <div class="container-fluid">
                    <div class="card col-lg-8">
                        <div class="card-header card-header-primary">
                        <h2 class="card-title text-center"><strong>BOBOT SUPPLIER</strong></h2>
                        </div>
                        
                        <div class="card-body">

                            <li class="list-group-item">
                            <div class="row">
                                <div class="col-3"><h6 class="text-primary">   Anggota</h6></div>
                                <div class="col"><h6>: <?= $supplier['nama_anggota']; ?></h6></div>
                            </div>
                            <div class="row">
                                <div class="col-3"><h6 class="text-primary">Perusahaan</h6></div>
                                <div class="col"><h6>: <?= $supplier['nama_perusahaan']; ?></h6></div>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            
                            <h3 class="text-primary text-center">Berikan bobot setiap kriteria</h3>                            
                            
                        <div class="row input-group mb-3">
                            <div class="col-1 input-group-prepend">
                                <h2 class="input-group-text text-primary text-center">NO</h2>
                            </div>
                            <div class="col-8 input-group-prepend">
                                <h2 class="input-group-text text-primary text-center">KRITERIA</h2>
                            </div>
                            <div class="col-3">
                                <h2 class="input-group-text text-primary text-center">BOBOT</h2>
                            </div>
                        </div>

                        <form action="<?= base_url('welcome/input_bobot') ?>" method="post">
                        <input type="text" name="id_anggota" value="<?= $supplier['id_anggota']; ?>" hidden="true">
                        <div class="row input-group mb-3">
                            <?php $no =1 ;foreach ($kriteria as $crit) :?>
                            <div class="col-1 input-group-prepend">
                                <h2 class="input-group-text text-center"><?=$no?>.</h2>
                            </div>
                            <div class="col-8 input-group-prepend">
                                <label class="input-group-text"><?=$crit->kriteria?></label>
                            </div>
                            <div class="col-3">
                                <select name="k<?=$no?>" class="custom-select">
                                    <option selected>
                                        <?php if(isset($bobot_supplier)){?>
                                            <?=$bobot_supplier['k'.$no]?>
                                        <?php }else{ ?>
                                            Bobot
                                        <?php } ?> 
                                    </option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    </select>
                            </div>
                            <?php $no++; endforeach; ?>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary">PROSES</button>
                        <button type="reset" id="reset" class="btn btn-danger pull-right">BATAL</button>
                        <a class="btn btn-warning pull-right" href="<?= base_url('welcome/update_supplier/'.$supplier['id_anggota']) ?>">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
