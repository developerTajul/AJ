<?php 

add_shortcode('aj_services_area', 'aj_services_area_fn');

function aj_services_area_fn( $atts, $content ){
extract( shortcode_atts(array(

), $atts) );

ob_start();
?>

<!-- About Area Start -->
<div id="about-area" class="about-area pb-55 pt-100">
    <div class="container">
        
        <div class="row">


        <?php echo do_shortcode($content); ?>

            

            
          
            
            <!-- Funfacts -->
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-xs-12 mb-45">
                <div class="row">
                   
                    <div class="fun-facts text-center fix">

                        <!-- Single Fatcs -->
                        <div class="single-fatcs">
                            <h2 class="counter">78</h2>
                            <p>Happy Clients</p>
                        </div>

                        <!-- Single Fatcs -->
                        <div class="single-fatcs">
                            <h2 class="counter">150</h2>
                            <p>Project</p>
                        </div>

                        <!-- Single Fatcs -->
                        <div class="single-fatcs">
                            <h2 class="counter">50</h2>
                            <p>Award Winning</p>
                        </div>

                        <!-- Single Fatcs -->
                        <div class="single-fatcs">
                            <h2 class="counter">78</h2>
                            <p>Cups of Coffee</p>
                        </div>

                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>
</div>
<!-- About Area End -->

<?php return ob_get_clean();
}




/**
*
* about title
*
*/
add_shortcode('aj_about_title', 'aj_about_title_fn');

function aj_about_title_fn($atts, $content){
extract( shortcode_atts(array(
    'title'     => 'Who I Am',
    'firstName' => 'Tajul',
    'lastName'  => 'Islam'

), $atts));

ob_start();
?>

            
            <div class="about-title text-center col-xs-12">
                <h4><?php echo $title; ?></h4>
                <h1>I Am <?php echo $firstName; ?> <span><?php echo $lastName; ?></span></h1>
            </div>


<?php return ob_get_clean();
}



/**
*
* about title
*
*/
add_shortcode('aj_about_content', 'aj_about_content_fn');

function aj_about_content_fn($atts, $content){
extract( shortcode_atts(array(
    'title'     => 'Hello!',
    'text' => 'Contrary to popular belief, Lorem Ipsum is not simply rand text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professo.',
    'note'  => 'Not simply random text. It has roots in a piee of classical Latin hayre manus,manus cina onek kosto..face dekhe manus cina jay na.'

), $atts));

ob_start();
?>

            
                       <!-- About Content -->
            <div class="col-md-7 col-xs-12 mb-45">
                <div class="about-content text-left">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $text; ?></p>
                    <p><?php echo $note; ?></p>
                </div>
            </div>


<?php return ob_get_clean();
}



/**
*
* about skill
*
*/
add_shortcode('aj_about_skill_wrapper', 'aj_about_skill_wrapper_fn');

function aj_about_skill_wrapper_fn($atts, $content){
extract( shortcode_atts(array(
    'title'     => 'Hello!',
    'progress'     => 'Hello!'


), $atts));

ob_start();
?>

            
  <!-- About Skills -->
            <div class="col-md-5 col-xs-12 mb-45">
                <div class="skills text-left">
                    

                   <?php echo do_shortcode(); ?>
                   
                    
                </div>
            </div>


<?php return ob_get_clean();
}




/**
*
* about single skill
*
*/
add_shortcode('aj_about_single_skill', 'aj_about_single_skill_fn');

function aj_about_single_skill_fn($atts, $content){
extract( shortcode_atts(array(
    'title'     => 'Photoshop!',
    'progress_count'     => 90


), $atts));

ob_start();
?>            

<!-- Single Progress -->
    <p class="progress-text"><?php echo $title; ?></p>
    <div class="progress">
        <div class="progress-bar" data-percent="<?php echo $progress_count; ?>%" style="width: <?php echo $progress_count; ?>%;"></div>
    </div>


<?php return ob_get_clean();
}