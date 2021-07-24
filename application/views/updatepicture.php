<div class="content">
    <div class="container-fluid">

<div class="row">
    <div class="col-md-8">
        <?php echo $this->session->flashdata('message'); ?>
                
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Picture</h4>
            </div>
        
            <div class="card-body">
            <form action="<?= base_url('/auth/upload_pic') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <img class="img-thumbnail" id="preview" src="<?php echo base_url('assets/img/user/') . $user['foto_user']; ?>" width="200" height="200">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-4"></div>
                        <div class="col-md-4"><font face="Times New Roman">
                            <input id="imageup" class="input-group-text" type="file" name="userfile" size="20"/></font>
                        </div>
                    <div class="col-md-4"></div>
                </div><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama</label>
                            <input readonly type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                            <input type="text" hidden name="id_user" value="<?= $user['id_user'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input readonly type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
                        </div>
                    </div>
                </div>
            </div>
                            
                <div class="card-footer">
                    <a class="btn btn-warning" href="<?= base_url('welcome/profil') ?>">Kembali</a>
                    <button type="submit" class="btn btn-primary pull-right">Update Picture</button>
                </div>

        </div>
    </div>
                </form>

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

<script type="text/javascript">
imageup.onchange = evt => {
  const [file] = imageup.files
  if (file) {
    preview.src = URL.createObjectURL(file)
  }
}
</script>
