<section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
    <div class="bg-parallax-wrap">
        <div class="bg par-elem "  data-bg="<?=$data['back_img'];?>" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="list-single-header-item  fl-wrap">
            <div class="row">
                <div class="col-md-9">
                    <h1><?=$data['vnd']->nma_vendor;?> <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i><?=$data['vnd']->alamat;?></a> <a href="#"> <i class="fal fa-phone"></i><?=$data['vnd']->no_tlp;?></a> <a href="#"></div>
                    </div>
                    <!-- <div class="col-md-3">
                        <a class="fl-wrap list-single-header-column custom-scroll-link " href="#sec5">
                            <div class="listing-rating-count-wrap single-list-count">
                                <div class="review-score">4.8</div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                <br>                                                
                                <div class="reviews-count">12 reviews</div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
            <div class="list-single-header_bottom fl-wrap">
                <a class="listing-item-category-wrap" href="#">
                    <div class="listing-item-category  red-bg"><i class="fal fa-warehouse"></i></div>
                    <span>Bengkel</span>
                </a>
                <div class="list-single-author"> <a href="author-single.html"><span class="author_avatar"> <img alt='' src='<?=base_url("template2/")?>images/avatar/1.png'>  </span><?=$data['vnd']->nma_vendor;?></a></div>
                <div class="geodir_status_date gsd_open"></i>Open</div>
                <div class="list-single-stats">
                    <ul class="no-list-style">
                        <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  156 </span></li>
                        <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark -  24 </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- scroll-nav-wrapper--> 
    <div class="scroll-nav-wrapper fl-wrap">
        <div class="container">
            <nav class="scroll-nav scroll-init">
                <ul class="no-list-style">
                    <li><a class="act-scrlink" href="#sec1"><i class="fal fa-images"></i> Top</a></li>
                    <li><a href="#sec2"><i class="fal fa-info"></i>Detail</a></li>
                    <li><a href="#sec3"><i class="fal fa-image"></i>Galeri</a></li>
                    <li><a href="#sec4"><i class="fal fa-tools"></i>Layanan</a></li>
                    <!-- <li><a href="#sec5"><i class="fal fa-comments-alt"></i>Review</a></li> -->
                </ul>
            </nav>
            <div class="scroll-nav-wrapper-opt">
                <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Save </a>
                <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Share </a>
                <div class="share-holder hid-share">
                    <div class="share-container  isShare"></div>
                </div>
                <div class="show-more-snopt"><i class="fal fa-ellipsis-h"></i></div>
                <div class="show-more-snopt-tooltip">
                    <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                    <a href="#"> <i class="fas fa-flag-alt"></i> Report </a>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll-nav-wrapper end--> 
    <section class="gray-bg no-top-padding">
        <div class="container">
            <div class="breadcrumbs inline-breadcrumbs fl-wrap">
                <a href="#">Beranda</a><a href="#">Bengkel</a><span><?=$data['vnd']->nma_vendor;?></span> 
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <!-- list-single-main-wrapper-col -->
                <div class="col-md-8">
                    <!-- list-single-main-wrapper -->
                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <!-- <div class="list-single-main-media fl-wrap">
                            <img src="<?=base_url('template2/')?>images/all/11.jpg" class="respimg" alt="">
                            <a href="https://vimeo.com/70851162" class="promo-link   image-popup"><i class="fal fa-video"></i><span>Promo Video</span></a>
                        </div> -->
                        <!-- list-single-main-item --> 
                        <div class="list-single-main-item fl-wrap block_box">
                            <div class="list-single-main-item-title">
                                <h3>Deskripsi</h3>
                            </div>
                            <div class="list-single-main-item_content fl-wrap">
                                <p>
                                    <?=$data['vnd']->desk;?>
                                </p>
                                <a href="https://www.astra-honda.com/after-sales/service/ahass-activity" class="btn color2-bg float-btn">Visit Website<i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- list-single-main-item end -->                                               
                        <!-- list-single-main-item --> 
                        <div class="list-single-main-item fl-wrap block_box">
                            <div class="list-single-main-item-title">
                                <h3>Fasilitas</h3>
                            </div>
                            <div class="list-single-main-item_content fl-wrap">
                                <div class="listing-features fl-wrap">
                                    <ul class="no-list-style">
                                        <?php foreach ($data['fsl'] as $v) { ?>
                                        <li><a href="#"><i class="fal fa-snowflake"></i><?=$v->fasilitas?></a></li>
                                        <?php } ?>
                                        <!-- <li><a href="#"><i class="fal fa-wifi"></i> Wi Fi Gratis</a></li>
                                        <li><a href="#"><i class="fal fa-snowflake"></i> Ruang Tunggu AC</a></li>
                                        <li><a href="#"><i class="fal fa-tv"></i> Televisi</a></li>
                                        <li><a href="#"><i class="fal fa-mug-hot"></i> Teh & Kopi Gratis</a></li>
                                        <li><a href="#"><i class="fal fa-shopping-cart"></i> Booking Online</a></li>
                                        <li><a href="#"><i class="fal fa-motorcycle"></i> Layanan Kunjung</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- list-single-main-item end -->                                    
                        <!-- list-single-main-item-->   
                        <div class="list-single-main-item fl-wrap block_box" id="sec3">
                            <div class="list-single-main-item-title">
                                <h3>Galeri</h3>
                            </div>
                            <div class="list-single-main-item_content fl-wrap">
                                <div class="single-carousel-wrap fl-wrap lightgallery">
                                    <div class="sc-next sc-btn color2-bg"><i class="fas fa-caret-right"></i></div>
                                    <div class="sc-prev sc-btn color2-bg"><i class="fas fa-caret-left"></i></div>
                                    <div class="single-carousel fl-wrap full-height">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- swiper-slide-->   
                                                <?php foreach ($data['glr'] as $v) { ?>
                                                    <div class="swiper-slide">
                                                    <div class="box-item">
                                                        <img  src="<?=base_url('data/vnd/c4ca4238a0b923820dcc509a6f75849b/galeri/'.$v->img)?>"   alt="">
                                                        <a href="<?=base_url('data/vnd/c4ca4238a0b923820dcc509a6f75849b/galeri/'.$v->img)?>" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <!-- swiper-slide end-->   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- list-single-main-item end -->          
                        <!-- list-single-facts -->                               
                        
                        <!-- list-single-facts end -->       
                        <!-- list-single-main-item-->   
                        <div class="list-single-main-item fl-wrap block_box" id="sec4">
                            <div class="list-single-main-item-title">
                                <h3>Layanan AHASS</h3>
                            </div>
                            <div class="list-single-main-item_content fl-wrap">
                            <!-- <div class="menu-filters">
                                <a href="#" class="gallery-filter  menu-filters-active" data-filter="*">All</a>
                                <a href="#" class="gallery-filter" data-filter=".main">Main</a>
                                <a href="#" class="gallery-filter" data-filter=".dessert">Dessert</a>
                                <a href="#" class="gallery-filter" data-filter=".lunch">Lunch</a>
                            </div> -->
                            <div class="restor-menu-widget fl-wrap">
                                
                                <!--restmenu-item-->  
                                <?php foreach ($data['lyn'] as $v) { ?>
                                <div class="restmenu-item">
                                    <?php if($v->img != ''){ ?>
                                    <a href="<?=base_url('template2/')?>images/all/menu/1.jpg" class="restmenu-item-img image-popup"> 
                                        <img src="<?=base_url('template2/')?>images/all/menu/1.jpg" alt="">
                                    </a>
                                    <?php } ?>
                                    <div class="restmenu-item-det">
                                        <div class="restmenu-item-det-header fl-wrap">
                                            <h4><?=$v->judul;?></h4>
                                        </div>
                                        <p><?=$v->desk;?></p>
                                    </div>
                                </div>
                                <?php } ?>
                                <!--restmenu-item end-->                                             
                                
                            </div>
                            <!-- <a href="#" class="btn color2-bg   float-btn">Download PDF<i class="fal fa-file-pdf"></i></a> -->
                        </div>
                    </div>
                    <!-- list-single-main-item end -->                                     
                    <!-- list-single-main-item -->   
                   
                    <!-- list-single-main-item end -->                                       
                    <!-- list-single-main-item -->   
                   
                    <!-- list-single-main-item end -->                                    
                </div>
            </div>
            <!-- list-single-main-wrapper-col end -->
            <!-- list-single-sidebar -->
            <div class="col-md-4">
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Jam Kerja</h3>
                    </div>
                    <div class="box-widget opening-hours fl-wrap">
                        <div class="box-widget-content">
                            <ul class="no-list-style">
                                <?php  foreach ($data['jb'] as $v) { ?>
                                <li class="mon"><span class="opening-hours-day"><?= ucfirst($v['hari']); ?> </span><span class="opening-hours-time"><?= $v['jam_mulai']; ?> - <?= $v['jam_akhir']; ?> WIB</span></li>
                                <?php } ?>
                                <!-- <li class="tue"><span class="opening-hours-day">Selasa </span><span class="opening-hours-time">08.00 - 17.00 WIB</span></li>
                                <li class="wed"><span class="opening-hours-day">Rabu </span><span class="opening-hours-time">08.00 - 17.00 WIB</span></li>
                                <li class="thu"><span class="opening-hours-day">Kamis </span><span class="opening-hours-time">08.00 - 17.00 WIB</span></li>
                                <li class="fri"><span class="opening-hours-day">Jumat </span><span class="opening-hours-time">08.00 - 17.00 WIB</span></li>
                                <li class="sat"><span class="opening-hours-day">Sabtu </span><span class="opening-hours-time">08.00 - 17.00 WIB</span></li>
                                <li class="sun"><span class="opening-hours-day">Minggu </span><span class="opening-hours-time">08.00 - 17.00 WIB</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->   
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Booking Online</h3>
                    </div>
                    <div class="box-widget">
                        <div class="box-widget-content">
                            <form   class="add-comment custom-form">
                                <fieldset>
                                    <label><i class="fal fa-user"></i></label>
                                    <input type="text" placeholder="Nama *" value=""/>
                                    <div class="clearfix"></div>
                                    <label><i class="fal fa-envelope"></i>  </label>
                                    <input type="text" placeholder="Email*" value=""/>
                                    <div class="listsearch-input-item clact date-container2">
                                        <label><i class="fal fa-calendar"></i></label>
                                        <input type="text" placeholder="Waktu & Tanggal"     name="datepicker-here-time"   value=""/>
                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                    </div>
                                    <textarea cols="40" rows="3" placeholder="Informasi Tambahan:"></textarea>
                                </fieldset>
                                <button class="btn color2-bg url_btn float-btn" onclick="window.location.href='booking.html'">Booking Sekarang <i class="fal fa-bookmark"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->                                                                   
                
                <!--box-widget-item -->
                <!-- <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Kisaran Harga </h3>
                    </div>
                    <div class="box-widget">
                        <div class="box-widget-content">
                            <div class="claim-price-wdget fl-wrap">
                                <div class="claim-price-wdget-content fl-wrap">
                                    <div class="pricerange fl-wrap"><span>Harga : </span> Rp.30.000 - Rp.500.000 </div>
                                    <div class="claim-widget-link fl-wrap"><span></span><a href="#">Lihat Pricelist!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--box-widget-item end -->                                
                <!--box-widget-item -->
                <!-- <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Diselenggarakan oleh : </h3>
                    </div>
                    <div class="box-widget">
                        <div class="box-widget-author fl-wrap">
                            <div class="box-widget-author-title">
                                <div class="box-widget-author-title-img">
                                    <img src="<?=base_url('template2/')?>images/avatar/1.png" alt=""> 
                                </div>
                                <div class="box-widget-author-title_content">
                                    <a href="user-single.html">PT Astra Honda</a>
                                    <span>4 Places Hosted</span>
                                </div>
                                <div class="box-widget-author-title_opt">
                                    <a href="user-single.html" class="tolt green-bg" data-microtip-position="top" data-tooltip="View Profile"><i class="fas fa-user"></i></a> 
                                    <a href="#" class="tolt color-bg cwb" data-microtip-position="top" data-tooltip="Chat With Owner"><i class="fas fa-comments-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--box-widget-item end -->     
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Daftar Serupa :</h3>
                    </div>
                    <div class="box-widget  fl-wrap">
                        <div class="box-widget-content">
                            <!--widget-posts-->
                            <div class="widget-posts  fl-wrap">
                                <ul class="no-list-style">
                                    <?php foreach ($data['vnd_ktg'] as $v) { ?>
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img src="<?=base_url('template2/')?>images/gallery/thumbnail/1.png" alt=""></a>  
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">Yamaha Harapan Motor Kukusan Beji</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                            <div class="widget-posts-descr-link"><a href="listing.html" >Bengkel </a>   <a href="listing.html">Cafe</a></div>
                                            <div class="widget-posts-descr-score">4.1</div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                   
                                </ul>
                            </div>
                            <!-- widget-posts end-->
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->      
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Tags</h3>
                    </div>
                    <div class="box-widget opening-hours fl-wrap">
                        <div class="box-widget-content">
                            <div class="list-single-tags tags-stylwrap">
                                <a href="#">Hotel</a>
                                <a href="#">Hostel</a>
                                <a href="#">Room</a>
                                <a href="#">Spa</a>
                                <a href="#">Restourant</a>
                                <a href="#">Parking</a>                                                                               
                            </div>
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->       
            </div>
            <!-- list-single-sidebar end -->                                
        </div>
    </div>
</section>
<div class="limit-box fl-wrap"></div>