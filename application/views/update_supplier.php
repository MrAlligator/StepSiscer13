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
                                    <form method="post" action="<?= base_url('welcome/edit_supplier') ?>">
                                    <input type="text" hidden="true" name="id_anggota" value="<?= $supplier['id_anggota']; ?>">
                                    <input type="text" hidden="true" name="nama_belum_ubah" value="<?= $supplier['nama_anggota']; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama Anggota</label>
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
                                        <!-- <a class="btn btn-danger" href="<?= base_url();?>welcome/delete_supplier/<?=$supplier['id_anggota']?>">DELETE</a> -->
                                        <button type="button" class="btn btn-danger pull-right"  data-toggle="modal" data-target="#yakinhapus">HAPUS</button>
                                        <button type="submit" class="btn btn-primary pull-right">EDIT</button>
                                        <a class="btn btn-warning" href="<?= base_url('welcome/supplier') ?>">KEMBALI</a>
                                        <div class="clearfix"></div>
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
        <!-- <a class="btn btn-primary" href="<?= base_url();?>welcome/delete_supplier/<?=$supplier['id_anggota']?>">YAKIN</a> -->
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