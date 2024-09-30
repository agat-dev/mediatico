<?php
/**
 * Title: Widget Edito - Sidebar
 * Slug: mediatico-fse/widget-edito-sidebar
 * Categories: Widgets Sidebar
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|custom-bleu-titres","width":"3px"},"bottom":{"color":"var:preset|color|custom-bleu-titres","width":"3px"}},"spacing":{"blockGap":"0","padding":{"top":"10px","bottom":"10px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--custom-bleu-titres);border-top-width:3px;border-bottom-color:var(--wp--preset--color--custom-bleu-titres);border-bottom-width:3px;margin-bottom:20px;padding-top:10px;padding-bottom:10px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}}} -->
<h2 class="wp-block-heading" style="text-transform:uppercase">EDITO</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":36,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","align":"center","style":{"border":{"radius":"0px"},"spacing":{"margin":{"bottom":"15px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"[...]","showMoreOnNewLine":false,"excerptLength":35,"fontSize":"small"} /-->

<!-- wp:template-part {"slug":"post-meta"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->