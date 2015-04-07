<?php
/**
 * Template Name: Landing Page 2
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
                    <img src="/wp-content/themes/blankslate/images/logo.png" width="214" height="54" class="logo"><img src="/wp-content/themes/blankslate/images/medical_assistant_text.jpg" width="196" height="58" class="drug_text">
                    <div id="aboutUs_btn">About Us</div>
                    <div id="phone_area">
                        <div id="phone_area_m">
                        Phone<br><span class="phone_number">951-694-4784</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="alt_hero_area"></div>
            <div id="alt_site_contain">
                <div id="alt_form_section"><?php echo do_shortcode( '[bare_form]' ); ?><img src="/wp-content/themes/blankslate/images/form_foot.gif" class="form_foot"></div>   
                <div id="alt_title_area">
                    <h1><?php the_title(); ?></h1>
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
                <p class="smallprint">At Florida Vocational Institute, you’ll receive a comprehensive education in a supportive environment. Come explore the world of health care by pursuing a Medical Assistant career by training with us!</p>
                <p class="smallprint" style="padding-bottom: 50px;">For more information about our Medical Assistant program, call toll free  1-855-408-8400 or fill out the short form.</p>
                <p><span class="blue">Start Training Today!</span><br>Simply fill out the form. Ready to start now? Call us at 305-665-1911</p>
                <p><u><a href="/about-us">About Us</a></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="/privacy">Privacy Policy</a></u></p>
                <p class="address">7757 West Flagler Street, Suite 220<br>Miami, FL 33144</p>
                <p>Phone 305-665-1911&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax 305-665-1911</p>
                <p class="smallprint" style="text-align: center;">For more information on graduation rates, median debt of graduates completing these programs, and other important information, visit http://fvi.edu/disclosure/<br><br>Copyright ©2015  Florida Vocational Institute.</p>

            </div>
<!-- ?php get_sidebar(); ?-->
<!-- ?php get_footer(); ?-->
</div>
<?php wp_footer(); ?>
</body>
</html>