    <!--section  -->
    <section class="hero-section"   data-scrollax-parent="true">
        <div class="bg-tabs-wrap">
            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                <div class="bg bg_tabs"  data-bg="<?=base_url('template2/');?>images/bg/hero/10.jpg"></div>
                <div class="overlay op7"></div>
            </div>
        </div>
        <div class="container small-container">
            <div class="intro-item fl-wrap">
                <span class="section-separator"></span>
                <div class="bubbles">
                    <h1>#Tagline</h1>
                </div>
                <h3>Temukan tips terbaik berkendara dari mitra kami.</h3>
            </div>
            <!-- main-search-input-tabs-->
            <div class="main-search-input-tabs  tabs-act fl-wrap">
                <ul class="tabs-menu change_bg no-list-style">
                    <li class="current"><a href="#tab-inpt1" data-bgtab="<?=base_url('template2/');?>images/bg/hero/10.jpg"> Produk</a></li>
                    <li><a href="#tab-inpt2" data-bgtab="<?=base_url('template2/');?>images/bg/hero/8.jpg"> Vendor</a></li>
                    <li><a href="#tab-inpt3" data-bgtab="<?=base_url('template2/');?>images/bg/hero/14.jpg"> Tips & Trik</a></li>
                </ul>
                <!--tabs -->                       
                <div class="tabs-container fl-wrap  ">
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-inpt1" class="tab-content first-tab">
                            <div class="main-search-input-wrap fl-wrap">
                                <div class="main-search-input fl-wrap">
                                    <div class="main-search-input-item">
                                        <label><i class="fal fa-keyboard"></i></label>
                                        <input type="text" placeholder="Apa yang kamu cari?" value=""/>
                                    </div>
                                    <div class="main-search-input-item location autocomplete-container">
                                        <label><i class="fal fa-map-marker-check"></i></label>
                                        <input type="text" placeholder="Lokasi" class="autocomplete-input" id="autocompleteid" value=""/>
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                    <button class="main-search-button color2-bg" onclick="window.location.href='produk.html'">Cari <i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab end-->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-inpt2" class="tab-content">
                            <div class="main-search-input-wrap fl-wrap">
                                <div class="main-search-input fl-wrap">
                                    <div class="main-search-input-item">
                                        <label><i class="fal fa-keyboard"></i></label>
                                        <input type="text" placeholder="Apa yang kamu cari?" value=""/>
                                    </div>
                                    <div class="main-search-input-item location autocomplete-container">
                                        <label><i class="fal fa-map-marker-check"></i></label>
                                        <input type="text" placeholder="Lokasi" class="autocomplete-input" id="autocompleteid" value=""/>
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                    <button class="main-search-button color2-bg" onclick="window.location.href='vendor.html'">Cari <i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab end-->                                
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-inpt3" class="tab-content">
                            <div class="main-search-input-wrap fl-wrap">
                                <div class="main-search-input fl-wrap">
                                    <div class="main-search-input-item">
                                        <label><i class="fal fa-keyboard"></i></label>
                                        <input type="text" placeholder="Apa yang kamu cari?" value=""/>
                                    </div>
                                    <div class="main-search-input-item location autocomplete-container">
                                        <label><i class="fal fa-map-marker-check"></i></label>
                                        <input type="text" placeholder="Lokasi" class="autocomplete-input" id="autocompleteid" value=""/>
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                    <button class="main-search-button color2-bg" onclick="window.location.href='artikel.html'">Cari <i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab end-->                                   
                </div>
                <!--tabs end-->
            </div>
            <!-- main-search-input-tabs end-->
            <div class="hero-categories fl-wrap">
                <h4 class="hero-categories_title">Gunakan pencarian cepat berdasarkan kategori :</h4>
                <ul class="no-list-style">
                    <li><a href="vendor.html"><i class="fal fa-tools"></i><span>Bengkel</span></a></li>
                    <li><a href="produk.html"><i class="far fa-cog"></i><span>Suku Cadang</span></a></li>
                    <li><a href="produk.html"><i class="far fa-football-helmet"></i><span>Aksesoris</span></a></li>
                </ul>
            </div>
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
        </div>
    </section>
    <!--section end-->
    <!--section  -->
    
    <!--section end-->
    <div class="sec-circle fl-wrap"></div>
    <!--section -->
    <section   class="gray-bg hidden-section particles-wrapper">
        <div class="container">
            <div class="section-title">
                <h2>Artikel Terbaru</h2>
                <div class="section-subtitle">Kategori Katalog</div>
                <span class="section-separator"></span>
                <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus.</p>
            </div>
            <div class="listing-item-grid_container fl-wrap">
                <div class="row">
                    <?php foreach ($new_artikel as $v) { ?>
                    <!--  listing-item-grid  -->
                    <div class="<?=$v['col'];?>">
                        <div class="listing-item-grid">
                            <div class="bg"  data-bg="<?=base_url('data/artikel/'.@$v['img']->img);?>"></div>
                            <div class="d-gr-sec"></div>
                            <div class="listing-item-grid_title">
                                <h3><a href="<?=site_url('Blog/blog_single/'.$v['id']);?>"><?=$v['judul'];?></a></h3>
                                <p><?=tgl_indo($v['ctddate'])?></p>
                            </div>
                        </div>
                    </div>
                    <!--  listing-item-grid end  -->
                    <?php } ?>                                                                                       
                </div>
            </div>
            <a href="<?=site_url('Blog/blog_list')?>" class="btn dec_btn  color2-bg">Lihat Lebih Banyak<i class="fal fa-arrow-alt-right"></i></a>
        </div>
    </section>
    <!--  section  -->
    
    
    
    <!--section  -->
    <section      data-scrollax-parent="true">
        <div class="container">
            <div class="section-title">
                <h2>Bagaimana cara kerjanya</h2>
                <div class="section-subtitle">Discover &amp; Connect </div>
                <span class="section-separator"></span>
                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
            </div>
            <div class="process-wrap fl-wrap">
                <ul class="no-list-style">
                    <li>
                        <div class="process-item">
                            <span class="process-count">01 </span>
                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                            <h4> Find Interesting Place</h4>
                            <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                        </div>
                        <span class="pr-dec"></span>
                    </li>
                    <li>
                        <div class="process-item">
                            <span class="process-count">02</span>
                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                            <h4> Contact a Few Owners</h4>
                            <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
                        </div>
                        <span class="pr-dec"></span>
                    </li>
                    <li>
                        <div class="process-item">
                            <span class="process-count">03</span>
                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                            <h4> Make a Listing</h4>
                            <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta.</p>
                        </div>
                    </li>
                </ul>
                <div class="process-end"><i class="fal fa-check"></i></div>
            </div>
        </div>
    </section>
    <!--section end-->
    
    <!--section  -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2> Testimoni</h2>
                <div class="section-subtitle">Clients Reviews</div>
                <span class="section-separator"></span>
                <p>Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="testimonilas-carousel-wrap fl-wrap">
            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
            <div class="testimonilas-carousel">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="<?=base_url('template2/');?>images/avatar/1.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Andy Dimasky</h3>
                                        <h4>Restaurant Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="<?=base_url('template2/');?>images/avatar/1.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                    <a href="#" class="testi-link" target="_blank">Via Twitter</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Frank Dellov</h3>
                                        <h4>Hotel Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="<?=base_url('template2/');?>images/avatar/1.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <h4>Restaurant Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="<?=base_url('template2/');?>images/avatar/1.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                    <a href="#" class="testi-link" target="_blank">Via Instagram</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Linda Svensky</h3>
                                        <h4>Shop Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                    </div>
                </div>
            </div>
            <div class="tc-pagination"></div>
        </div>
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgMiddle">
                <div class="wave-bg-anim waveMiddle" style="background-image: url('images/wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave-bg-anim waveBottom" style="background-image: url('images/wave-top.png')"></div>
            </div>
        </div> 						
    </section>
    <!--section end-->                
    <!--section  -->
    <section class="gray-bg">
        <div class="container">
            <div class="clients-carousel-wrap fl-wrap">
                <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                <div class="clients-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="<?=base_url('template2/');?>images/clients/2.png" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="<?=base_url('template2/');?>images/clients/3.png" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="<?=base_url('template2/');?>images/clients/4.png" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="<?=base_url('template2/');?>images/clients/5.png" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="<?=base_url('template2/');?>images/clients/6.png" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="<?=base_url('template2/');?>images/clients/7.png" alt=""></a>
                            </div>
                            <!--client-item end-->                                                                                                                                                                                                                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->