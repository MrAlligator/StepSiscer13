            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1) : ?>
                                        <h4 class="card-title ">Tabel Supplier</h4>
                                        <a href="<?= base_url('welcome/add_supplier') ?>"><button>Tambah Supplier</button></a>
                                    <?php else : ?>
                                        <h4 class="card-title ">Tabel Supplier</h4>
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