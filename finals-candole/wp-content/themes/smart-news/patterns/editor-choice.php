<?php

/**
 * Title: Editor Choice
 * Slug: smart-news/editor-choice
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|70"}}},"className":"wp-block-section background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
<div class="wp-block-group alignfull wp-block-section background-unset"
    style="margin-top:var(--wp--preset--spacing--70);padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"16px","bottom":"13px","left":"16px"}}},"backgroundColor":"black","textColor":"background","className":"banner-recent-stories","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group banner-recent-stories has-background-color has-black-background-color has-text-color has-background"
        style="padding-top:10px;padding-right:16px;padding-bottom:13px;padding-left:16px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"32px"}},"textColor":"body-text","fontFamily":"playfair-display"} -->
        <h3 class="wp-block-heading has-body-text-color has-text-color has-playfair-display-font-family"
            style="font-size:32px"><?php echo esc_html__( 'Editors Choice', 'smart-news' ); ?></h3>
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

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"background-unset","layout":{"type":"constrained"}} -->
    <div class="wp-block-group background-unset" style="margin-top:var(--wp--preset--spacing--70)">
        <!-- wp:query {"queryId":101,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query">
            <!-- wp:post-template -->
            <!-- wp:group {"className":"background-unset banner-image-editor","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group background-unset banner-image-editor">
                <!-- wp:post-featured-image {"width":"553px","height":"368px","dimRatio":20,"style":{"border":{"radius":"10px"}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"background-unset","layout":{"type":"constrained"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:group {"className":"background-unset editor-categories","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group background-unset editor-categories">
                    <!-- wp:post-terms {"term":"category","separator":"","style":{"spacing":{"margin":{"top":"0","left":"13px"}}},"className":"Home-categories Editor","fontFamily":"roboto"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|20"}},"className":"background-unset","layout":{"type":"constrained"}} -->
                <div class="wp-block-group background-unset"
                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                    <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group background-unset">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:avatar {"size":24,"className":"opacity"} /-->

                            <!-- wp:post-author-name {"className":"opacity"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-date {"className":"Post-date"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"0px"}},"className":"popular-content"} /-->
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