<?php
/**
 * Title: Hero
 * Slug: davidtheme/hero
 * Categories: davidtheme
 */

$video = 'https://cdn.pixabay.com/video/2023/05/02/160966-822726607_large.mp4';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $video ); ?>","dimRatio":40,"customOverlayColor":"#000000","isUserOverlayColor":true,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","anchor":"inicio","className":"portada"} -->
<div class="wp-block-cover portada" id="inicio" style="min-height:100vh"><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( $video ); ?>" data-object-fit="cover"></video><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"portada-contenido","layout":{"type":"default"}} -->
<div class="wp-block-group portada-contenido"><!-- wp:paragraph {"className":"pastilla"} -->
<p class="pastilla">Agencia Digital 360°</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"portada-titulo"} -->
<h1 class="wp-block-heading portada-titulo">Transformamos tu Marca en una Máquina de Generar Clientes</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"portada-texto"} -->
<p class="portada-texto">Estrategias de marketing digital que convierten visitas en ventas reales. Resultados medibles desde el primer mes.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"portada-botones"} -->
<div class="wp-block-buttons portada-botones"><!-- wp:button {"className":"boton boton-oscuro icono-calendario"} -->
<div class="wp-block-button boton boton-oscuro icono-calendario"><a class="wp-block-button__link wp-element-button" href="#contacto">Agendar Llamada</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"boton boton-borde icono-play"} -->
<div class="wp-block-button boton boton-borde icono-play"><a class="wp-block-button__link wp-element-button" href="#servicios">Ver Servicios</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"portada-cifras","layout":{"type":"default"}} -->
<div class="wp-block-group portada-cifras"><!-- wp:paragraph {"className":"cifra icono-usuario"} -->
<p class="cifra icono-usuario">150+ Clientes</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"cifra icono-pulgar"} -->
<p class="cifra icono-pulgar">98% Satisfacción</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"cifra icono-trofeo"} -->
<p class="cifra icono-trofeo">5 Años Experiencia</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
