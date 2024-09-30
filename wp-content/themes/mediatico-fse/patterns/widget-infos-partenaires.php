<?php
/**
 * Title: Widget Infos partenaires
 * Slug: mediatico-fse/widget-infos-partenaires
 * Categories: Widgets Sidebar
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"35px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:35px"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|custom-bleu-titres","width":"3px"},"bottom":{"color":"var:preset|color|custom-bleu-titres","width":"3px"}},"spacing":{"blockGap":"0","padding":{"top":"10px","bottom":"10px"},"margin":{"bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--custom-bleu-titres);border-top-width:3px;border-bottom-color:var(--wp--preset--color--custom-bleu-titres);border-bottom-width:3px;margin-bottom:20px;padding-top:10px;padding-bottom:10px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}}} -->
<h2 class="wp-block-heading" style="text-transform:uppercase">INFOS PARTENAIRES</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":36,"query":{"perPage":"4","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"center","style":{"border":{"radius":"0px"},"spacing":{"margin":{"bottom":"0px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"[...]","showMoreOnNewLine":false,"excerptLength":25,"style":{"typography":{"fontSize":"0.8rem"}}} /-->

<!-- wp:template-part {"slug":"post-meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->