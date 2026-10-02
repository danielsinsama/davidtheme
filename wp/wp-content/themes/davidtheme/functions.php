<?php
/**
 * davidtheme: funciones del tema.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DAVIDTHEME_REMIXICON', 'https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css' );
define( 'DAVIDTHEME_LOGO', 'https://static.readdy.ai/image/c97fecf3c3330a5f6e49a499b8edbd0e/b9d663d579ea81f38c98b0bd86e3f91c.png' );

/**
 * Soportes del tema y estilos del editor.
 */
function davidtheme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'davidtheme_setup' );

/**
 * Estilos y scripts del front.
 */
function davidtheme_assets() {
	$dir = get_theme_file_path();
	$uri = get_theme_file_uri();

	wp_enqueue_style( 'remixicon', DAVIDTHEME_REMIXICON, array(), '4.0.0' );
	wp_enqueue_style( 'davidtheme', $uri . '/style.css', array( 'remixicon' ), filemtime( $dir . '/style.css' ) );
	wp_enqueue_script( 'davidtheme', $uri . '/assets/js/main.js', array(), filemtime( $dir . '/assets/js/main.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'davidtheme_assets' );

/**
 * Fuente de iconos también dentro del editor de bloques (se carga como <link>
 * para que las rutas relativas de la fuente funcionen en el iframe del editor).
 */
function davidtheme_editor_icons() {
	if ( is_admin() ) {
		wp_enqueue_style( 'remixicon', DAVIDTHEME_REMIXICON, array(), '4.0.0' );
	}
}
add_action( 'enqueue_block_assets', 'davidtheme_editor_icons' );

/**
 * Categoría propia para los patrones del tema.
 */
function davidtheme_pattern_category() {
	register_block_pattern_category( 'davidtheme', array( 'label' => 'David Theme' ) );
}
add_action( 'init', 'davidtheme_pattern_category' );

/**
 * Fallback del logo: si el admin no subió un logo, se usa el del diseño original.
 */
function davidtheme_logo_fallback( $html ) {
	if ( '' !== $html ) {
		return $html;
	}

	return sprintf(
		'<a href="%1$s" class="custom-logo-link" rel="home"><img class="custom-logo" src="%2$s" alt="%3$s" width="200" height="64" /></a>',
		esc_url( home_url( '/' ) ),
		esc_url( DAVIDTHEME_LOGO ),
		esc_attr( get_bloginfo( 'name' ) )
	);
}
add_filter( 'get_custom_logo', 'davidtheme_logo_fallback' );

/**
 * Fallback de la imagen destacada: las entradas sin imagen usan una del tema.
 */
function davidtheme_thumbnail_fallback( $html, $post_id ) {
	if ( '' !== $html || 'post' !== get_post_type( $post_id ) ) {
		return $html;
	}

	$images = array( 'post1.jpg', 'post2.jpg', 'post3.jpg' );
	$image  = $images[ $post_id % count( $images ) ];

	return sprintf(
		'<img src="%1$s" alt="%2$s" width="800" height="592" loading="lazy" />',
		esc_url( get_theme_file_uri( 'assets/images/' . $image ) ),
		esc_attr( get_the_title( $post_id ) )
	);
}
add_filter( 'post_thumbnail_html', 'davidtheme_thumbnail_fallback', 10, 2 );

/**
 * En la vista de una entrada, añade sus categorías al <body> (category-seo, etc.)
 * para que la etiqueta de categoría use el mismo color que en las tarjetas.
 */
function davidtheme_body_class( $classes ) {
	if ( is_singular( 'post' ) ) {
		foreach ( get_the_category() as $category ) {
			$classes[] = 'category-' . $category->slug;
		}
	}

	return $classes;
}
add_filter( 'body_class', 'davidtheme_body_class' );

/**
 * Fallback del favicon: si no hay icono del sitio, se usa el del tema.
 */
function davidtheme_favicon_fallback() {
	if ( ! has_site_icon() ) {
		printf( '<link rel="icon" href="%s" />' . "\n", esc_url( get_theme_file_uri( 'assets/favicon.ico' ) ) );
	}
}
add_action( 'wp_head', 'davidtheme_favicon_fallback' );

/**
 * Metadatos SEO de la portada (migrados de app/layout.tsx).
 */
function davidtheme_front_page_meta() {
	if ( ! is_front_page() ) {
		return;
	}

	$title       = 'Agencia de Marketing Digital 360°';
	$description = 'Estrategias de marketing digital que convierten visitas en ventas reales. Resultados medibles desde el primer mes. Social Media, SEO, Producción Audiovisual y más.';
	$short       = 'Transformamos tu marca en una máquina de generar clientes';
	$services    = array(
		'Social Media Audiovisual' => 'Creamos contenido visual impactante que conecta con tu audiencia',
		'Medios Digitales'         => 'Campañas publicitarias optimizadas en Google Ads, Facebook Ads',
		'Producción Audiovisual'   => 'Videos profesionales que cuentan la historia de tu marca',
		'SEO y CRO'                => 'Optimizamos tu presencia online para aparecer en los primeros resultados',
		'Diseño y Creatividad'     => 'Diseñamos experiencias visuales memorables',
	);

	$offers = array();
	foreach ( $services as $name => $text ) {
		$offers[] = array(
			'@type'       => 'Offer',
			'itemOffered' => array(
				'@type'       => 'Service',
				'name'        => $name,
				'description' => $text,
			),
		);
	}

	$json_ld = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'ProfessionalService',
		'name'            => 'Pueblo Digital',
		'description'     => 'Agencia de Marketing Digital 360° que transforma tu marca en una máquina de generar clientes',
		'url'             => 'https://pueblodigital.com',
		'logo'            => DAVIDTHEME_LOGO,
		'image'           => DAVIDTHEME_LOGO,
		'priceRange'      => '$$',
		'telephone'       => '+1-234-567-8900',
		'address'         => array(
			'@type'          => 'PostalAddress',
			'addressCountry' => 'ES',
		),
		'aggregateRating' => array(
			'@type'       => 'AggregateRating',
			'ratingValue' => '4.9',
			'reviewCount' => '150',
		),
		'areaServed'      => array(
			'@type' => 'Country',
			'name'  => 'España',
		),
		'hasOfferCatalog' => array(
			'@type'           => 'OfferCatalog',
			'name'            => 'Servicios de Marketing Digital',
			'itemListElement' => $offers,
		),
	);
	?>
	<meta name="description" content="<?php echo esc_attr( $description ); ?>" />
	<meta name="keywords" content="marketing digital, social media, SEO, producción audiovisual, medios digitales, agencia digital" />
	<meta name="author" content="Pueblo Digital" />
	<meta property="og:title" content="<?php echo esc_attr( $title ); ?>" />
	<meta property="og:description" content="<?php echo esc_attr( $short ); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:site_name" content="Pueblo Digital" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>" />
	<meta name="twitter:description" content="<?php echo esc_attr( $short ); ?>" />
	<script type="application/ld+json"><?php echo wp_json_encode( $json_ld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?></script>
	<?php
}
add_action( 'wp_head', 'davidtheme_front_page_meta' );

/**
 * Contenido inicial: crea una sola vez las 3 entradas del blog del diseño
 * original, con su categoría y su imagen destacada en la biblioteca de medios.
 */
function davidtheme_seed_content() {
	if ( get_option( 'davidtheme_seeded' ) ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/taxonomy.php';

	$author = get_current_user_id();
	if ( ! $author ) {
		$admins = get_users(
			array(
				'role'   => 'administrator',
				'number' => 1,
				'fields' => 'ID',
			)
		);
		$author = $admins ? (int) $admins[0] : 0;
	}

	$posts = array(
		array(
			'title'    => '10 Estrategias de Instagram para Aumentar tu Engagement en 2025',
			'category' => 'Social Media',
			'date'     => '2025-01-15 10:00:00',
			'excerpt'  => 'Descubre las tácticas más efectivas para conectar con tu audiencia y generar más interacción en Instagram.',
			'image'    => 'post1.jpg',
		),
		array(
			'title'    => 'Cómo Posicionar tu Sitio Web en Google: Guía Completa de SEO',
			'category' => 'SEO',
			'date'     => '2025-01-12 10:00:00',
			'excerpt'  => 'Aprende las mejores prácticas de SEO para llevar tu sitio web a los primeros resultados de búsqueda.',
			'image'    => 'post2.jpg',
		),
		array(
			'title'    => 'El Poder del Video Marketing: Por Qué tu Marca lo Necesita',
			'category' => 'Video Marketing',
			'date'     => '2025-01-10 10:00:00',
			'excerpt'  => 'Descubre cómo el contenido audiovisual puede transformar tu estrategia de marketing digital.',
			'image'    => 'post3.jpg',
		),
	);

	foreach ( $posts as $data ) {
		$post_id = wp_insert_post(
			array(
				'post_title'    => $data['title'],
				'post_excerpt'  => $data['excerpt'],
				'post_content'  => "<!-- wp:paragraph -->\n<p>" . esc_html( $data['excerpt'] ) . "</p>\n<!-- /wp:paragraph -->",
				'post_status'   => 'publish',
				'post_date'     => $data['date'],
				'post_author'   => $author,
				'post_category' => array( wp_create_category( $data['category'] ) ),
			)
		);

		if ( ! $post_id || is_wp_error( $post_id ) ) {
			continue;
		}

		$source = get_theme_file_path( 'assets/images/' . $data['image'] );
		$upload = wp_upload_bits( $data['image'], null, file_get_contents( $source ) );
		if ( ! empty( $upload['error'] ) ) {
			continue;
		}

		$attachment_id = wp_insert_attachment(
			array(
				'post_mime_type' => 'image/jpeg',
				'post_title'     => $data['title'],
				'post_status'    => 'inherit',
				'post_author'    => $author,
			),
			$upload['file'],
			$post_id
		);

		if ( $attachment_id && ! is_wp_error( $attachment_id ) ) {
			wp_update_attachment_metadata( $attachment_id, wp_generate_attachment_metadata( $attachment_id, $upload['file'] ) );
			update_post_meta( $attachment_id, '_wp_attachment_image_alt', $data['title'] );
			set_post_thumbnail( $post_id, $attachment_id );
		}
	}

	update_option( 'davidtheme_seeded', 1 );
}
add_action( 'after_switch_theme', 'davidtheme_seed_content' );
