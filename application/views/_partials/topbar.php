<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <h2 class="navbar-brand" href="javascript:;"><?= $title ?></h2>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <!-- <form class="navbar-form">
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form> -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">
                                Account
                            </p>
                        </a>
                        <?php if (isset($_SESSION['email'])) : ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="<?= base_url('welcome/profil') ?>">Profile</a>
                                <!-- <a class="dropdown-item" href="#">Settings</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#yakinkeluar" data-toggle="modal">Log out</a>
                            </div>
                        <?php else : ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="<?= base_url('auth') ?>">Log in</a>
                            </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
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