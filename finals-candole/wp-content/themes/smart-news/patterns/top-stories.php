<?php

/**
 * Title: Top Stories
 * Slug: smart-news/top-stories
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"margin":{"bottom":"0","top":"var:preset|spacing|70"}}},"className":"wp-block-section background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
<div class="wp-block-group alignfull wp-block-section background-unset"
    style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:columns {"className":"Top-stories-content"} -->
    <div class="wp-block-columns Top-stories-content">
        <!-- wp:column {"width":"66.66%","className":"top-trending-stories"} -->
        <div class="wp-block-column top-trending-stories" style="flex-basis:66.66%">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"50%","layout":{"type":"default"}} -->
                <div class="wp-block-column" style="flex-basis:50%">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"16px","bottom":"13px","left":"16px"}}},"backgroundColor":"black","className":"banner-recent-stories","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group banner-recent-stories has-black-background-color has-background"
                        style="padding-top:10px;padding-right:16px;padding-bottom:13px;padding-left:16px">
                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"32px"}}} -->
                        <h3 class="wp-block-heading" style="font-size:32px">
                            <?php echo esc_html__( 'Top Stories', 'smart-news' ); ?>
                        </h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0">
                        <!-- wp:query {"queryId":16,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template {"className":"Editor-choices"} -->
                            <!-- wp:group {"className":"background-unset top-stories-categories","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group background-unset top-stories-categories">
                                <!-- wp:post-terms {"term":"category","separator":"","style":{"spacing":{"margin":{"left":"13px"}}},"className":"Home-categories","fontFamily":"roboto"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"align":"wide","className":"top-stories-image-width","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group alignwide top-stories-image-width">
                                <!-- wp:post-featured-image {"isLink":true,"width":"553px","height":"368px","dimRatio":40,"align":"wide","style":{"border":{"radius":"10px"}}} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group background-unset">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:avatar {"size":24,"style":{"color":{}},"className":"opacity"} /-->

                                    <!-- wp:post-author-name {"className":"opacity"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-date {"className":"Post-date"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"32px","lineHeight":1.6}},"className":"popular-content","fontFamily":"playfair-display"} /-->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group background-unset"
                        style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:query {"queryId":34,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template -->
                            <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"recent-stories-width"} -->
                            <div class="wp-block-columns recent-stories-width"
                                style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                                <div class="wp-block-column is-vertically-aligned-center"
                                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%">
                                    <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","style":{"border":{"radius":"8px"}}} /-->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
                                <div class="wp-block-column is-vertically-aligned-center"
                                    style="padding-left:var(--wp--preset--spacing--30);flex-basis:60%">
                                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset top-stories-blog-content","layout":{"type":"flex","orientation":"vertical"}} -->
                                    <div class="wp-block-group background-unset top-stories-blog-content"
                                        style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"20px","lineHeight":"1.6"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontFamily":"playfair-display"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group background-unset"
                                        style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <!-- wp:post-date {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0"}}},"className":"Post-date"} /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->

                            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                            <hr class="wp-block-separator has-alpha-channel-opacity"
                                style="margin-top:var(--wp--preset--spacing--40)" />
                            <!-- /wp:separator -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"50%","layout":{"type":"default"}} -->
                <div class="wp-block-column" style="flex-basis:50%">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"16px","bottom":"13px","left":"16px"}}},"backgroundColor":"black","className":"banner-recent-stories","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group banner-recent-stories has-black-background-color has-background"
                        style="padding-top:10px;padding-right:16px;padding-bottom:13px;padding-left:16px">
                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"32px"}}} -->
                        <h3 class="wp-block-heading" style="font-size:32px">
                            <?php echo esc_html__( 'Trending Stories', 'smart-news' ); ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0">
                        <!-- wp:query {"queryId":16,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template {"className":"Editor-choices"} -->
                            <!-- wp:group {"className":"background-unset top-stories-categories","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group background-unset top-stories-categories">
                                <!-- wp:post-terms {"term":"category","separator":"","style":{"spacing":{"margin":{"left":"13px"}}},"className":"Home-categories","fontFamily":"roboto"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"align":"wide","className":"top-stories-image-width","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group alignwide top-stories-image-width">
                                <!-- wp:group {"align":"wide","className":"top-stories-image-width","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group alignwide top-stories-image-width">
                                    <!-- wp:post-featured-image {"isLink":true,"width":"553px","height":"368px","dimRatio":40,"align":"wide","style":{"border":{"radius":"10px"}}} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group background-unset">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:avatar {"size":24,"style":{"color":{}},"className":"opacity"} /-->

                                    <!-- wp:post-author-name {"className":"opacity"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-date {"className":"Post-date"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"32px","lineHeight":1.6}},"className":"popular-content","fontFamily":"playfair-display"} /-->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group background-unset"
                        style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:query {"queryId":34,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template -->
                            <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"recent-stories-width"} -->
                            <div class="wp-block-columns recent-stories-width"
                                style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                                <div class="wp-block-column is-vertically-aligned-center"
                                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%">
                                    <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","style":{"border":{"radius":"8px"}}} /-->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
                                <div class="wp-block-column is-vertically-aligned-center"
                                    style="padding-left:var(--wp--preset--spacing--30);flex-basis:60%">
                                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset top-stories-blog-content","layout":{"type":"flex","orientation":"vertical"}} -->
                                    <div class="wp-block-group background-unset top-stories-blog-content"
                                        style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"20px","lineHeight":"1.6"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontFamily":"playfair-display"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group background-unset"
                                        style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <!-- wp:post-date {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0"}}},"className":"Post-date"} /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->

                            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                            <hr class="wp-block-separator has-alpha-channel-opacity"
                                style="margin-top:var(--wp--preset--spacing--40)" />
                            <!-- /wp:separator -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"className":"background-unset","layout":{"type":"default"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"16px","bottom":"13px","left":"16px"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"black","className":"banner-recent-stories","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group banner-recent-stories has-black-background-color has-background"
                    style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:10px;padding-right:16px;padding-bottom:13px;padding-left:16px">
                    <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"32px"}}} -->
                    <h3 class="wp-block-heading" style="font-size:32px">
                        <?php echo esc_html__( 'Weekly Highlights', 'smart-news' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"recent-stories-view-more","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group recent-stories-view-more">
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}},"textColor":"body-text"} -->
                        <p class="has-body-text-color has-text-color" style="font-size:20px"><a
                                href="#"><?php echo esc_html__( 'View More', 'smart-news' ); ?></a>
                        </p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":163,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
                <div class="wp-block-query">
                    <!-- wp:post-template {"className":"banner-featured-image"} -->
                    <!-- wp:post-featured-image {"isLink":true,"width":"","height":"645px","dimRatio":30,"align":"wide","style":{"border":{"radius":"10px"}}} /-->

                    <!-- wp:group {"className":" background-unset banner","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group background-unset banner">
                        <!-- wp:post-title {"level":1,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"38px"}}} /-->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group background-unset"
                            style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group background-unset">
                                <!-- wp:avatar {"size":24,"className":"opacity"} /-->

                                <!-- wp:post-author-name {"className":"opacity"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-date {"className":"Post-date"} /-->
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
        <!-- /wp:column -->

        <!-- wp:column {"width":"","style":{"spacing":{"padding":{"left":"7rem"}}},"className":"column-right"} -->
        <div class="wp-block-column column-right" style="padding-left:7rem">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"13px","right":"16px","bottom":"13px","left":"16px"}}},"className":" background-unset right-column-latestpost","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group background-unset right-column-latestpost"
                style="padding-top:13px;padding-right:16px;padding-bottom:13px;padding-left:16px">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"32px"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <h3 class="wp-block-heading"
                    style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:32px">
                    <?php echo esc_html__( 'Categories', 'smart-news' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <div class="wp-block-column is-vertically-aligned-top"
                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%">
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"className":"categories-list-items background-unset","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group categories-list-items background-unset" style="margin-top:0">
                        <!-- wp:categories {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"style":{"color":{"background":"#c71465"},"spacing":{"padding":{"top":"10px","bottom":"10px","right":"15px","left":"15px"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group has-background"
                style="background-color:#c71465;padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px">
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group background-unset"
                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                    <!-- wp:image {"id":355,"width":55,"height":55,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img
                            src="http://localhost/wordpress/wp-content/themes/smart-news/assets/images/newsletter.png"
                            alt="" class="wp-image-355" style="border-radius:0px" width="55" height="55" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"10px"}}},"fontSize":"normal"} -->
                    <p class="has-normal-font-size" style="padding-left:10px">
                        <?php echo esc_html__( 'Subscribe To Our Weekly Newsletters', 'smart-news' ); ?></p>
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
            <!-- /wp:group -->

            <!-- wp:group {"className":"black-sale","layout":{"type":"constrained"}} -->
            <div class="wp-block-group black-sale">
                <!-- wp:image {"id":386,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="http://localhost/wordpress/wp-content/themes/smart-news/assets/images/sales.jpg" alt=""
                        class="wp-image-386" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->