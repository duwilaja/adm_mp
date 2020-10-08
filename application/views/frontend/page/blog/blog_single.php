<section class="white-bg pt-4" id="sec1">
    <div class="container">
        <div class="post-container fl-wrap">
            <div class="row">
                <!-- blog content-->
                <div class="col-md-8">
                    <!-- article> --> 
                    <article class="post-article single-post-article">
                        <div class="list-single-main-media fl-wrap">
                            <!-- <div class="single-slider-wrap">
                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper lightgallery">
                                            <div class="swiper-slide hov_zoom"><img src="<?=base_url('template2/');?>images/all/1.jpg" alt=""><a href="<?=base_url('template2/');?>images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            <div class="swiper-slide hov_zoom"><img src="<?=base_url('template2/');?>images/all/1.jpg" alt=""><a href="<?=base_url('template2/');?>images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            <div class="swiper-slide hov_zoom"><img src="<?=base_url('template2/');?>images/all/1.jpg" alt=""><a href="<?=base_url('template2/');?>images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-carousel_pagination">
                                    <div class="listing-carousel_pagination-wrap">
                                        <div class="ss-slider-pagination"></div>
                                    </div>
                                </div>
                                <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i class="fal fa-long-arrow-left"></i></div>
                                <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i class="fal fa-long-arrow-right"></i></div>
                            </div> -->
                                <?php
                                    if (empty($v['img'])) {
                                        echo '<img src="'.base_url('template2/images/all/1.jpg').'" class="respimg" alt="">';
                                    }

                                    foreach ($v['img'] as $t) {
                                        if ($t->img != '') {
                                            echo '<img src="'.base_url('data/artikel/'.$t->img).'" class="respimg" alt="">';
                                        }
                                    }
                                ?>
                        </div>
                        <div class="list-single-main-item fl-wrap block_box">
                            <h2 class="post-opt-title"><a href="#"><?=$v['judul'];?></a></h2>
                            <div class="post-author"><a href="#"><img src="<?=base_url('template2/');?>images/avatar/1.jpg" alt=""><span>By , <?=@$v['nama'];?></span></a></div>
                            <div class="post-opt">
                                <ul class="no-list-style">
                                    <!-- <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li> -->
                                    <li><i class="fal fa-calendar"></i> <span><?=$v['ctddate'];?></span></li>
                                    <!-- <li><i class="fal fa-eye"></i> <span>264</span></li> -->
                                    <!-- <li><i class="fal fa-tags"></i> <a href="#">Photography</a> , <a href="#">Design</a> </li> -->
                                </ul>
                            </div>
                            <span class="fw-separator"></span> 
                            <div class="clearfix"></div>
                            <?=$v['isi']?>
                            <span class="fw-separator"></span> 
                            <div class="list-single-tags tags-stylwrap">
                            <?php
                                 if ($v['tag']) {
                                     echo '<span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>';
                                 }
                                
                                 foreach ($v['tag'] as $t) {
                                     echo '<a href="'.site_url('Blog?tag='.$t->id).'">'.$t->tag.'</a>,';
                                 }
                            ?>
                            </div>
                        </div>
                    </article>
                    <!-- article end --> 
                    <!-- post nav --> 
                    <div class="post-nav-wrap fl-wrap">
                        <?php if(!empty($ap)){ ?><a class="post-nav post-nav-prev" href="<?=$ap['id'];?>"><span class="post-nav-img"><img src="<?=base_url('data/artikel/'.$ap['img']->img);?>" alt=""></span><span class="post-nav-text"><strong>Prev Post</strong> <br><?=character_limiter($ap['judul'],30);?></span></a> <?php } ?>
                        <?php if(!empty($an)){ ?><a class="post-nav post-nav-next" href="<?=$an['id'];?>"><span class="post-nav-img"><img src="<?=base_url('data/artikel/'.$an['img']->img);?>" alt=""></span><span class="post-nav-text"><strong>Next Post</strong><br><?=character_limiter($an['judul'],30);?></span></a> <?php } ?>
                    </div>
                    <!-- post nav end --> 
                </div>
                <!-- blog conten end-->
                <!-- blog sidebar -->
                <?php $this->load->view('frontend/_partials/blog/sidebar'); ?>
                <!-- blog sidebar end -->
            </div>
        </div>
    </div>
</section>
<div class="limit-box fl-wrap"></div>