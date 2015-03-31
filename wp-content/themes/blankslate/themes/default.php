<?php
/**
 * Template Name: Main
 * The template for displaying all pages
 *
 */
get_header(); ?> 
    <div id="wrapper" class="hfeed">
            <div id="logo_area">
                <div id="site_contain">
                    <a href="/"><img src="/wp-content/themes/blankslate/images/logo.png" width="214" height="54" class="logo"></a><img src="/wp-content/themes/blankslate/images/drug_text.png" width="196" height="58">
                    <div id="phone_area">
                        Phone<br><span class="phone_number">951-694-4784</span>
                    </div>
                </div>
            </div>
            <div id="hero_area">
                <div id="site_contain">
                    <div id="hero_img"><?php echo do_shortcode( '[main_form]' ); ?></div>
                </div>
            </div>
            <div id="site_contain">
                <div id="title_area">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div id="promise_area">
                    <div id="promise">Completion of this course could lead to a position in any inpatient or outpatient facility that treats addictions.</div>
                </div>
            </div>
            <div id="container">
                
                <div id="site_contain">
                    <div id="focker"></div>
                    <div id="content_contain">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
                    </div>
                </div>
                <div id="footer_bar_area">
                    <div id="site_contain">
                        <div id="footer_bar">
                            <div id="left_side">
                                <p><b>Prerequisite: Student must have a high school diploma or GED prior to enrolling in this course.</b></p>
                                <p>The Drug and Alcohol Counseling program is approved by:<br>
                                    *California Association of Alcoholism & Drug Abuse Counselors www.caadac.org</p>
                                <p>California Foundation for Advancement of Addiction Professionals www.cfaap.org</p>
                            </div>
                            <div id="right_side">
                                <div><b>CAADAC Requirements:</b></div>
                                <ul>
                                    <li>Certificate of completion from an approved institution.</li>
                                    <li>Official transcript must state the following: 288 core classroom hours, 45 classroom practicum hours, and 255 field experience hours.</li>
                                    <li>Application, portfolio processing, test, and fees to CAADAC.</li>
                                </ul>
                                    

                                <div><b>Recommended:</b></div>
                                <ul>
                                    <li>CAADAC Membership</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<!-- ?php get_sidebar(); ?-->
<?php get_footer(); ?>