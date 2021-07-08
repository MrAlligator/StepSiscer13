<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo"><a href="<?= site_url() ?>" class="simple-text logo-normal">
            Optimasi Bobot<br>
            Kriteria Supplier
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <?php if($nav==1) :?>
            <li class="nav-item active">
            <?php else :?>
            <li class="nav-item">
            <?php endif;?>

            <a class="nav-link" href="<?= base_url() ?>">
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
                <i class="material-icons">library_books</i><p>Optimasi Bobot</p>
            </a>
            </li>
        </ul>
    </div>
</div>
