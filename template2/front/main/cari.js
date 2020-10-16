$(document).ready(function () {
    
});

$('#form_cari').submit(function (e) { 
    e.preventDefault();
    cari();
});

function cari() {
    $.ajax({
        type: "GET",
        url: "cari_all",
        data: $('#form_cari').serialize(),
        dataType: "json",
        success: function (r) {
            $('#daftar_cari').html('');
            $('#r_cari').text($('input[name="q"]').val());
            r.forEach(e => {
                $('#daftar_cari').append(`<div class="listing-item">
                <article class="geodir-category-listing fl-wrap">
                    <div class="geodir-category-img">
                        <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                        <a href="../Vendor/detail_vendor/${e.id}" class="geodir-category-img-wrap fl-wrap">
                            <img src="${e.back_img}" alt=""> 
                        </a>
                        <div class="listing-avatar"><a href="author-single.html"><img src="${e.img_profile}" alt="img profile"></a>
                            <span class="avatar-tooltip">${e.nma_vendor}</span>
                        </div>
                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                        <div class="geodir-category-opt">
                            <div class="listing-rating-count-wrap">
                                <div class="review-score">5.0</div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                <br>                                                
                                <div class="reviews-count">4 reviews</div>
                            </div>
                        </div>
                    </div>
                    <div class="geodir-category-content fl-wrap">
                        <div class="geodir-category-content-title fl-wrap">
                            <div class="geodir-category-content-title-item">
                                <h3 class="title-sin_map"><a href="detail-vendor.html">MontePlaza Hotel</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                <div class="geodir-category-location fl-wrap"><a href="#4" class="map-item"><i class="fas fa-map-marker-alt"></i>${e.alamat}</a></div>
                            </div>
                        </div>
                        <div class="geodir-category-text fl-wrap">
                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            <div class="facilities-list fl-wrap">
                                <div class="facilities-list-title">Fasilitas : </div>
                                <ul class="no-list-style" id="daftar_fasilitas">
                                </ul>
                            </div>
                        </div>
                        <div class="geodir-category-footer fl-wrap">
                            <a class="listing-item-category-wrap">
                                <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i></div>
                                <span>Hotels</span>
                            </a>
                            <div class="geodir-opt-list">
                                <ul class="no-list-style">
                                    <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                    <li><a href="#4" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>4</strong></span></a></li>
                                    <li>
                                         <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?=base_url('template2/')?>images/all/1.jpg'},{'src': '<?=base_url('template2/')?>images/all/1.jpg'}, {'src': '<?=base_url('template2/')?>images/all/1.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-level geodir-category_price">
                                <span class="price-level-item" data-pricerating="4"></span>
                                <span class="price-name-tooltip">Ultra High</span>
                            </div>
                            <div class="geodir-category_contacts">
                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                <ul class="no-list-style">
                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">${e.no_tlp}</a></li>
                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">${e.email}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>`);

            daftar_fasilitas(e.fasilitas);
            });
        }
    });
}
function daftar_fasilitas(f='') {
    f.forEach(e => {
        $('#daftar_fasilitas').append('<li class="tolt"  data-microtip-position="top" data-tooltip="'+e.fasilitas+'"><i class="fal fa-wifi"></i></li>');
    });
}