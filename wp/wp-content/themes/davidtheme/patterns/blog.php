<?php
/**
 * Title: Blog (últimas entradas)
 * Slug: davidtheme/blog
 * Categories: davidtheme
 */
?>
<!-- wp:group {"tagName":"section","anchor":"blog","className":"seccion seccion-gris","layout":{"type":"default"}} -->
<section class="wp-block-group seccion seccion-gris" id="blog"><!-- wp:group {"className":"contenedor","layout":{"type":"default"}} -->
<div class="wp-block-group contenedor"><!-- wp:group {"className":"seccion-cabecera","layout":{"type":"default"}} -->
<div class="wp-block-group seccion-cabecera"><!-- wp:paragraph {"className":"etiqueta etiqueta-morada icono-articulo"} -->
<p class="etiqueta etiqueta-morada icono-articulo">Nuestro Blog</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titulo-seccion titulo-seccion-grande"} -->
<h2 class="wp-block-heading titulo-seccion titulo-seccion-grande">Últimas Tendencias en Marketing Digital</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"subtitulo subtitulo-grande"} -->
<p class="subtitulo subtitulo-grande">Mantente actualizado con las mejores estrategias y consejos para hacer crecer tu negocio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"entradas"} -->
<!-- wp:post-featured-image {"isLink":true,"className":"entrada-miniatura"} /-->

<!-- wp:group {"className":"entrada-cuerpo","layout":{"type":"default"}} -->
<div class="wp-block-group entrada-cuerpo"><!-- wp:group {"className":"entrada-meta","layout":{"type":"default"}} -->
<div class="wp-block-group entrada-meta"><!-- wp:post-terms {"term":"category","className":"entrada-categoria"} /-->

<!-- wp:post-date {"format":"j M Y","className":"entrada-fecha"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"entrada-titulo"} /-->

<!-- wp:post-excerpt {"moreText":"Leer más","excerptLength":30,"className":"entrada-extracto"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
