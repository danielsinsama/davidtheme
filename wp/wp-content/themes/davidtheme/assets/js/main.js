// Navbar: fondo negro al hacer scroll (equivalente al estado isScrolled de Navbar.tsx).
( function () {
	var header = document.querySelector( '.cabecera' );
	if ( ! header ) {
		return;
	}

	var handleScroll = function () {
		header.classList.toggle( 'con-scroll', window.scrollY > 50 );
	};

	window.addEventListener( 'scroll', handleScroll, { passive: true } );
	handleScroll();
} )();

// Carrusel en móvil: añade flechas anterior/siguiente a cada .rejilla.
// No toca las tarjetas: solo envuelve la rejilla y desplaza una tarjeta por clic.
( function () {
	document.querySelectorAll( '.rejilla' ).forEach( function ( rejilla ) {
		var carrusel = document.createElement( 'div' );
		carrusel.className = 'carrusel';
		rejilla.parentNode.insertBefore( carrusel, rejilla );
		carrusel.appendChild( rejilla );

		var crearFlecha = function ( tipo, texto, direccion ) {
			var flecha = document.createElement( 'button' );
			flecha.type = 'button';
			flecha.className = 'carrusel-flecha carrusel-flecha-' + tipo;
			flecha.setAttribute( 'aria-label', texto );
			flecha.addEventListener( 'click', function () {
				rejilla.scrollBy( { left: direccion * rejilla.clientWidth, behavior: 'smooth' } );
			} );
			carrusel.appendChild( flecha );
			return flecha;
		};

		var anterior = crearFlecha( 'anterior', 'Anterior', -1 );
		var siguiente = crearFlecha( 'siguiente', 'Siguiente', 1 );

		var actualizar = function () {
			var maximo = rejilla.scrollWidth - rejilla.clientWidth;
			anterior.disabled = rejilla.scrollLeft <= 1;
			siguiente.disabled = rejilla.scrollLeft >= maximo - 1;
		};

		rejilla.addEventListener( 'scroll', actualizar, { passive: true } );
		window.addEventListener( 'resize', actualizar );
		actualizar();
	} );
} )();
