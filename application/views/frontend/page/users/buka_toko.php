<div class="dashboard-title fl-wrap">
    <h3>Buka Toko</h3>
</div>
<!-- profile-edit-container--> 
<div class="profile-edit-container fl-wrap block_box">
    <form action="javascript:void(0);" id="form_buka_toko">
        <div class="custom-form">
            <div class="row">
                <div class="col-sm-12">
                    <label>Nama Toko</label>
                    <input type="text" name="nma_vendor"/>                                                
                </div>
                <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                        <label>
                            Link Toko
                        </label>
                            <span style="
                            font-size: large;
                            position: relative;
                            top: 12px;
                            background: #f4faff;
                            padding: 11px 40px;
                            border-bottom: solid 2px #ced0d4;
                            border-radius: 8px;
                        ">lancarpedia.com/t/</span>
                    </div>
                    <div class="col-md-8">
                        <label>...</label>
                            <input type="text" name="link"/>    
                    </div>
                </div>                                            
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Lokasi <span id="i_loc"></span></label>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn color2-bg" style="margin-top: 0;" onclick="getLocation()">Get Location</button>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="lat" id="lat" placeholder="lat">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="lng" id="lng" placeholder="lng">
                                </div>
                            </div>
                        </div>
                    </div>                                              
                </div>
            </div>
            <label> Deskripsi</label>                                              
            <textarea cols="40" rows="3" name="desk" style="margin-bottom:20px;"></textarea>
            <div class="clearfix"></div>
            <label>Latar Belakang Toko</label> 
            <div class="clearfix"></div>
            <div class="photoUpload">
                <span><i class="fal fa-image"></i> <strong>Tambah Foto</strong></span>
                <input type="file" class="upload" name="img_back">
            </div>
            <button type="submit" class="btn color2-bg float-btn">Buka Toko Gratis<i class="fal fa-save"></i></button>
        </div>
    </form>
</div>