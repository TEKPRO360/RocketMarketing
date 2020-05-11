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
		

		// OWL CAROUSEL'S
	
		// CASOS DE ÉXITO

		$('.owl-foto-caso').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			dots:false,
			URLhashListener:true,
			autoplayHoverPause:false,
			animateOut: 'slideOutDown',
			animateIn: 'flipInX',
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		});

		$('.owl-detalle-caso').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			dots:false,
			URLhashListener:true,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		});

		$('.owl-logos-1').owlCarousel({
			loop:true,
			nav:false,
			dots:false,
			autoplay : true,
			slideTransition: 'linear',
			autoplayTimeout : 4000,
			autoplayHoverPause : false,
			autoplaySpeed : 4000,
			responsive:{
				0:{
					margin:30,
					items:4
				},
				600:{
					margin:100,
					items:5
				},
				1000:{
					margin:100,
					items:7
				}
			}
		});

		$('.owl-logos-2').owlCarousel({
			loop:true,
			nav:false,
			dots:false,
			autoplay : true,
			slideTransition: 'linear',
			autoplayTimeout : 2000,
			autoplayHoverPause : false,
			autoplaySpeed : 2000,
			responsive:{
				0:{
					margin:30,
					items:4
				},
				600:{
					margin:100,
					items:5
				},
				1000:{
					margin:100,
					items:7
				}
			}
		});

		$('.owl-logos-3').owlCarousel({
			loop:true,
			nav:false,
			dots:false,
			autoplay : true,
			slideTransition: 'linear',
			autoplayTimeout : 6000,
			autoplayHoverPause : false,
			autoplaySpeed : 6000,
			responsive:{
				0:{
					margin:30,
					items:4
				},
				600:{
					margin:100,
					items:5
				},
				1000:{
					margin:100,
					items:7
				}
			}
		});

		// ACCIONES MENÚ

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
			contenedorEnumeracion = $('.contenedor-enumeracion'),
			columna1 = $('.columna-1'),
			columna2 = $('.columna-2'),
			primerServicioColUno = $('.servicio-01'),
			primerServicioColDos = $('.servicio-05'),
			tituloPrimerServicio = primerServicioColUno.data('titulo'),
			resumenPrimerServicio = primerServicioColUno.data('resumen'),
			tituloQuintoServicio = primerServicioColDos.data('titulo'),
			resumenQuintoServicio = primerServicioColDos.data('resumen'),
			fotoUno = primerServicioColUno.data('imagen1'),
			fotoDos = primerServicioColUno.data('imagen2'),
			recibeTituloPrimero = columna1.find('.titulo-servicio'),
			recibeResumenPrimero = columna1.find('.resumen-servicio'),
			recibeTituloSegundo = columna2.find('.titulo-servicio'),
			recibeResumenSegundo = columna2.find('.resumen-servicio'),
			recibeFotoUno = $('.recibe-imagen-1'),
			recibeFotoDos = $('.recibe-imagen-2');
		
		recibeTituloPrimero.html(tituloPrimerServicio);
		recibeResumenPrimero.html(resumenPrimerServicio);
		recibeTituloSegundo.html(tituloQuintoServicio);
		recibeResumenSegundo.html(resumenQuintoServicio);
		recibeFotoUno.attr('src', fotoUno);
		recibeFotoDos.attr('src', fotoDos);

		contenedorEnumeracion.find('>:first-child').addClass('active');

		$('.enumeracion-servicio').click(function(){
			$(this).parent().find('.enumeracion-servicio').removeClass('active');
			$(this).addClass('active');
			var numeroServicio = $(this).data('servicio'),
				servicio = $('.servicio-'+numeroServicio),
				tituloServicio = servicio.data('titulo'),
				resumenServicio = servicio.data('descripcion'),
				fotoUno = servicio.data('imagen1'),
				fotoDos = servicio.data('imagen2'),
				recibeNumero = $(this).parent().parent().find('.numero-servicio'),
				recibeTitulo = $(this).parent().parent().find('.titulo-servicio'),
				recibeResumenServicio = $(this).parent().parent().find('.resumen-servicio');

			recibeNumero.fadeOut();
			recibeTitulo.fadeOut();
			recibeResumenServicio.fadeOut();
			recibeFotoUno.fadeOut();
			recibeFotoDos.fadeOut();
			setTimeout(function(){
				recibeNumero.html(`Servicio ${numeroServicio}`)
				recibeTitulo.html(tituloServicio);
				recibeResumenServicio.html(resumenServicio);
				recibeFotoUno.attr('src', fotoUno);
				recibeFotoDos.attr('src', fotoDos);
			},400);
			recibeNumero.fadeIn();
			recibeTitulo.fadeIn();
			recibeResumenServicio.fadeIn();
			recibeFotoUno.fadeIn();
			recibeFotoDos.fadeIn();
		});
	
	});


}(jQuery));
