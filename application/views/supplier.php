            <div class="content">
                <div class="container-fluid">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) : ?>
                                        <h4 class="card-title pull-right">Tabel Supplier</h4>
                                        <a class="btn btn-success" href="<?= base_url('welcome/add_supplier') ?>">Tambah Supplier</a>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Id Anggota
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    Perusahaan
                                                </th>
                                                <th>
                                                    Alamat
                                                </th>
                                                <th>
                                                    Perintah
                                                </th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($supplier as $sup) :
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            echo $no++;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $sup->id_anggota?>
                                                        </td>
                                                        <td>
                                                            <?php echo $sup->nama_anggota ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $sup->nama_perusahaan ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $sup->alamat ?>
                                                        </td>
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