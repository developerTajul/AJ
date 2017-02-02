<div id="work-area" class="work-area pb-90 pt-100">
    <div class="container">
        
        <!-- Section Title Start -->
        <div class="row">
            <div class="section-title text-center mb-60 col-xs-12"><h1>latest <span>works</span></h1></div>
        </div>
        <!-- Section Title End -->
        
        <div class="row row-5">
        
            <!-- Work Filter -->
            <div class="works-filter text-center">
                <button class="active" data-filter="*">all</button>
                <?php 
                $terms = get_terms(aj_portfolios_cat);

                foreach ( $terms as $term ) { ?>
                    
                     <button data-filter=".<?php echo $term->slug.' '; ?>"><?php echo $term->name; ?></button>
                <?php }

                ?>
            </div>

            <!-- Work Grid -->
            <div class="works-grid">

           <?php 
                $q = new WP_Query(array(
                    'post_type' => 'aj_portfolios',
                    'posts_per_page'    => -1,
                    'orderby'           => 'menu-order',
                    'order'             => 'ASC'
                ));

                While( $q->have_posts() ):$q->the_post();
                $full_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
            ?>

                <div class="works-item

                <?php 
                $terms = get_the_terms( get_the_ID(), 'aj_portfolios_cat');

               foreach ($terms as $term) {
                   echo $term->slug. ' ';
               }

                ?>



                col-md-3 col-sm-4 col-xs-12">
                
                    <a href="<?php echo $full_image[0]; ?>" class="gallery-popup">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>



            <?php endwhile; ?>
                

            </div>
            
        </div>
    </div>
</div>