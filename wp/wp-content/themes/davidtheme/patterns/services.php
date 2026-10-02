<?php
/**
 * Title: Servicios
 * Slug: davidtheme/services
 * Categories: davidtheme
 */

$services = array(
	array(
		'class'       => 'degradado-social icono-instagram',
		'title'       => 'Social Media Audiovisual',
		'description' => 'Creamos contenido visual impactante que conecta con tu audiencia y genera engagement real en todas las plataformas sociales.',
		'features'    => array(
			'Estrategia de contenido personalizada',
			'Producción de videos y reels',
			'Gestión de comunidades',
			'Análisis de métricas y ROI',
		),
	),
	array(
		'class'       => 'degradado-medios icono-publicidad',
		'title'       => 'Medios Digitales',
		'description' => 'Campañas publicitarias optimizadas en Google Ads, Facebook Ads y más plataformas para maximizar tu inversión.',
		'features'    => array(
			'Google Ads y SEM',
			'Facebook e Instagram Ads',
			'LinkedIn Ads B2B',
			'Optimización de conversiones',
		),
	),
	array(
		'class'       => 'degradado-produccion icono-video',
		'title'       => 'Producción Audiovisual',
		'description' => 'Creamos videos profesionales que cuentan la historia de tu marca y conectan emocionalmente con tu audiencia.',
		'features'    => array(
			'Videos corporativos',
			'Spots publicitarios',
			'Motion graphics y animación',
			'Edición y postproducción',
		),
	),
	array(
		'class'       => 'degradado-seo icono-grafico',
		'title'       => 'SEO y CRO',
		'description' => 'Optimizamos tu presencia online para aparecer en los primeros resultados de búsqueda y convertir más visitantes en clientes.',
		'features'    => array(
			'Auditoría SEO completa',
			'Optimización on-page y técnica',
			'Link building estratégico',
			'Optimización de conversiones',
		),
	),
	array(
		'class'       => 'degradado-diseno icono-paleta',
		'title'       => 'Diseño y Creatividad',
		'description' => 'Diseñamos experiencias visuales memorables que reflejan la esencia de tu marca y capturan la atención de tu audiencia.',
		'features'    => array(
			'Identidad de marca',
			'Diseño web y UX/UI',
			'Material publicitario',
			'Packaging y branding',
		),
	),
);
?>
<!-- wp:group {"tagName":"section","anchor":"servicios","className":"seccion seccion-blanca","layout":{"type":"default"}} -->
<section class="wp-block-group seccion seccion-blanca" id="servicios"><!-- wp:group {"className":"contenedor","layout":{"type":"default"}} -->
<div class="wp-block-group contenedor"><!-- wp:group {"className":"seccion-cabecera seccion-cabecera-estrecha","layout":{"type":"default"}} -->
<div class="wp-block-group seccion-cabecera seccion-cabecera-estrecha"><!-- wp:paragraph {"className":"etiqueta etiqueta-azul icono-servicio"} -->
<p class="etiqueta etiqueta-azul icono-servicio">Nuestros Servicios</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titulo-seccion titulo-seccion-grande"} -->
<h2 class="wp-block-heading titulo-seccion titulo-seccion-grande">Soluciones Completas para tu Crecimiento Digital</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rejilla rejilla-3","layout":{"type":"default"}} -->
<div class="wp-block-group rejilla rejilla-3"><?php foreach ( $services as $service ) : ?>
<!-- wp:group {"className":"tarjeta-servicio <?php echo esc_attr( $service['class'] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group tarjeta-servicio <?php echo esc_attr( $service['class'] ); ?>"><!-- wp:heading {"level":3,"className":"tarjeta-servicio-titulo"} -->
<h3 class="wp-block-heading tarjeta-servicio-titulo"><?php echo esc_html( $service['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tarjeta-servicio-texto"} -->
<p class="tarjeta-servicio-texto"><?php echo esc_html( $service['description'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"lista-checks"} -->
<ul class="wp-block-list lista-checks"><?php foreach ( $service['features'] as $feature ) : ?>
<!-- wp:list-item -->
<li><?php echo esc_html( $feature ); ?></li>
<!-- /wp:list-item -->
<?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"mas-info"} -->
<p class="mas-info"><a href="#contacto">Más Información</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
