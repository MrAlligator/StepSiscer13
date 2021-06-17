            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Detail Supplier</h4>
                                    <p class="card-category">Complete your profile</p>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url('welcome/create_data_supplier') ?>">
                                    <input type="text" hidden="true" value="<?= $supplier['id_anggota']; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Supplier</label>
                                                    <input type="text" name="nama_anggota" class="form-control" value="<?= $supplier['nama_anggota']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Perusahaan</label>
                                                    <input type="text" name="nama_perusahaan" class="form-control" value="<?= $supplier['nama_perusahaan']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Alamat</label>
                                                    <input type="text" name="alamat" class="form-control" value="<?= $supplier['alamat']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn btn-danger" href="<?= base_url();?>welcome/delete_supplier/<?=$supplier['id_anggota']?>">DELETE</a>
                                        <button type="submit" class="btn btn-primary pull-right">EDIT</button>
                                        <a class="btn btn-warning" href="<?= base_url('welcome/supplier') ?>">KEMBALI</a>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>