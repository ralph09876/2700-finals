<?php
/**
 * Title: about
 * Slug: smart-news/about
 * Categories: featured
 *
 * @package smart-news
 * @since 1.0.0
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#d94343"}},"className":"wp-block-section","layout":{"type":"constrained","contentSize":""}} -->
<main class="wp-block-group wp-block-section has-background"
    style="background-color:#d94343;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%">
            <!-- wp:group {"className":"background-unset","layout":{"type":"constrained"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group background-unset">
                    <!-- wp:heading {"style":{"typography":{"fontSize":"100px"}}} -->
                    <h2 class="wp-block-heading" style="font-size:100px">
                        <?php echo esc_html__( '404', 'smart-news' ); ?>
                    </h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"25px"}}} -->
            <p style="font-size:25px"><?php echo esc_html__( 'PAGE NOT FOUND !', 'smart-news' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"17px"}}} -->
            <p style="font-size:17px">
                <?php echo esc_html__( 'The page you are looking for was moved, removed, renamed or might never existed.', 'smart-news' ); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"background-unset","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group background-unset">
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"luminous-vivid-orange","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a
                            class="wp-block-button__link has-luminous-vivid-orange-background-color has-background wp-element-button"
                            href="https://demos.eaglevisionit.com/smart-news"><?php echo esc_html__( 'BACK TO HOME PAGE', 'smart-news' ); ?></a>
                    </div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"luminous-vivid-orange","className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a
                            class="wp-block-button__link has-luminous-vivid-orange-background-color has-background wp-element-button"
                            href="https://demos.eaglevisionit.com/smart-news/contact/"><?php echo esc_html__( 'CONTACT US', 'smart-news' ); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->