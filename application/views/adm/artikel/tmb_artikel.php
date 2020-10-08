<style>
    .ck-editor__editable {
    min-height: 400px;
}
</style>
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="javascript.void(0);" method="post" enctype="multipart/form-data" id="form_add_artikel">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div>Judul</div>
                                    <input required type="text" name="judul" class="form-control" id="judul" placeholder="Masukan judul">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div>Isi</div>
                                    <textarea   cols="30" rows="10" name="isi" id="isi" class="form-control" placeholder="Masukan isi konten" style="height: 200px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="submit" value="Simpan" id="btn-save" class="btn btn-primary w-100" >
                                <button class="btn btn-primary w-100" style="display:none;" type="button" id="btn-save-loading" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div>Tag</div>
                                <select  name="tag[]" multiple class="form-control" id="tag"></select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div>Upload Foto</div>
                            <div class="gmb-list" id="drp">
                                <input id="file-input" name="gmb[]" type="file" multiple>
                                <div id="preview2" class="mt-2"></div>
                            </div>
                        </div>

                    </div>
                </div> 
            </form>   
        </div>
    </div>
</div>