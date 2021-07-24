<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?php echo $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Password</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('welcome/updatepass') ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Old Password</label>
                                        <input type="password" class="form-control" id="oldpass" name="oldpass"><?= form_error('oldpass', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">New Password</label>
                                        <input type="password" class="form-control" id="newpass" name="newpass"><?= form_error('newpass', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">New Password Confirmation</label>
                                        <input type="password" class="form-control" id="confirmpass" name="confirmpass"><?= form_error('confirmpass', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-warning" href="<?= base_url('welcome/profil') ?>">KEMBALI</a>
                            <button type="reset" class="btn btn-danger pull-right">BATAL</button>
                            <button type="submit" class="btn btn-primary pull-right">Update Password</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="<?php echo base_url('assets/img/user/') . $user['foto_user']; ?>" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">
                            <?php
                            if ($_SESSION['role_id'] == 1) {
                                echo "Administrator";
                            } else {
                                echo "User";
                            }
                            ?>
                        </h6>
                        <h4 class="card-title"><?= $_SESSION['name']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>