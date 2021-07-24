<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready( function () {
    $('#table_random').DataTable();
    } );
</script>

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title text-center"><strong>OPTIMASI SUPPLIER</strong></h2>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_random" class="display table-striped" style="width:100%">
                                <thead class="text-primary">
                                    <th>Skor</th>
                                    <th>Nama Anggota</th>
                                    <th>Nama Peusahaan</th>
                                    <th>Presentase</th>
                                </thead>
                                <tbody>
                                <?php foreach ($skor as $a) : ?>
                                <tr>
                            
                                <td><?= $a->skor ?></td>
                                
                                <?php
                                $nama = $this->db->select('nama_anggota')->where('id_anggota',$a->id_anggota)->get('tb_supplier')->result();
                                foreach ($nama as $b) : ?>
                                <td><?= $b->nama_anggota ?></td>
                                <?php endforeach; ?>

                                <?php
                                $alamat = $this->db->select('nama_perusahaan')->where('id_anggota',$a->id_anggota)->get('tb_supplier')->result();
                                foreach ($alamat as $c) : ?>
                                <td><?= $c->nama_perusahaan ?></td>
                                <?php endforeach; ?>


                                <td><?=number_format(((intval($a->skor)/intval($sum))*100), 2)." %"; ?></td>
                                        
                                </tr>
                                
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <a class="btn btn-warning pull-right" href="<?= base_url('welcome/optimasi') ?>">KEMBALI</a>
                    </div>

                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title text-center"><strong>HITUNG SKOR</strong></h2>
                    </div>
                    </div>
                    </div>
                    </div> -->
    </div>
</div>

                    <!-- <div class="card-body">
                        <form action="<?= base_url('genetik/optimasi') ?>" method="POST">
                            <?php
                            $no = 1;
                            foreach ($gen as $sup) : ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">ID RANDOM</label>
                                            <input type="text" class="form-control" name="id-<?= $no++; ?>" value="<?php echo $sup->id_anggota; ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">JUMLAH POPULASI</label>
                                        <input type="text" class="form-control" id="jp" name="jp" value="<?php echo $jp; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CROSSOVER</label>
                                        <input type="text" class="form-control" id="cr" name="cr" value="<?php echo $cr; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">MUTASI</label>
                                        <input type="text" class="form-control" id="mu" name="mu" value="<?php echo $mu; ?>">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Hitung</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->