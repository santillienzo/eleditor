<?php
/**
 * Title: Footer
 * Slug: news-fse/nf-footer
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"8rem","bottom":"8rem"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background"
    style="margin-top:0;padding-top:8rem;padding-bottom:8rem">
    <!-- wp:group {"align":"full","layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"textColor":"white"} -->
                    <h4 class="wp-block-heading has-text-align-left has-white-color has-text-color">
                        <?php echo esc_html__('Sobre nosotros', 'news-fse'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"white"} -->
                    <p class="has-text-align-left has-white-color has-text-color">
                        <?php echo esc_html__('"El Editor" es mucho más que un simple periódico local; es el vínculo vital que conecta los corazones y las mentes de la comunidad de San Martín, Mendoza. Con un compromiso inquebrantable con la verdad, la integridad y la objetividad, este diario se erige como la voz auténtica de la región, capturando los latidos de la vida cotidiana, los acontecimientos culturales y los logros locales.', 'news-fse'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->


            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"lineHeight":"1.2"}},"textColor":"white"} -->
                <h4 class="wp-block-heading has-text-align-left has-white-color has-text-color" style="line-height:1.2">
                    <?php echo esc_html__('Contáctanos', 'news-fse'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","textColor":"white"} -->
                <p class="has-text-align-left has-white-color has-text-color">
                    <?php echo esc_html__('¿Tenés una noticia que necesitás contar? Rellená este formulario y te contestaremos lo más rápido posible.', 'news-fse'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:shortcode -->
                <!-- [contact-form-7 id="327" title="Newsletter"] -->
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white"} -->
                    <h4 class="wp-block-heading has-white-color has-text-color">
                        <?php echo esc_html__('Categorías', 'news-fse'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:categories /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"color":{"background":"#dfe3e7"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide"
    style="margin-top:0;margin-bottom:0;background-color:#dfe3e7;color:#dfe3e7" />
<!-- /wp:separator -->

<!-- wp:group {"backgroundColor":"secondary","className":"wp-block-section nf-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-section nf-footer has-secondary-background-color has-background">
    <!-- wp:group {"align":"full","layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull"><!-- wp:columns {"textColor":"white","className":"nf-footer-content"} -->
        <div class="wp-block-columns nf-footer-content has-white-color has-text-color">
            <!-- wp:column {"className":"nf-footer-nav"} -->
            <div class="wp-block-column nf-footer-nav">
                <!-- wp:navigation {"style":{"spacing":{"blockGap":"var:preset|spacing|60"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small"} -->
                <!-- wp:navigation-link {"label":"Fashion","url":"#","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"Lifestyle","url":"#","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#adb0b3"},"typography":{"fontSize":"13px","lineHeight":"1","fontStyle":"normal","fontWeight":"400"}}} -->
                    <p class="has-text-align-center has-text-color"
                        style="color:#adb0b3;font-size:13px;font-style:normal;font-weight:400;line-height:1">COPYRIGHT ©
                        El Editor</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"nf-footer-social is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
                <ul class="wp-block-social-links has-icon-color nf-footer-social is-style-logos-only">
                    <!-- wp:social-link {"url":"https://www.facebook.com/profile.php?id=61559425974738","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"https://twitter.com/eleditor_sm","service":"x"} /-->

                    <!-- wp:social-link {"url":"https://www.instagram.com/eleditor_sm","service":"instagram"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:image {"id":7073,"width":74,"height":74,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized" id="news-fse-to-top"><img
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/up-arrow.png" alt=""
        class="wp-image-7073" width="74" height="74" /></figure>
<!-- /wp:image -->