<?php
/**
 * Title: Llamada a la acción
 * Slug: davidtheme/cta
 * Categories: davidtheme
 */

$background = get_theme_file_uri( 'assets/images/background_cta.jpg' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $background ); ?>","alt":"CTA Background","dimRatio":60,"customOverlayColor":"#000000","isUserOverlayColor":true,"className":"llamada"} -->
<div class="wp-block-cover llamada"><img class="wp-block-cover__image-background" alt="CTA Background" src="<?php echo esc_url( $background ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"llamada-titulo"} -->
<h2 class="wp-block-heading llamada-titulo">¿Listo para Multiplicar tus Ventas?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"llamada-subtitulo"} -->
<p class="llamada-subtitulo">Agenda una consultoría gratuita de 30 minutos</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"llamada-texto"} -->
<p class="llamada-texto">Analizaremos tu situación actual y diseñaremos una estrategia personalizada</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"llamada-acciones"} -->
<div class="wp-block-buttons llamada-acciones"><!-- wp:button {"className":"llamada-boton icono-calendario"} -->
<div class="wp-block-button llamada-boton icono-calendario"><a class="wp-block-button__link wp-element-button" href="#contacto">Agendar Consultoría Gratis</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
