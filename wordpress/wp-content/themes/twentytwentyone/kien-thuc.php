<?php /*Template Name: kien thuc*/ 
if ( ! defined( 'ABSPATH' )){
	exit;
}
?>
<?php get_header(); ?>
    <section>
            <div class="container" style="display: block;">
                <div class="w-100">
                    <div style="width: 850px; margin-left: auto; margin-right:auto; text-align: center;">
                        <h1 class="h1-1003">Kiến Thức</h1>
                    </div>
                </div>
                <?php 
                    // $args = array( 'post_type' => 'post', 'posts_per_page' => -1,'category_name' => array('Latest News','News')  );
                    $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'showposts' => 12 );
                    $loop = new WP_Query( $args );
                    if($loop->have_posts()):
                ?><div style="display: flex; flex-wrap: wrap;">

                        <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <div class="pd-15" style="width: calc(33% - 30px);">
                            <div class="class-00012">
                                <?php echo get_the_post_thumbnail();?>
                                <div class="pd-30">
                                    <span><?php echo get_the_date( 'd F Y');?></span>
                                    <h2>
                                        <a href="<?php the_permalink(); // lấy link của bài viết ?>">
                                            <span><?php echo get_the_title();?></span>
                                        </a>
                                    </h2>
                                    <p><?php echo the_excerpt(); // Lấy mô tả ngắn của bài post ?></p>
                                    <div>
                                        <a href="<?php the_permalink(); // lấy link của bài viết ?>">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                    </div>

                <?php endif;?>  
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
        <section>
            <div>
                <div style="max-width: 700px; width: 100%; margin-left: auto; margin-right: auto;">
                    <h1 class="h1-1003" style="text-align: center;">Giải Đáp Thắc Mắc</h1>
                    <div class="mg-t-20">
                        <div class="class-234232">
                            <?php echo do_shortcode( '[contact-form-7 id="46" title="Form 1"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <?php get_footer(); ?>
