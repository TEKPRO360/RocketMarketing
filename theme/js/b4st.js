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

		// CAMBIO LOGO EN MENU
		var btnHome = $('.navbar-brand').attr('href'),
			logo = $('.navbar-brand').find('img'),
			home = window.location.origin,
			url = window.location.href;

		console.log(home)
		console.log(url)
		//if(url != home){ 
		//	logo.attr('src', `${home}wp-content/themes/Rocket-Marketing/theme/img/icono-blanco.png`)
		//}
		

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
					items:1
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
					items:1
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

		// OWL SERVICIOS
		$('.owl-servicios').owlCarousel({
			loop:false,
			margin:0,
			nav:true,
			dots:false,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			responsive:{
				0:{
					margin:30,
					items:1
				},
				600:{
					margin:100,
					items:1
				},
				1000:{
					margin:100,
					items:1
				}
			}
		});

		// OWL SERVICIOS-MOBILE
		$('.owl-servicios-mobile').owlCarousel({
			stagePadding: 50,
			loop:true,
			margin:10,
			nav:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
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
			linkServicio,
			fotoUnoServicio,
			fotoDosServicio,
			contenedorEnumeracion = $('.contenedor-enumeracion'),
			columna1 = $('.columna-1'),
			columna2 = $('.columna-2'),
			primerServicioColUno = $('.servicio-01'),
			primerServicioColDos = $('.servicio-05'),
			tituloPrimerServicio = primerServicioColUno.data('titulo'),
			resumenPrimerServicio = primerServicioColUno.data('resumen'),
			linkPrimerServicio = primerServicioColUno.data('link'),
			tituloQuintoServicio = primerServicioColDos.data('titulo'),
			resumenQuintoServicio = primerServicioColDos.data('resumen'),
			linkQuintoServicio = primerServicioColDos.data('link'),
			fotoUno = primerServicioColUno.data('imagen1'),
			fotoDos = primerServicioColUno.data('imagen2'),
			btnCambia = $('.link-cambia'),
			recibeTituloPrimero = columna1.find('.titulo-servicio'),
			recibeResumenPrimero = columna1.find('.resumen-servicio'),
			recibeLinkPrimero = columna1.find('a'),
			recibeTituloSegundo = columna2.find('.titulo-servicio'),
			recibeResumenSegundo = columna2.find('.resumen-servicio'),
			recibeLinkSegundo = columna2.find('a'),
			recibeFotoUno = $('.recibe-imagen-1'),
			recibeFotoDos = $('.recibe-imagen-2');
		
		recibeTituloPrimero.html(tituloPrimerServicio);
		recibeResumenPrimero.html(resumenPrimerServicio);
		recibeLinkPrimero.attr('href', linkPrimerServicio);
		recibeTituloSegundo.html(tituloQuintoServicio);
		recibeResumenSegundo.html(resumenQuintoServicio);
		recibeFotoUno.attr('src', fotoUno);
		recibeFotoDos.attr('src', fotoDos);
		btnCambia.attr('href', linkPrimerServicio);

		contenedorEnumeracion.find('>:first-child').addClass('active');

		$('.enumeracion-servicio').click(function(){
			$(this).parent().find('.enumeracion-servicio').removeClass('active');
			$(this).addClass('active');
			var numeroServicio = $(this).data('servicio'),
				servicio = $('.servicio-'+numeroServicio),
				tituloServicio = servicio.data('titulo'),
				resumenServicio = servicio.data('descripcion'),
				linkServicio = servicio.data('link'),
				fotoUno = servicio.data('imagen1'),
				fotoDos = servicio.data('imagen2'),
				recibeNumero = $(this).parent().parent().find('.numero-servicio'),
				recibeTitulo = $(this).parent().parent().find('.titulo-servicio'),
				recibeResumenServicio = $(this).parent().parent().find('.resumen-servicio'),
				recibeLink = $(this).parent().parent().find('a');

			btnCambia.attr('href', linkServicio);
			recibeNumero.fadeOut();
			recibeTitulo.fadeOut();
			recibeResumenServicio.fadeOut();
			recibeLink.fadeOut();
			recibeFotoUno.fadeOut();
			recibeFotoDos.fadeOut();
			setTimeout(function(){
				recibeNumero.html(`Servicio ${numeroServicio}`)
				recibeTitulo.html(tituloServicio);
				recibeResumenServicio.html(resumenServicio);
				recibeLink.attr('href', linkServicio);
				recibeFotoUno.attr('src', fotoUno);
				recibeFotoDos.attr('src', fotoDos);
			},400);
			recibeNumero.fadeIn();
			recibeTitulo.fadeIn();
			recibeResumenServicio.fadeIn();
			recibeLink.fadeIn();
			recibeFotoUno.fadeIn();
			recibeFotoDos.fadeIn();
		});
	
	});


}(jQuery));
