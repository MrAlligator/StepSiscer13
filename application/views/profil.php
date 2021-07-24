            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <?php echo $this->session->flashdata('message'); ?>
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Edit Profile</h4>
                                    <p class="card-category">Complete your profile</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email address</label>
                                                    <input type="email" class="form-control" value="<?= $_SESSION['email'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Name</label>
                                                    <input type="text" class="form-control" value="<?= $_SESSION['name'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn btn-primary pull-right" href="<?= base_url('welcome/updatepict') ?>">Edit</a>
                                        <a class="btn btn-success pull-right" href="<?= base_url('welcome/updatepass') ?>">Ubah Password</a>
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
                                    <a class="btn btn-primary pull-center" href="<?= base_url('welcome/updatepict') ?>">Change Picture</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>