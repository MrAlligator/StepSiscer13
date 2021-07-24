<div class="content">
    <div class="container-fluid">
        
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= base_url('welcome/supplier') ?>">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">store</i>
                </div>
                  <p class="card-category">Total Supplier</p>
                  <h3 class="card-title"><?= count($supplier);?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Newest Updated
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6" data-toggle="modal" data-target="#admin">
        <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">person</i>
                </div>
                  <p class="card-category">Administrator</p>
                  <h3 class="card-title"><?=  count($admin); ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Newest Updated
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6" data-toggle="modal" data-target="#user">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">person</i>
                </div>
                  <p class="card-category">User</p>
                  <h3 class="card-title"><?= count($user); ?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Newest Updated
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

<div class="modal" id="user" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-1">No</div>
                    <div class="col">Nama</div>
                </div>
                <?php $no=1; foreach ($user as $u) : ?>
                    <div class="row">
                        <div class="col-1"><?= $no++;?>.</div>
                        <div class="col"><?= $u->name; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="admin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-1">No</div>
                    <div class="col">Nama</div>
                </div>
                <?php $no=1; foreach ($admin as $u) : ?>
                    <div class="row">
                        <div class="col-1"><?= $no++;?>.</div>
                        <div class="col"><?= $u->name; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>