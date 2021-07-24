<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
    $('#table_admin').DataTable();
    } );
</script>

<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
                    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <h2 class="card-title text-center"><strong>DATA ADMIN</strong></h2>
                        <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) :  ?>
                        <a class="text-center text-light" href="#addAdmin" data-toggle="modal">
                        <button class="btn btn-success"><i class="material-icons">person add</i> Tambah Admin</button><a>
                        <?php endif; ?>
                    </div>
                        
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_admin" class="display table-striped" style="width:100%">
                                <thead class="text-primary">
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Perintah</th>
                                </thead>
                                <tbody>
                                <?php $no = 1; foreach ($admin as $adm) :?>
                                    <tr>
                                        <td><?= $adm->id_user?></td>
                                        <td><?= $adm->name ?></td>
                                        <td><?= $adm->email ?></td>
                                        <td><img src='<?=base_url('')?>/assets/img/user/<?=$adm->foto_user?>' width='70' height='70'/> </td>
                                        <td><a class="btn btn-danger" data-toggle="modal" href=#hapus<?= $adm->id_user?>>HAPUS</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal" id="addAdmin" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            <form method="post" action="<?= base_url('auth/add_admin') ?>">
                <div class="modal-body">
                    <div class="row input-group mb-3">
                    <div class="col-1"><i class="material-icons">badge</i></div>
                    <div class="col">
                        <input type="text" class="form-control" id="email" name="name" aria-describedby="emailHelp" placeholder="Nama ...">
                    </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-1"><i class="material-icons">email</i></div>
                        <div class="col">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email ...">
                        </div>
                    </div>
                    <div class="row input-group mb-3"><div class="col">
                    <i class="material-icons">notifications</i> Default Password : admin
                    </div></div>
                </div>
            
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-success">Tambah</button>
            </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
    </div>
</div>
</div>

<?php foreach ($admin as $adm) :?>
<div class="modal" id="hapus<?=$adm->id_user?>" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            <form method="post" action="<?= base_url('auth/delete_admin') ?>">
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus <?= $adm->name; ?> </p>
                    <input type="text" hidden name="id_user" value="<?= $adm->id_user; ?>">
                    <input type="text" hidden name="name" value="<?= $adm->name; ?>">
                </div>
            
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-success">Yakin</button>
            </form>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
    </div>
</div>
</div>
<?php endforeach; ?>