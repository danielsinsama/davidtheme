<?php
/**
 * Title: Clientes
 * Slug: davidtheme/clients
 * Categories: davidtheme
 */

// Los logos originales venían de readdy.ai/api/search-image, que ya no responde.
// Se muestra el nombre de la marca; el admin puede cambiar cada tarjeta por un bloque Imagen.
$clients = array( 'Nike', 'Adidas', 'Coca-Cola', 'Samsung', "McDonald's", 'Starbucks', 'BMW', 'Amazon', 'Netflix', 'Spotify' );
?>
<!-- wp:group {"tagName":"section","className":"seccion seccion-gris","layout":{"type":"default"}} -->
<section class="wp-block-group seccion seccion-gris"><!-- wp:group {"className":"contenedor","layout":{"type":"default"}} -->
<div class="wp-block-group contenedor"><!-- wp:group {"className":"seccion-cabecera","layout":{"type":"default"}} -->
<div class="wp-block-group seccion-cabecera"><!-- wp:paragraph {"className":"etiqueta etiqueta-turquesa icono-edificio"} -->
<p class="etiqueta etiqueta-turquesa icono-edificio">Nuestros Clientes</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titulo-seccion"} -->
<h2 class="wp-block-heading titulo-seccion">Marcas que Confían en Nosotros</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"subtitulo"} -->
<p class="subtitulo">Empresas líderes que han transformado su presencia digital con nuestras estrategias</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rejilla rejilla-5","layout":{"type":"default"}} -->
<div class="wp-block-group rejilla rejilla-5"><?php foreach ( $clients as $client ) : ?>
<!-- wp:paragraph {"className":"tarjeta-logo"} -->
<p class="tarjeta-logo"><?php echo esc_html( $client ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"clientes-nota"} -->
<p class="clientes-nota"><strong>+150 marcas</strong> han confiado en nuestros servicios de marketing digital</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
