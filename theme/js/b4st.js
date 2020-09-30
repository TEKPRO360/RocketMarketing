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
		

		// OWL SERVICIOS
		$('.owl-servicios').owlCarousel({
			loop:false,
			margin:0,
			nav:false,
			dots:true,
			autoplay:false,
			URLhashListener:true,
			autoplayHoverPause:false,
			animateOut: 'slideOutDown',
			animateIn: 'slideInDown',
			//autoHeight: true,
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
					items:1
				},
				1000:{
					items:1
				}
			}
		});
	
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

		// ACCIONES MENÚ

		$('.accion-menu').click(function(){
			$('.menu-custom').toggleClass('esconde-menu');
			$('body').toggleClass('no-scroll');
		});

		// SERVICIOS Y ENUMERACIÓN

		let servicios = $('#servicios').find('.contenedor-lista > .numeros-servicios'),
			servicio = servicios.find('.servicio');

		servicios.find('a:first-child').addClass('active');
		servicio.click(function(){
			servicio.removeClass('active');
			$(this).addClass('active');
		});

		let puntosServicios = $('#servicios').find('.owl-dots'),
			puntoEspecifico = puntosServicios.find('span');

		puntoEspecifico.each(function(index){
			$(this).parent().click(function(){
				let indexPunto = index + 1;
				servicio.removeClass('active');
				servicios.find($('.' + indexPunto).addClass('active'));
			});
		});

	
	});


}(jQuery));
