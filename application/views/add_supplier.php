            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Tambah Supplier</h4>
                                    <p class="card-category">Complete your profile</p>
                                </div>
                                <div class="card-body">
                                <form method="post" action="<?= base_url('welcome/create_data_supplier') ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Supplier</label>
                                                    <input type="text" name="nama_anggota" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Perusahaan</label>
                                                    <input type="text" name="nama_perusahaan" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Alamat</label>
                                                    <input type="text" name="alamat" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Tambah Supplier</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>