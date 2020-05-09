/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// CUSTOM CODE

		$('.accion-menu').click(function(){
			$('.menu-custom').toggleClass('esconde-menu');
			$('body').toggleClass('no-scroll');
		});

		// SERVICIOS Y ENUMERACIÓN

		var contenedorServiciosInfo = $('#servicios-info'),
			numeroServicio,
			servicio,
			tituloServicio,
			detalleServicio,
			fotoUnoServicio,
			fotoDosServicio,
			contenedorEnumeracion = $('.contenedor-enumeracion');

		contenedorEnumeracion.find('>:first-child').addClass('active');

		$('.enumeracion-servicio').click(function(){
			$(this).parent().find('.enumeracion-servicio').removeClass('active');
			$(this).addClass('active');
			var numeroServicio = $(this).data('servicio'),
				servicio = $('.servicio-'+numeroServicio),
				tituloServicio = servicio.data('titulo'),
				detalleServicio = servicio.data('descripcion'),
				recibeNumero = $(this).parent().parent().find('.numero-servicio'),
				recibeTitulo = $(this).parent().parent().find('.titulo-servicio'),
				recibeDetalleServicio = $(this).parent().parent().find('.detalle-servicio');

			console.log(detalleServicio)

			recibeNumero.fadeOut();
			recibeTitulo.fadeOut();
			recibeDetalleServicio.fadeOut();
			setTimeout(function(){
				recibeNumero.html(`Servicio ${numeroServicio}`)
				recibeTitulo.html(tituloServicio);
				recibeDetalleServicio.html(detalleServicio);
			},400);
			recibeNumero.fadeIn();
			recibeTitulo.fadeIn();
			recibeDetalleServicio.fadeIn();
		});

	});

}(jQuery));
