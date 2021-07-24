<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo"><a href="<?= base_url('welcome') ?>" class="simple-text logo-normal">
            Optimasi Bobot<br>
            Kriteria Supplier
            <?var_dump($_SESSION)?>
        </a>
    </div>
    <!-- <img src="<?php echo base_url('assets/img/user/') . $_SESSION['foto_user']; ?>" width="60" height="60"> -->
    <div class="sidebar-wrapper">
        <ul class="nav">

            <?php if($nav==1) :?>
            <li class="nav-item active">
            <?php else :?>
            <li class="nav-item">
            <?php endif;?>

            <a class="nav-link" href="<?= base_url('welcome') ?>">
                <i class="material-icons">dashboard</i><p>Dashboard</p>
            </a>
            </li>

            <?php if (isset($_SESSION['email'])) : ?>
            <?php if($nav==2) :?>
            <li class="nav-item active">
            <?php else :?>
            <li class="nav-item">
            <?php endif;?>
                
            <a class="nav-link" href="<?= base_url('welcome/profil') ?>">
                <i class="material-icons">person</i><p>User Profile</p>
            </a>
            </li>
            
            <?php if($nav==5) :?>
            <li class="nav-item active">
            <?php else :?>
            <li class="nav-item">
            <?php endif;?>
                
            <a class="nav-link" href="<?= base_url('welcome/kriteria') ?>">
                <i class="material-icons">assessment</i><p>Kriteria</p>
            </a>
            </li>
        
    
            <?php endif; ?>
            <?php if($nav==3) :?>
            <li class="nav-item active">
            <?php else :?>
            <li class="nav-item">
            <?php endif;?>
            
            <a class="nav-link" href="<?= base_url('welcome/supplier') ?>">
            <i class="material-icons">content_paste</i><p>Supplier</p>
        </a>
    </li>
            
            <?php if($nav==4) :?>
            <li class="nav-item active">
            <?php else :?>
            <li class="nav-item">
            <?php endif;?>
            
            <a class="nav-link" href="<?= base_url('welcome/optimasi') ?>">
                <i class="material-icons">calculate</i><p>Optimasi Bobot</p>
            </a>
        </li>

        <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1){ ?>
            <?php if($nav==6){?>
            <li class="nav-item active">
            <?php }else{?>
            <li class="nav-item">
            <?php } ?>
            <a class="nav-link" href="<?= base_url('welcome/admin') ?>">
                <i class="material-icons">people</i><p>Admin</p>
            </a>
            </li>
        <?php } ?>
        
        <?php if (isset($_SESSION['email']) && $_SESSION['role_id'] == 1){ ?>
            <?php if($nav==7){?>
            <li class="nav-item active">
            <?php }else{?>
            <li class="nav-item">
            <?php } ?>
            <a class="nav-link" href="<?= base_url('welcome/user') ?>">
                <i class="material-icons">groups</i><p>User</p>
            </a>
            </li>
        <?php } ?>

        <?php if (isset($_SESSION['email'])){ ?>
            <li class="nav-item">
            <a class="nav-link" href="#yakinkeluar" data-toggle="modal">
                <i class="material-icons">logout</i><p>Logout</p>
            </a>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>

<div class="modal" id="yakinkeluar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Logout</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        Apakah anda yakin?
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary pull-right" href="<?= base_url('auth/logout') ?>">Yakin</a>
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
