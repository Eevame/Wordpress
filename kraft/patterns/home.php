<?php
/**
 * Title: home
 * Slug: kraft/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="padding-top:0px;padding-bottom:0px"><!-- wp:group {"align":"wide","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:site-logo {"shouldSyncIcon":false,"className":"logo-fp"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:block {"ref":971} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/frontpage-cover.jpg","id":38,"dimRatio":0,"focalPoint":{"x":0.56,"y":0.24},"minHeight":700,"minHeightUnit":"px","isDark":false,"align":"full","layout":{"type":"default"},"twAnimation":"fade-in"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-38" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/frontpage-cover.jpg" style="object-position:56% 24%" data-object-fit="cover" data-object-position="56% 24%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:heading {"textAlign":"center","className":"is-style-default"} -->
<h2 class="wp-block-heading has-text-align-center is-style-default">Eeva Meltio, graafinen suunnittelija</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large","fontFamily":"tw-font-1"} -->
<p class="has-text-align-center has-tw-font-1-font-family has-large-font-size">Verkkosivut, painotuotteet, yritysilmeet</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"23px"} -->
<div style="height:23px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":96,"query":{"perPage":"9","pages":0,"offset":0,"postType":"tyot","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","align":"wide"} /-->
<!-- /wp:post-template -->

<!-- wp:html -->
<script>
window.addEventListener('scroll', function() {
    var logo = document.querySelector('.logo-fp.wp-block-site-logo.is-default-size img'); // 
    if (window.scrollY > 50) { 
        logo.classList.add('scrolled');
    } else {
        logo.classList.remove('scrolled');
    }
});
</script>
<!-- /wp:html --></div>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->