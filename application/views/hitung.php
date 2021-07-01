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
                            
                            <h3 class="text-primary text-center">Berikan bobot setiap kriteria</h3>
                            <form action="<?= base_url('welcome/bobot_supplier') ?>" method="post">
                                <input type="text" name="nama_anggota" value="<?= $supplier['nama_anggota']; ?>" hidden="true">
                                <input type="text" name="id_anggota" value="<?= $supplier['id_anggota']; ?>" hidden="true">
                            
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

                        <div class="row input-group mb-3">
                            <div class="col-1 input-group-prepend">
                                <h2 class="input-group-text text-center">1.</h2>
                            </div>
                            <div class="col-8 input-group-prepend">
                                <label class="input-group-text">Kemampuan Manajemen</label>
                            </div>
                            <div class="col-3">
                                <select id="kriteria1" name="kriteria1" class="custom-select">
                                    <option selected>
                                        <?php if (isset($bobot_supplier1)) :
                                        echo $bobot_supplier1['bobot'];
                                        else :
                                            echo "Nilai";
                                        endif; ?>
                                    </option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    </select>
                            </div>
                        </div>

                        <div class="row input-group mb-3">
                            <div class="col-1 input-group-prepend">
                                <h2 class="input-group-text text-center">2.</h2>
                            </div>
                            <div class="col-8 input-group-prepend">
                                <label class="input-group-text">Harga</label>
                                    </div>
                                <div class="col-3">
                                    <select id="kriteria2" name="kriteria2"  class="custom-select">
                                        <option selected><?php if (isset($bobot_supplier2)) :
                                        echo $bobot_supplier2['bobot'];
                                        else :
                                            echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        
                        <div class="row input-group mb-3">
                            <div class="col-1 input-group-prepend">
                                <h2 class="input-group-text text-center">3.</h2>
                            </div>
                            <div class="col-8 input-group-prepend">
                                <label class="input-group-text">Kesadaran Lingkungan</label>
                                    </div>
                                <div class="col-3">
                                    <select id="kriteria3" name="kriteria3" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier3)) :
                                        echo $bobot_supplier3['bobot'];
                                        else :
                                            echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">4.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                <label class="input-group-text">Kinerja Pengiriman</label>
                                    </div>
                                <div class="col-3">
                                    <select id="kriteria4" name="kriteria4" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier4)) :
                                        echo $bobot_supplier4['bobot'];
                                        else :
                                            echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">5.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                    <label class="input-group-text">Pelayanan</label>
                                </div>
                                <div class="col-3">
                                    <select id="kriteria5" name="kriteria5" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier5)) :
                                        echo $bobot_supplier5['bobot'];
                                        else :
                                            echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">6.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                    <label class="input-group-text">Fleksibilitas</label>
                                </div>
                                <div class="col-3">
                                    <select id="kriteria6" name="kriteria6" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier6)) :
                                        echo $bobot_supplier6['bobot'];
                                        else :
                                        echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">7.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                    <label class="input-group-text">Kemampuan Teknis</label>
                                </div>
                                <div class="col-3">
                                    <select id="kriteria7" name="kriteria7" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier7)) :
                                        echo $bobot_supplier7['bobot'];
                                        else :
                                        echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">8.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                    <label class="input-group-text">Inovatif</label>
                                </div>
                                <div class="col-3">
                                    <select id="kriteria8" name="kriteria8" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier8)) :
                                        echo $bobot_supplier8['bobot'];
                                        else :
                                        echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">9.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                    <label class="input-group-text">Manajemen Pendekatan</label>
                                </div>
                                <div class="col-3">
                                    <select id="kriteria9" name="kriteria9" class="custom-select">
                                        <option selected>
                                        <?php if (isset($bobot_supplier9)) :
                                        echo $bobot_supplier9['bobot'];
                                        else :
                                        echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                                
                            <div class="row input-group mb-3">
                                <div class="col-1 input-group-prepend">
                                    <h2 class="input-group-text text-center">10.</h2>
                                </div>
                                <div class="col-8 input-group-prepend">
                                    <label class="input-group-text">Letak Geografis</label>
                                </div>
                                <div class="col-3">
                                    <select id="kriteria10" name="kriteria10" class="custom-select">
                                        <option selected>
                                        <?php 
                                        if (isset($bobot_supplier10)) :
                                        echo $bobot_supplier10['bobot'];
                                        else :
                                        echo "Nilai";
                                        endif; ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>  
                                <div class="card-footer">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>