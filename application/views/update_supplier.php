            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Detail Supplier</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?= base_url('welcome/edit_supplier') ?>">
                                        <input type="text" hidden="true" name="id_anggota" value="<?= $supplier['id_anggota']; ?>">
                                        <input type="text" hidden="true" name="nama_belum_ubah" value="<?= $supplier['nama_anggota']; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Anggota</label>
                                                    <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) : ?>
                                                        <input type="text" name="nama_anggota" class="form-control" value="<?= $supplier['nama_anggota']; ?>">
                                                    <?php else : ?>
                                                        <input type="text" name="nama_anggota" class="form-control" value="<?= $supplier['nama_anggota']; ?>" readonly>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Perusahaan</label>
                                                    <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) : ?>
                                                        <input type="text" name="nama_perusahaan" class="form-control" value="<?= $supplier['nama_perusahaan']; ?>">
                                                    <?php else : ?>
                                                        <input type="text" name="nama_perusahaan" class="form-control" value="<?= $supplier['nama_perusahaan']; ?>" readonly>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Alamat</label>
                                                    <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) : ?>
                                                        <input type="text" name="alamat" class="form-control" value="<?= $supplier['alamat']; ?>">
                                                    <?php else : ?>
                                                        <input type="text" name="alamat" class="form-control" value="<?= $supplier['alamat']; ?>" readonly>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) : ?>
                                            <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#yakinhapus">HAPUS</button>
                                            <button type="submit" class="btn btn-primary pull-right">EDIT</button>
                                            <a class="btn btn-success pull-right" href="<?= base_url() ?>welcome/hitung/<?= $supplier['id_anggota'] ?>">BOBOT</a>
                                            <a class="btn btn-warning" href="<?= base_url('welcome/supplier') ?>">KEMBALI</a>
                                            <div class="clearfix"></div>
                                        <?php else : ?>
                                            <a class="btn btn-warning pull-right" href="<?= base_url('welcome/supplier') ?>">KEMBALI</a>
                                        <?php endif; ?>
                                    </form>
                                    <div class="modal" id="yakinhapus" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Menghapus Supplier</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="<?= base_url('welcome/delete_supplier') ?>">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin menghapus <?= $supplier['nama_anggota']; ?> </p>
                                                        <input type="text" hidden="true" name="id_anggota" value="<?= $supplier['id_anggota']; ?>">
                                                        <input type="text" hidden="true" name="nama_belum_ubah" value="<?= $supplier['nama_anggota']; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <a class="btn btn-primary" href="<?= base_url(); ?>welcome/delete_supplier/<?= $supplier['id_anggota'] ?>">YAKIN</a> -->
                                                        <button type="submit" class="btn btn-primary">Yakin</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>