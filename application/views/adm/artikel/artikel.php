<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Artikel</b>
                    <div style="position:absolute;right:10px;">
                        <a href="<?=site_url('adm/Artikel/tmb_artikel')?>" class="btn btn-primary">Tambah Artikel</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="toolbar mb-5">
                        <form action="javascript:void(0);" id="form_filter">
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Tanggal</p>
                                    <input type="date" name="date" id="dt" class="form-control">
                                    <button type="reset" onclick="setTimeout(showtable, 200)">Reset</button>
                                    <button type="submit">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table class="table table-hover text-nowrap table-bordered mb-0" id="tabel">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Dibuat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>