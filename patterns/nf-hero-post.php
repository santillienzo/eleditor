<?php
/**
 * Title: Hero Post
 * Slug: news-fse/nf-hero-post
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"45px"}}},"className":"wp-block-section featured-post wow bounceInUp","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section featured-post wow bounceInUp" style="margin-top:45px">
    <!-- wp:query {"queryId":24,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">
                <!-- wp:post-featured-image {"isLink":true,"height":"560px"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"0px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;flex-basis:40%">
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}},"border":{"radius":"5px"}},"className":"wp-block-section post-content","layout":{"type":"default"}} -->
                <div class="wp-block-group wp-block-section post-content"
                    style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"cat-date-container","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group cat-date-container">
                        <!-- wp:post-terms {"term":"category","separator":""} /-->

                        <!-- wp:post-date {"textColor":"white"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"28px"}}} /-->

                    <!-- wp:post-excerpt {"textColor":"white"} /-->
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
<!-- /wp:group -->