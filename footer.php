<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AJ
 */

?>

<!-- Contact Area Start -->
<div id="contact-area" class="contact-area bg-pattern pb-100 pt-100">
    <div class="container">
        
        <!-- Section Title Start -->
        <div class="row">
            <div class="section-title text-center mb-60 col-xs-12"><h1>get in <span>touch</span></h1></div>
        </div>
        <!-- Section Title End -->
        
        <div class="row">
            
            <!-- Contact Map -->
            <div class="col-md-5 col-md-offset-1 col-xs-12">
                <div id="contact-map"></div>
            </div>
            
            <div class="col-md-5 col-xs-12">
               
                <!-- Contact Form -->
                <div class="contact-form text-left fix">
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="input-box-2">
                            <div class="input-box"><input name="name" type="text" placeholder="Your Name"></div>
                            <div class="input-box"><input name="email" type="text" placeholder="Your Email"></div>
                        </div>
                        <div class="input-box"><textarea name="message" placeholder="Your Message"></textarea></div>
                        <div class="input-box"><input type="submit" value="submit"></div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                
                <!-- Contact Info -->
                <div class="contact-info text-left fix">
                    <div class="single">
                        <storng>Phone :</storng>
                        <p>+989 658 6585</p>
                    </div>
                    <div class="single">
                        <storng>Email :</storng>
                        <p>ajinfo@gmail.com</p>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>
<!-- Contact Area End -->



<!-- Footer Area Start -->
<div class="footer-area">
    <div class="container">
        <div class="row">
           
            <!-- Copyright -->
            <div class="copyright text-left col-sm-6 col-xs-12">
                <p>Copyright &copy; AJ 2016.All right reserved.</p>
            </div>
            
            <!-- Author Credit -->
            <div class="author-credit text-right col-sm-6 col-xs-12">
                <p>Created by <a href="http://devitems.com/">Devitems</a> With <i class="icon_heart_alt"></i></p>
            </div>
            
        </div>
    </div>
</div>
<!-- Footer Area End -->

</div>

<?php wp_footer(); ?>

</body>
</html>
