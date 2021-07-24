<div class="content">
    <div class="container-fluid"><hr>

<h2 class="text-center"><font face="berlin Sans FB">SISTEM OPTIMASI BOBOT KRITERIA SUPPLIER</font></h2>

<div class="row justify-content-center">
    <div class="col-lg-5 card card-nav-tabs text-center">
        <div class="card-header card-header-primary">REGISTER</div>
            
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <form class="user" method="POST" action="<?= base_url('auth/register') ?>">
                    <div class="row input-group mb-3">
                        <div class="col-1"><i class="material-icons">badge</i></div>
                        <div class="col-11">
                            <input type="text" class="form-control form-control-user" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama..."> <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-1"><i class="material-icons">email</i></div>
                        <div class="col-11">
                            <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Email..."> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-1"><i class="material-icons">lock</i></div>
                        <div class="col-lg-5">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Input Password..."> <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-1"><i class="material-icons">lock</i></div>
                        <div class="col-lg-5">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password..."> <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-user btn-block">Sign Up</button>
                        </div>
                        <div class="col">
                            <a class="btn btn-success btn-user btn-block" href="<?= base_url('auth') ?>">LOG IN</a>
                        </div>
                    </div>
                </form>
            
        </div>
    </div>
</div>

<div class="card-footer">
    <?php date_default_timezone_set('Asia/Jakarta');?>
    <marquee><font face="Times New Roman"><?=date("j F Y, g:i a");?> || Selamat datang di Sistem Optimasi Bobot Kriteria Supplier || untuk login sebagai admin silakan masukkan email : admin@wsjti.id dan password : admin</font></marquee>
</div>

    </div>
</div>