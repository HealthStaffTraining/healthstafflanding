<?php
/**
 * Template Name: Landing Page Med Assist
 * The template for displaying all pages
 *
 */
get_header(); ?>
<script language="javascript">
    jQuery( document ).ready(function() {
        // Handler for .ready() called.
        jQuery("#aboutUs_btn").click(function() {
            window.location = "/about-us";
        });
        jQuery("#aboutUs_btn").mouseover(function() {
            jQuery("#aboutUs_btn").css({ 'background-color': '#0583b6', 'color': 'white' });
        });
        jQuery("#aboutUs_btn").mouseout(function() {
            jQuery("#aboutUs_btn").css({ 'background-color': 'white', 'color': '#0583b6' });
        });
        jQuery(".logo").click(function() {
            window.history.back();
        });
        
    });
</script>
<div id="site_container">
            <div id="logo_area">
                <div id="site_contain">
                    <img src="/wp-content/themes/blankslate/images/logo.png" class="logo"><img src="/wp-content/themes/blankslate/images/medical_assistant_text.jpg" width="196" height="58" class="drug_text">
                    <div id="aboutUs_btn">About Us</div>
                    <div id="phone_area">
                        <div id="phone_area_m">
                        Phone<br><span class="phone_number">951-694-4784</span>
                        </div>
                    </div>
                </div>
            </div>
    <div id="alt_hero_area"><?php if(USER_DEVICE == 'PHONE'){?><img src="/wp-content/themes/blankslate/images/hdr_medical_assist_m.jpg" class="alt_hero_img"><?php } ?></div>
            <div id="alt_site_contain">
                <div id="alt_form_section"><?php echo do_shortcode( '[bare_form]' ); ?><img src="/wp-content/themes/blankslate/images/form_foot.gif" class="form_foot"></div>   
                <div id="alt_title_area">
                    <h1 style="white-space: nowrap;"><?php the_title(); ?></h1>
                </div>
            </div>
            <div id="alt_site_contain">
                            
                            <div id="alt_content_contain">
                                <div id="content_mobile">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php the_content(); ?>
                                <?php endwhile; else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                                </div>
                            </div>
            </div>
            <div id="alt_footer">
                <!--<p class="smallprint">At HealthStaff Training Institute, we strive to make your educational experience a positive one. We are committed to excellence in education.</p>
                <p class="smallprint" style="padding-bottom: 50px;">For more information about our Computerized Office & Accounting program, call today to create your new tomorrow  1-855-408-8400 or fill out the short form.</p>
                -->
                <p><span class="blue">Start Training Today!</span><br>Simply fill out the form. Ready to start now? Call us at 951.694.4784</p>
                <p><u><a href="/about-us">About Us</a></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="/privacy">Privacy Policy</a></u></p>
                <p class="address"><b>Riverside County Location</b><br>28671 Calle Cortez, Suite F<br>Temecula, CA 92590</p>
                <p class="address"><b>San Bernardino County Location</b><br>601 S. Milliken Avenue, Suite A<br>Ontario, CA 91761</p>
                <p class="address"><b>Orange County Location</b><br>1970 Old Tustin Road, Suite C<br>Santa Ana, CA 92705</p>
                <p class="smallprint" style="text-align: center;">Copyright ©2015 Health Staff Training</p>

            </div>
<!-- ?php get_sidebar(); ?-->
<!-- ?php get_footer(); ?-->
</div>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60369955-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>