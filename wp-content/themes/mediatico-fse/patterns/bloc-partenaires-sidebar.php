<?php
/**
 * Title: Bloc partenaires - Sidebar
 * Slug: mediatico-fse/bloc-partenaires-sidebar
 * Categories: Widgets Sidebar
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|custom-bleu-titres","width":"3px"},"bottom":{"color":"var:preset|color|custom-bleu-titres","width":"3px"}},"spacing":{"blockGap":"0","padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--custom-bleu-titres);border-top-width:3px;border-bottom-color:var(--wp--preset--color--custom-bleu-titres);border-bottom-width:3px;padding-top:10px;padding-bottom:10px"><!-- wp:heading -->
<h2 class="wp-block-heading">INFOS PARTENAIRES</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":36,"query":{"perPage":"4","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","width":"100px","align":"center","style":{"border":{"radius":"0px"},"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"columnSpan":"1","rowSpan":"1"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"[...]","showMoreOnNewLine":false,"excerptLength":10,"style":{"typography":{"fontSize":"0.8rem"}}} /-->

<!-- wp:template-part {"slug":"post-meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->