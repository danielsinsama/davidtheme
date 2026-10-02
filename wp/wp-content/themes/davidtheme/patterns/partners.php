<?php
/**
 * Title: Partners
 * Slug: davidtheme/partners
 * Categories: davidtheme
 */

$partners = array(
	'Meta Business Partner' => 'metabusiness.jpg',
	'Google Partner'        => 'googlepartner.jpg',
	'Infinito Partner'      => 'infinito.jpg',
	'Clientify Partner'     => 'cientify.jpg',
	'Klaviyo Partner'       => 'klaviyo.jpg',
	'TikTok Partner'        => 'tiktok.jpg',
);
?>
<!-- wp:group {"tagName":"section","className":"seccion seccion-gris seccion-pequena","layout":{"type":"default"}} -->
<section class="wp-block-group seccion seccion-gris seccion-pequena"><!-- wp:group {"className":"contenedor","layout":{"type":"default"}} -->
<div class="wp-block-group contenedor"><!-- wp:group {"className":"seccion-cabecera seccion-cabecera-pequena","layout":{"type":"default"}} -->
<div class="wp-block-group seccion-cabecera seccion-cabecera-pequena"><!-- wp:paragraph {"className":"etiqueta etiqueta-turquesa icono-premio"} -->
<p class="etiqueta etiqueta-turquesa icono-premio">Partners Oficiales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titulo-seccion"} -->
<h2 class="wp-block-heading titulo-seccion">Certificados por las Mejores Plataformas</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"subtitulo"} -->
<p class="subtitulo">Somos partners oficiales de las principales plataformas de marketing digital</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rejilla rejilla-6","layout":{"type":"default"}} -->
<div class="wp-block-group rejilla rejilla-6"><?php foreach ( $partners as $name => $file ) : ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tarjeta-logo"} -->
<figure class="wp-block-image size-full tarjeta-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/markbrands/' . $file ) ); ?>" alt="<?php echo esc_attr( $name ); ?>"/></figure>
<!-- /wp:image -->
<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
