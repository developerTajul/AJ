<div id="testimonial-area" class="testimonial-area bg-pattern pb-100 pt-100">
    <div class="container">
        <div class="row">
           
            <div class="col-md-8 col-md-offset-2 col-xs-12">
               
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider text-center">
                <?php 
                $q = new WP_Query(array(
                    'post_type' => 'aj_testimonials',
                    'posts_per_page'    => -1,
                    'orderby'           => 'menu-order',
                    'order'             => 'ASC'
                ));

                While( $q->have_posts() ):$q->the_post();
                ?>

                     <div class="testimonial-item">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>    
                </div>
                <!-- Testimonial Slider End -->
                
            </div>
            
        </div>
    </div>
</div>