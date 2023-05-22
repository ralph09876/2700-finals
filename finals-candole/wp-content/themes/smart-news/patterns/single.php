<?php
/**
 * Title: Single
 * Slug: smart-news/single
 * Categories: featured
 *
 * @package Smart News
 * @since 1.0.0
 */
?>

<!-- wp:group {"tagName":"main","className":"wp-block-section background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
<main class="wp-block-group wp-block-section background-unset">
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
    <div class="wp-block-group background-unset">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"bottom":"0","top":"0"}}},"className":"background-unset","layout":{"type":"constrained","contentSize":"1700px"}} -->
        <div class="wp-block-group background-unset"
            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0"}}},"className":"single-page-column"} -->
            <div class="wp-block-columns single-page-column" style="margin-top:0">
                <!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                <div class="wp-block-column" style="flex-basis:66.66%">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"className":"background-unset single-post-content","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group background-unset single-post-content">
                        <!-- wp:post-featured-image {"width":"","height":"450px"} /-->

                        <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"categories","fontFamily":"roboto"} /-->

                        <!-- wp:post-title {"fontFamily":"playfair-display"} /-->

                        <!-- wp:post-content /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group background-unset" style="margin-top:var(--wp--preset--spacing--70)">
                        <!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php echo esc_html__( 'Share', 'smart-news' ); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:social-links {"className":"is-style-logos-only"} -->
                        <ul class="wp-block-social-links is-style-logos-only">
                            <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"wordpress"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:separator {"backgroundColor":"cyan-bluish-gray","className":"is-style-wide"} -->
                    <hr
                        class="wp-block-separator has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background is-style-wide" />
                    <!-- /wp:separator -->

                    <!-- wp:group {"className":"background-unset","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group background-unset">
                        <!-- wp:comments -->
                        <div class="wp-block-comments">
                            <!-- wp:comments-title {"style":{"typography":{"fontSize":"20px"}}} /-->

                            <!-- wp:comment-template -->
                            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                            <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column {"width":"40px"} -->
                                <div class="wp-block-column" style="flex-basis:40px">
                                    <!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column">
                                    <!-- wp:comment-author-name {"fontSize":"small"} /-->

                                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"background-unset","layout":{"type":"flex"}} -->
                                    <div class="wp-block-group background-unset"
                                        style="margin-top:0px;margin-bottom:0px">
                                        <!-- wp:comment-date {"fontSize":"small"} /-->

                                        <!-- wp:comment-edit-link {"fontSize":"small"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:comment-content /-->

                                    <!-- wp:comment-reply-link {"fontSize":"small"} /-->
                                </div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                            <!-- /wp:comment-template -->

                            <!-- wp:comments-pagination -->
                            <!-- wp:comments-pagination-previous /-->

                            <!-- wp:comments-pagination-numbers /-->

                            <!-- wp:comments-pagination-next /-->
                            <!-- /wp:comments-pagination -->

                            <!-- wp:post-comments-form {"className":"post-comment"} /-->
                        </div>
                        <!-- /wp:comments -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|70","bottom":"0"}}},"className":"background-unset","layout":{"type":"constrained","contentSize":"1100px"}} -->
                    <div class="wp-block-group background-unset"
                        style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"Related-post background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group Related-post background-unset"
                            style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading"><?php echo esc_html__( 'Related Post', 'smart-news' ); ?></h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:query {"queryId":68,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template -->
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"background-unset","layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group background-unset">
                                <!-- wp:post-featured-image {"width":"100%","height":"100%","style":{"border":{"radius":"9px"}}} /-->

                                <!-- wp:post-date {"className":"Post-date"} /-->

                                <!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"lineHeight":1.6}}} /-->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                <div class="wp-block-column"
                    style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:33.33%">
                    <!-- wp:pattern {"slug":"smart-news/right-side-bar"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->