<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<div class="content">
    <div class="container-fluid"><hr>
                
<h2 class="text-center"><font face="berlin Sans FB">SISTEM OPTIMASI BOBOT KRITERIA SUPPLIER</font></h2>

<div class="row justify-content-center">
    <div class="col-lg-5 card card-nav-tabs text-center">
        <div class="card-header card-header-primary">LOGIN PAGE</div>
                    
        <div class="card-body">       
        <?php echo $this->session->flashdata('message'); ?>            
            <form class="user" method="POST" action="<?= base_url('auth') ?>">
            
            <div class="row input-group mb-3">
                <div class="col-1"><i class="material-icons">email</i></div>
                    <div class="col-11">
                    <?= form_error('email', '<small class="text-danger text-left">', '</small>') ?>
                    <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Email..." value="<?= set_value('email') ?>">
                    </div>
            </div>
                    
            <div class="row input-group mb-3">
                <div class="col-1">
                    <i class="material-icons">lock</i></div>
                    <div class="col-7">
                        <?= form_error('password', '<small class="text-danger text-center">', '</small>') ?>
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Input Password...">
                    </div>
                    <div class="col">
                        <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>
            </div>

            <div class="row input-group mb-3">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-success btn-user btn-block">Log In</button></div>
                <div class="col-lg-6">
                    <a class="btn btn-success btn-user btn-block" href="<?= base_url('auth/register')?>">Sign Up</a></div>
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

<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>