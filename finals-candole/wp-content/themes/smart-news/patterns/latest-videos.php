<?php

/**
 * Title: latest-videos
 * Slug: smart-news/latest-videos
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|70","bottom":"0"}}},"className":"wp-block-section background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
<div class="wp-block-group alignfull wp-block-section background-unset"
    style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"16px","bottom":"13px","left":"16px"}}},"backgroundColor":"black","className":"banner-recent-stories","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group banner-recent-stories has-black-background-color has-background"
        style="padding-top:10px;padding-right:16px;padding-bottom:13px;padding-left:16px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"38px"}}} -->
        <h3 class="wp-block-heading" style="font-size:38px"><?php echo esc_html__( 'Latest Videos', 'smart-news' ); ?>
        </h3>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"recent-stories-view-more","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group recent-stories-view-more">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}},"textColor":"body-text"} -->
            <p class="has-body-text-color has-text-color" style="font-size:20px"><a
                    href="#"><?php echo esc_html__( 'View More', 'smart-news' ); ?></a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"latest-video-blog"} -->
    <div class="wp-block-columns latest-video-blog" style="margin-top:var(--wp--preset--spacing--70)">
        <!-- wp:column {"width":"34%"} -->
        <div class="wp-block-column" style="flex-basis:34%">
            <!-- wp:query {"queryId":23,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:columns {"verticalAlignment":"center","className":"recent-stories-width"} -->
                <div class="wp-block-columns are-vertically-aligned-center recent-stories-width">
                    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
                        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%"} /-->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"className":"recent-blog-content"} -->
                    <div class="wp-block-column is-vertically-aligned-center recent-blog-content"
                        style="padding-left:var(--wp--preset--spacing--30);flex-basis:60%">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"background-unset","layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group background-unset"
                            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                            <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","left":"0","bottom":"20px"}},"typography":{"fontSize":"20px"}},"fontFamily":"playfair-display"} /-->

                            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group background-unset">
                                <!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"Post-date"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:separator {"className":"is-style-default"} -->
                <hr class="wp-block-separator has-alpha-channel-opacity is-style-default" />
                <!-- /wp:separator -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66%"} -->
        <div class="wp-block-column" style="flex-basis:66%">
            <!-- wp:query {"queryId":222,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:columns {"align":"wide"} -->
                <div class="wp-block-columns alignwide">
                    <!-- wp:column {"width":"100%","className":"banner-featured-image"} -->
                    <div class="wp-block-column banner-featured-image" style="flex-basis:100%">
                        <!-- wp:group {"className":"background-unset","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group background-unset">
                            <!-- wp:group {"className":"background-unset main-latest","layout":{"type":"constrained","justifyContent":"right"}} -->
                            <div class="wp-block-group background-unset main-latest">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"background-unset banner","layout":{"type":"constrained","justifyContent":"right"}} -->
                                <div class="wp-block-group background-unset banner">
                                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"36px"}},"className":"post-titile"} /-->

                                    <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group background-unset">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group background-unset">
                                            <!-- wp:avatar {"size":30} /-->

                                            <!-- wp:post-author-name /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:post-date {"className":"Post-date"} /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-featured-image {"isLink":true,"width":"","height":"","dimRatio":30} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->