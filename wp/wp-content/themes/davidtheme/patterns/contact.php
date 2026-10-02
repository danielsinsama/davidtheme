<?php
/**
 * Title: Contacto
 * Slug: davidtheme/contact
 * Categories: davidtheme
 */

$items = array(
	array( 'icono-telefono', 'Teléfono', '+1 (555) 123-4567' ),
	array( 'icono-correo', 'Email', 'contacto@tuagencia.com' ),
	array( 'icono-ubicacion', 'Ubicación', 'Ciudad de México, México' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"contacto","className":"seccion seccion-blanca","layout":{"type":"default"}} -->
<section class="wp-block-group seccion seccion-blanca" id="contacto"><!-- wp:group {"className":"contenedor","layout":{"type":"default"}} -->
<div class="wp-block-group contenedor"><!-- wp:group {"className":"contacto","layout":{"type":"default"}} -->
<div class="wp-block-group contacto"><!-- wp:group {"className":"contacto-info","layout":{"type":"default"}} -->
<div class="wp-block-group contacto-info"><!-- wp:paragraph {"className":"etiqueta etiqueta-naranja icono-correo"} -->
<p class="etiqueta etiqueta-naranja icono-correo">Contáctanos</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titulo-seccion titulo-seccion-grande"} -->
<h2 class="wp-block-heading titulo-seccion titulo-seccion-grande">Comencemos a Trabajar Juntos</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"contacto-intro"} -->
<p class="contacto-intro">Cuéntanos sobre tu proyecto y te ayudaremos a crear una estrategia de marketing digital que genere resultados reales.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"contacto-datos","layout":{"type":"default"}} -->
<div class="wp-block-group contacto-datos"><?php foreach ( $items as $item ) : ?>
<!-- wp:group {"className":"contacto-dato <?php echo esc_attr( $item[0] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group contacto-dato <?php echo esc_attr( $item[0] ); ?>"><!-- wp:heading {"level":3,"className":"contacto-dato-titulo"} -->
<h3 class="wp-block-heading contacto-dato-titulo"><?php echo esc_html( $item[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"contacto-dato-texto"} -->
<p class="contacto-dato-texto"><?php echo esc_html( $item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:social-links {"className":"is-style-logos-only redes"} -->
<ul class="wp-block-social-links is-style-logos-only redes"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contacto-formulario","layout":{"type":"default"}} -->
<div class="wp-block-group contacto-formulario"><!-- wp:html -->
<form class="formulario">
	<div class="campo">
		<label for="nombre">Nombre Completo *</label>
		<input id="nombre" name="nombre" type="text" placeholder="Tu nombre" required />
	</div>
	<div class="campo">
		<label for="email">Email *</label>
		<input id="email" name="email" type="email" placeholder="tu@email.com" required />
	</div>
	<div class="campo">
		<label for="telefono">Teléfono *</label>
		<input id="telefono" name="telefono" type="tel" placeholder="+52 123 456 7890" required />
	</div>
	<div class="campo">
		<label for="empresa">Empresa</label>
		<input id="empresa" name="empresa" type="text" placeholder="Nombre de tu empresa" />
	</div>
	<div class="campo">
		<label for="servicio">Servicio de Interés *</label>
		<select id="servicio" name="servicio" required>
			<option value="">Selecciona un servicio</option>
			<option value="Social Media Audiovisual">Social Media Audiovisual</option>
			<option value="Medios Digitales">Medios Digitales</option>
			<option value="Producción Audiovisual">Producción Audiovisual</option>
			<option value="SEO y CRO">SEO y CRO</option>
			<option value="Diseño y Creatividad">Diseño y Creatividad</option>
			<option value="Todos los servicios">Todos los servicios</option>
		</select>
	</div>
	<div class="campo">
		<label for="mensaje">Mensaje *</label>
		<textarea id="mensaje" name="mensaje" rows="4" maxlength="500" placeholder="Cuéntanos sobre tu proyecto..." required></textarea>
		<p class="campo-ayuda">Máximo 500 caracteres</p>
	</div>
	<button type="submit" class="formulario-enviar">Enviar Mensaje</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
