<?php

/**
 * Title: Right Side Bar
 * Slug: smart-news/right-side-bar
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"className":"background-unset","layout":{"type":"constrained"}} -->
<div class="wp-block-group background-unset" style="margin-top:0">
    <!-- wp:group {"className":"Related-post background-unset","layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group Related-post background-unset">
        <!-- wp:heading {"level":3,"style":{"color":{"background":"#fc3c68"}}} -->
        <h3 class="wp-block-heading has-background" style="background-color:#fc3c68">
            <?php echo esc_html__( 'Follow us', 'smart-news' ); ?></h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"background-unset","layout":{"type":"constrained"}} -->
    <div class="wp-block-group background-unset" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"className":"follow-us-social-icons background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group follow-us-social-icons background-unset">
            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:social-links -->
                <ul class="wp-block-social-links">
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__( '20 Followers', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'like', 'smart-news' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"follow-us-social-icons background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group follow-us-social-icons background-unset">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:social-links -->
                <ul class="wp-block-social-links">
                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__( '20 Followers', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'like', 'smart-news' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"follow-us-social-icons background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group follow-us-social-icons background-unset">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:social-links -->
                <ul class="wp-block-social-links">
                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__( '20 Followers', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'like', 'smart-news' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"follow-us-social-icons background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group follow-us-social-icons background-unset">
            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:social-links -->
                <ul class="wp-block-social-links">
                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html__( '10 Followers', 'smart-news' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p><?php echo esc_html__( 'like', 'smart-news' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"background-unset","layout":{"type":"constrained"}} -->
<div class="wp-block-group background-unset">
    <!-- wp:gallery {"linkTo":"none"} -->
    <figure class="wp-block-gallery has-nested-images columns-default is-cropped">
        <!-- wp:image {"id":1131,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img
                src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about-5.jpg"
                alt="" class="wp-image-1131" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"className":"Related-post background-unset","layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group Related-post background-unset">
        <!-- wp:heading {"level":3,"style":{"color":{"background":"#fc3c68"}}} -->
        <h3 class="wp-block-heading has-background" style="background-color:#fc3c68">
            <?php echo esc_html__( 'Tags', 'smart-news' ); ?></h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:tag-cloud {"numberOfTags":10,"taxonomy":"category","largestFontSize":"25pt","align":"left","className":"is-style-outline"} /-->
</div>
<!-- /wp:group -->