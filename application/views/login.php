            <div class="content">
                <div class="container-fluid">
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 card card-nav-tabs text-center">
                            <div class="card-header card-header-primary">
                                Welcome
                            </div>
                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Email..." value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Input Password...">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Sign In
                                    </button>
                                    <a href="<?= base_url('welcome') ?>" class="btn btn-primary btn-user btn-block">
                                        Back to Home
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>