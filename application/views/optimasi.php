<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Optimasi Bobot Kriteria Supplier</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" id="optimasi" action="<?= base_url('genetik/genetika') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Target</label>
                                    <input type="text" name="taget" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Jumlah Populasi</label>
                                    <input type="number" name="jumlah_populasi" min=1 max=<?= count($supplier); ?> class="form-control" value="Jumlah Populasi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Mutasi</label>
                                    <input type="number" name="mutasi" class="form-control" step="0.1" min=0.0 max=1.0>
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">PROSES</button>
                            <button type="reset" id="reset" class="btn btn-danger pull-right">BATAL</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>