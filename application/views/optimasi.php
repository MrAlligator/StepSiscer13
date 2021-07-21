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
                                    <label class="bmd-label-floating">Jumlah Gen</label>
                                    <input type="number"required name="jumlah_populasi" min=1 max=<?= count($supplier); ?> class="form-control" value="Jumlah Populasi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Mutasi</label>
                                    <input type="number" required name="mutasi" class="form-control" step="0.1" min=0.0 max=1.0>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Crossover</label>
                                    <input type="number" required name="crossover" class="form-control" step="0.1" min=0.0 max=1.0>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Crossover</label>
                                        <input type="number" id="crossover" name="crossover" class="form-control" step="0.1" min=0.0 max=1.0>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="#cr" data-toggle="modal"><i class="material-icons">notifications</i></a>
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

<div class="modal" id="cr" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PERINGATAN !!!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Harap memasukkan nilai Crossover lebih besar dari nilai Mutasi
            </div>
        </div>
    </div>
</div>