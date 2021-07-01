            <div class="content">
                <div class="container-fluid"><hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 card card-nav-tabs text-center">
                            <div class="card-header card-header-primary">
                                Welcome
                            </div>
                            <div class="card-body">
                            <?php echo $this->session->flashdata('message'); ?>
                                <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                <div class="row form-group">
                                <div class="col-12">
                                    <?= form_error('email', '<small class="text-danger text-left">', '</small>') ?>
                                    <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Email..." value="<?= set_value('email') ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-7">
                                    <?= form_error('password', '<small class="text-danger text-center">', '</small>') ?>
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Input Password...">
                                </div>
                                <div class="col-5">
                                <label class="input-group-text">
                                    |<input type="checkbox" id="show-password">
                                    | Show Password
                                </label>
                                </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-success btn-user btn-block">
                                                Sign In
                                            </button>
                                        </div>
                                        <div class="col-lg-6">
                                                <a class="btn btn-success btn-user btn-block" href="<?= base_url('auth/register')?>">
                                                    Sign Up
                                                </a>
                                        </div>
                                    </div>
                                    <a href="<?= base_url('welcome') ?>" class="btn btn-primary btn-user btn-block">
                                        Back to Home
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){  
   $('#show-password').click(function(){
    if($(this).is(':checked')){
     $('#password').attr('type','text');
    }else{
     $('#password').attr('type','password');
    }
   });
  });
 </script>