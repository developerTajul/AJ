<div id="blog-area" class="blog-area pb-70 pt-100">
    <div class="container">
        
        <!-- Section Title Start -->
        <div class="row">
            <div class="section-title text-center mb-60 col-xs-12"><h1>latest <span>blog</span></h1></div>
        </div>
        <!-- Section Title End -->
        
        <div class="row">
           
            <div class="blog-wrapper">
           <?php 
                $q = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page'    => 2,
                    'orderby'           => 'menu-order',
                    'order'             => 'ASC'
                ));

                While( $q->have_posts() ):$q->the_post();
                $full_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
            ?>

                <div class="col-md-6 col-xs-12 mb-30">
                    <div class="blog-item text-left">
                        <h4 class="title"><a href="#"><?php the_title(); ?></a></h4>
                        <span class="date">Date: <?php the_time('d m y'); ?></span>
                        <p><?php echo wp_trim_words(get_the_content(), '30', ''); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>
                    </div>
                </div>


        <?php endwhile; ?>

                
                
            </div>
            
        </div>
        
    </div>
</div>