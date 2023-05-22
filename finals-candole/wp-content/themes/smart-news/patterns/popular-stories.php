<?php

/**
 * Title: Popular Stories
 * Slug: smart-news/popular-stories
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"wp-block-section  background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
<div class="wp-block-group wp-block-section background-unset"
    style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"13px","left":"30px"}}},"backgroundColor":"black","className":"wp-block-section banner-recent-stories ","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group wp-block-section banner-recent-stories has-black-background-color has-background"
        style="padding-top:10px;padding-right:30px;padding-bottom:13px;padding-left:30px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"38px"}},"fontFamily":"playfair-display"} -->
        <h3 class="wp-block-heading has-playfair-display-font-family" style="font-size:38px">
            <?php echo esc_html__( 'Popular Stories', 'smart-news' ); ?></h3>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group background-unset">
            <!-- wp:paragraph {"className":"popular-blog-paragraph1"} -->
            <p class="popular-blog-paragraph1"></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"popular-blog-paragraph2"} -->
            <p class="popular-blog-paragraph2"></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|70","bottom":"0"}}},"className":"wp-block-section background-unset","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section background-unset"
    style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
    <div class="wp-block-group background-unset" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:query {"queryId":101,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":5},"layout":{"type":"constrained"}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"className":"sn-slider popular-stories-slider"} -->
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","top":"0","left":"0"},"blockGap":"var:preset|spacing|40"}},"className":"background-unset popular-stories-width","layout":{"type":"default"}} -->
            <div class="wp-block-group background-unset popular-stories-width"
                style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-left:0">
                <!-- wp:post-featured-image {"width":"","height":"","dimRatio":10,"style":{"border":{"radius":"5px","width":"0px","style":"none"}}} /-->

                <!-- wp:group {"className":"background-unset","layout":{"type":"constrained"}} -->
                <div class="wp-block-group background-unset">
                    <!-- wp:group {"className":"background-unset ","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group background-unset">
                        <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"0"}}},"className":"recent-blog-tags"} /-->

                        <!-- wp:post-date {"className":"Post-date"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group background-unset">
                        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"0px"}},"className":"popular-content","fontFamily":"playfair-display"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->