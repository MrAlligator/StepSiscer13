<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="<?= site_url() ?>" class="simple-text logo-normal">
            Bobot Kriteria Suplier
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="<?= base_url() ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('welcome/profil') ?>">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('welcome/supplier') ?>">
                    <i class="material-icons">content_paste</i>
                    <p>Supplier</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url() ?>">
                    <i class="material-icons">library_books</i>
                    <p>Perhitungan Bobot</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url() ?>">
                    <i class="material-icons">bubble_chart</i>
                    <p>Bobot</p>
                </a>
            </li>
        </ul>
    </div>
</div>