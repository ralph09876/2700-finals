<?php

/**
 * Title: Footer
 * Slug: featured/footer
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<p><a href="#" class="scroll-to-top"><i class="fa fa-angle-up"><br />
        </i> </a></p>

<!-- wp:group {"style":{"color":{"background":"#0b1128"},"spacing":{"margin":{"bottom":"30px","top":"40px"},"padding":{"top":"50px","bottom":"50px"}}},"className":"wp-block-section footer","layout":{"type":"default"}} -->
<div class="wp-block-group wp-block-section footer has-background"
    style="background-color:#0b1128;margin-top:40px;margin-bottom:30px;padding-top:50px;padding-bottom:50px">
    <!-- wp:columns {"className":"footer-column"} -->
    <div class="wp-block-columns footer-column">
        <!-- wp:column {"width":"20%"} -->
        <div class="wp-block-column" style="flex-basis:20%">
            <!-- wp:group {"className":"background-unset site-title","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group background-unset site-title">
                <!-- wp:site-title {"style":{"typography":{"fontSize":"37px"}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"left","className":"recent-stories-view-more footer-paragraph","fontSize":"medium","fontFamily":"roboto"} -->
            <p
                class="has-text-align-left recent-stories-view-more footer-paragraph has-roboto-font-family has-medium-font-size">
                <strong><?php echo esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 'smart-news' ); ?></strong>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"35%","className":"margin-top-footer"} -->
        <div class="wp-block-column margin-top-footer" style="flex-basis:35%">
            <!-- wp:group {"style":{"typography":{"fontSize":"20px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset right-column-latestpost align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset right-column-latestpost align-left"
                style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:20px">
                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><?php echo esc_html__( 'Latest News', 'smart-news' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:latest-posts {"postsToShow":2,"excerptLength":10,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":113,"featuredImageSizeHeight":113,"align":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"latest-news-footer","fontSize":"upper-heading","fontFamily":"roboto"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"15%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"margin-top-footer"} -->
        <div class="wp-block-column margin-top-footer" style="flex-basis:15%">
            <!-- wp:group {"className":"background-unset right-column-latestpost align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset right-column-latestpost align-left">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}}} -->
                <h3 class="wp-block-heading" style="font-size:20px">
                    <?php echo esc_html__( 'Contact us', 'smart-news' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"background-unset align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset align-left">
                <!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
                <p class="has-text-align-left has-medium-font-size">
                    <?php echo esc_html__( '66 Brooklyn street, New York', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"background-unset align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset align-left">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><?php echo esc_html__( '+14934437349', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"background-unset align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset align-left">
                <!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
                <p class="has-text-align-right has-medium-font-size">
                    <?php echo esc_html__( 'sobanive@mailinator.com', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"20%","className":"margin-top-footer"} -->
        <div class="wp-block-column margin-top-footer" style="flex-basis:20%">
            <!-- wp:group {"className":"background-unset right-column-latestpost align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset right-column-latestpost align-left">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}}} -->
                <h3 class="wp-block-heading" style="font-size:20px">
                    <?php echo esc_html__( 'Subscribe Newsletter', 'smart-news' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"background-unset align-left","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group background-unset align-left">
                <!-- wp:paragraph {"fontSize":"medium","fontFamily":"roboto"} -->
                <p class="has-roboto-font-family has-medium-font-size"><?php echo esc_html__( 'Get the latest creative news from Katerio
                    magazine', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"background-unset align-left footer-email-bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset align-left footer-email-bar">
                <!-- wp:shortcode -->
                [contact-form-7 id="2009" title="smart-news form"]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0px"}}},"className":"wp-block-section","layout":{"type":"default"}} -->
<div class="wp-block-group wp-block-section" style="padding-bottom:0px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'privacy policy', 'smart-news' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"> | Terms&amp;Condition</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","left":"0","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Copyright ©2023 Smart News by', 'smart-news' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://www.eaglevisionit.com/"> <?php echo esc_html__( 'Eagle Vision IT', 'smart-news' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->