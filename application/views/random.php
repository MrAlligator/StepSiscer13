<div class="content">
    <div class="container-fluid">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h2 class="card-title text-center"><strong>SUPPLIER RANDOM</strong></h2>
            </div>

<div class="card-body">
<div class="table-responsive">
    <table id="table_supplier" class="display table-striped" style="width:100%">
        <thead class="text-primary">
            <th>No</th>
                <th>Id Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nilai Fitness</th>
        </thead>
        <tbody>
        <?php   $no = 1;
        foreach ($gen as $sup) : ?>
            <tr>
                <td><?= $no++;?>.</td>
                <td><?= $sup->k1?></td>
                <td><?= $sup->k2?></td>
                <td><?= $sup->k3?></td>
                <td><?= $sup->k4?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

        </div>
    </div>
</div>