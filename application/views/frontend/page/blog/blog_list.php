  <!--  section  -->
  <section class="parallax-section single-par" data-scrollax-parent="true">
    <div class="bg par-elem "  data-bg="<?=base_url('template2/');?>images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay op7"></div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Our Last News</span></h2>
            <span class="section-separator"></span>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
        </div>
    </div>
    <div class="header-sec-link">
        <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
    </div>
</section>
<!--  section  end-->
<section class="white-bg pt-2" id="sec1">
    <div class="container">

        <div class="post-container fl-wrap">
            <div class="row">
                <!-- blog content-->
                <div class="col-md-8">
                <?php if (empty($d)) { ?>
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                            <p>Halaman tidak ditemukan</p>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <?php foreach ($d as $v) { ?>
                        <!-- article> --> 
                        <article class="post-article">
                            <div class="list-single-main-media fl-wrap">
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
                                <h2 class="post-opt-title"><a href="blog-single.html"><?=$v['judul'];?></a></h2>
                                <?=character_limiter($v['isi'],400)?>
                                <span class="fw-separator"></span>
                                <div class="post-author"><a href="#"><img src="<?=base_url('template2/');?>images/avatar/1.jpg" alt=""><span>By , <?=@$v['nama'];?></span></a></div>
                                <div class="post-opt">
                                    <ul class="no-list-style">
                                        <li><i class="fal fa-calendar"></i> <span><?=$v['ctddate'];?></span></li>
                                        <!-- <li><i class="fal fa-eye"></i> <span>264</span></li> -->
                                        <li>
                                            <?php
                                                
                                                if ($v['tag']) {
                                                    echo '<i class="fal fa-tags"></i>';
                                                }

                                                foreach ($v['tag'] as $t) {
                                                    if (@count($v['tag']) > 1) {
                                                        echo ',<a href="#">'.$t->tag.'</a>';
                                                    }else{
                                                        echo '<a href="#">'.$t->tag.'</a>';
                                                    }
                                                    
                                                }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <a href="<?=site_url('Blog/blog_single/'.$v['id'])?>" class="btn  color2-bg float-btn">Read more<i class="fal fa-angle-right"></i></a>
                            </div>
                        </article>
                        <!-- article end --> 
                    <?php } ?>
                    <!-- <div class="pagination">
                        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                        <a href="#">1</a>
                        <a href="#" class="current-page">2</a>
                        <a href="#">3</a>
                        <a href="#">...</a>
                        <a href="#">7</a>
                        <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                    </div> -->
                    <?php echo $this->pagination->create_links(); ?>
                <?php } ?>
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