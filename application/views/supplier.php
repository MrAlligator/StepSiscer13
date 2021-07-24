<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
    $('#table_supplier').DataTable();
    } );
</script>

            <div class="content">
                <div class="container-fluid">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h2 class="card-title text-center"><strong>DATA SUPPLIER</strong></h2>
                                    <?php
                                    if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) :
                                    ?>
                                    <a class="text-center text-light" href="<?= base_url()?>welcome/add_supplier">
                                    <button class="btn btn-success"><i class="material-icons">person add</i> Tambah Supplier</button><a>
                                    <?php 
                                    endif;
                                    ?>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table_supplier" class="display table-striped" style="width:100%">
                                            <thead class="text-primary">
                                                <th>No</th>
                                                <th>Id Anggota</th>
                                                <th>Nama</th>
                                                <th>Perusahaan</th>
                                                <th>Alamat</th>
                                                <th>Perintah</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($supplier as $sup) :
                                                ?>
                                                    <tr>
                                                        <td><?= $no++;?>.</td>
                                                        <td><?= $sup->id_anggota?></td>
                                                        <td><?= $sup->nama_anggota ?></td>
                                                        <td><?= $sup->nama_perusahaan ?></td>
                                                        <td><?= $sup->alamat ?></td>
                                                        <td>
                                                            <a class="btn btn-success" href="<?= base_url('welcome/update_supplier/'.$sup->id_anggota) ?>">DETAIL</a>
                                                        </td>
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