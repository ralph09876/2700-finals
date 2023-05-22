<?php

/**
 * Title: Recent Stories
 * Slug: smart-news/recent-stories
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|40"}}},"className":"wp-block-section background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
<div class="wp-block-group alignfull wp-block-section background-unset"
    style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"Recent-block-section"} -->
    <div class="wp-block-columns Recent-block-section" style="margin-top:var(--wp--preset--spacing--70)">
        <!-- wp:column {"width":"66%","style":{"spacing":{"padding":{"right":"79px"}}},"className":"column-right"} -->
        <div class="wp-block-column column-right" style="padding-right:79px;flex-basis:66%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"16px","bottom":"13px","left":"16px"}}},"backgroundColor":"black","textColor":"background","className":"banner-recent-stories","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group banner-recent-stories has-background-color has-black-background-color has-text-color has-background"
                style="padding-top:10px;padding-right:16px;padding-bottom:13px;padding-left:16px">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"38px"}},"textColor":"body-text","fontFamily":"playfair-display"} -->
                <h3 class="wp-block-heading has-body-text-color has-text-color has-playfair-display-font-family"
                    style="font-size:38px"><?php echo esc_html__( 'Recent Stories', 'smart-news' ); ?></h3>
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

            <!-- wp:query {"queryId":18,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:columns {"align":"wide","className":"recent-stories-width"} -->
                <div class="wp-block-columns alignwide recent-stories-width">
                    <!-- wp:column {"width":"","className":"recent-content"} -->
                    <div class="wp-block-column recent-content">
                        <!-- wp:group {"className":"background-unset r","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group background-unset r">
                            <!-- wp:post-terms {"term":"category","separator":"","style":{"spacing":{"margin":{"top":"10px","left":"5px"}}},"className":"Home-categories","fontFamily":"roboto"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","dimRatio":20,"style":{"border":{"radius":"8px"}}} /-->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"37px","left":"11px"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"
                        style="padding-top:37px;padding-left:11px">
                        <!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"fontSize":"32px","lineHeight":"1.4"}},"className":"home-banner","fontFamily":"playfair-display"} /-->

                        <!-- wp:post-excerpt /-->

                        <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group background-unset">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:avatar {"size":24,"className":"opacity"} /-->

                                <!-- wp:post-author-name {"className":"opacity"} /-->

                                <!-- wp:post-date {"className":"Post-date"} /-->

                                <!-- wp:comments -->
                                <div class="wp-block-comments">
                                    <!-- wp:comments-title {"showPostTitle":false,"level":6,"className":"banner-paragraph"} /-->
                                </div>
                                <!-- /wp:comments -->
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

        <!-- wp:column {"width":"34%","className":"right-column-latestpost "} -->
        <div class="wp-block-column right-column-latestpost" style="flex-basis:34%">
            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"38px"}}} -->
                <h3 class="wp-block-heading" style="font-size:38px">
                    <?php echo esc_html__( 'Most Read', 'smart-news' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"bottom":"0","top":"2rem"},"blockGap":"0"}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group background-unset"
                style="margin-top:2rem;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"100%"} -->
                    <div class="wp-block-column" style="flex-basis:100%">
                        <!-- wp:query {"queryId":65,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template {"align":"left"} -->
                            <!-- wp:columns {"align":"wide","className":"recent-stories-width"} -->
                            <div class="wp-block-columns alignwide recent-stories-width">
                                <!-- wp:column {"width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                    <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","style":{"border":{"radius":"8px"}}} /-->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"recent-blog-content"} -->
                                <div class="wp-block-column recent-blog-content"
                                    style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:60%">
                                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem","padding":{"left":"11px"}}},"className":"background-unset","layout":{"type":"flex","orientation":"vertical"}} -->
                                    <div class="wp-block-group background-unset" style="padding-left:11px">
                                        <!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"0","bottom":"0"}},"typography":{"fontSize":"20px","lineHeight":1.6}},"fontFamily":"playfair-display"} /-->

                                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"background-unset most-read-section","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group background-unset most-read-section"
                                            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                            <!-- wp:tag-cloud {"numberOfTags":1,"smallestFontSize":"10pt","className":"recent-blog-tags","fontFamily":"roboto"} /-->

                                            <!-- wp:post-date {"format":"F j, Y","className":"Post-date","fontSize":"tiny"} /-->
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

            <!-- wp:group {"className":"categories-section-list background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group categories-section-list background-unset">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"38px"}},"fontFamily":"playfair-display"} -->
                <h3 class="wp-block-heading has-playfair-display-font-family" style="font-size:38px">
                    <?php echo esc_html__( 'Social Connect', 'smart-news' ); ?>
                </h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:social-links {"openInNewTab":true,"showLabels":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"className":"is-style-pill-shape social-icons","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"stretch"}} -->
                    <ul
                        class="wp-block-social-links has-small-icon-size has-visible-labels is-style-pill-shape social-icons">
                        <!-- wp:social-link {"url":"facebook.com","service":"facebook","label":"facebook"} /-->

                        <!-- wp:social-link {"url":"youtube.com","service":"youtube"} /-->

                        <!-- wp:social-link {"url":"linkedin.com","service":"linkedin"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:social-links {"openInNewTab":true,"showLabels":true,"size":"has-small-icon-size","className":"is-style-pill-shape social-icons","layout":{"type":"flex","flexWrap":"wrap","orientation":"vertical","justifyContent":"stretch"}} -->
                    <ul
                        class="wp-block-social-links has-small-icon-size has-visible-labels is-style-pill-shape social-icons">
                        <!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

                        <!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"wordpress.org","service":"wordpress"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->