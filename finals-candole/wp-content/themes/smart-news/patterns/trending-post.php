<?php

/**
 * Title: Trending Post
 * Slug: smart-news/trending-post
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","left":"0","right":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","className":"wp-block-section background-unset","layout":{"type":"default"}} -->
<div class="wp-block-group wp-block-section background-unset has-background-background-color has-background"
    style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:query {"queryId":68,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"default"}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|70","bottom":"0"}}},"className":"post-content background-unset","layout":{"inherit":false}} -->
        <div class="wp-block-group post-content background-unset"
            style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60"}}},"className":"trending-post-categories  background-unset","layout":{"type":"default"}} -->
            <div class="wp-block-group trending-post-categories background-unset"
                style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">
                <!-- wp:post-terms {"term":"category","textAlign":"left","separator":"","className":"Home-categories","fontFamily":"roboto"} /-->

                <!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.5","fontSize":"36px"}},"className":"home-banner","fontFamily":"playfair-display"} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0"}}},"className":"background-unset banner-content","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group background-unset banner-content"
                    style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group background-unset" style="margin-top:0;margin-bottom:0">
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
            <!-- /wp:group -->

            <!-- wp:group {"className":"trending-image","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group trending-image">
                <!-- wp:post-featured-image {"width":"","height":"740px","dimRatio":60} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->