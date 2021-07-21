<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?php echo $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Picture</h4>
                        <p class="card-category">Complete your profile</p>
                        <a class="btn btn-primary pull-right" href="<?= base_url('welcome/profil') ?>">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('welcome/updatepict') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-raised">
                                                <img src="<?php echo base_url('assets/img/user/') . $user['foto_user']; ?>" class="img" alt="..." width="200" height="200">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                            <div>
                                                <span class="btn btn-raised btn-round btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" class="form-control" id="image" name="image" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Picture</button>
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