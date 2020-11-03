/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		AOS.init();

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
		console.log(url);

		
		// OWL SERVICIOS
		var slideServicios = $('.owl-servicios-home');
		slideServicios.owlCarousel({
			loop:false,
			margin:0,
			nav:false,
			dots:true,
			autoplay:false,
			URLhashListener:true,
			autoplayHoverPause:false,
			animateOut: 'slideOutDown',
			animateIn: 'slideInUp',
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

		
		// SERVICIOS Y ENUMERACIÓN

		let servicios = $('#servicios').find('.contenedor-lista > .numeros-servicios'),
		servicio = servicios.find('.servicio'),
			puntosServicios = $('#servicios').find('.owl-dots'),
			puntoEspecifico = puntosServicios.find('span'),
			detalleServicioActivo = $('#servicios').find('.owl-stage').find('.active');
			
		servicios.find('a:first-child').addClass('active');
		servicio.click(function(){
			servicio.removeClass('active');
			$(this).addClass('active');
		});

		puntoEspecifico.each(function(index){
			$(this).parent().click(function(){
				let indexPunto = index + 1;
				servicio.removeClass('active');
				servicios.find($(`.servicio-${indexPunto}`).addClass('active'));
			});
		});

		// slideServicios.on('mousewheel', '.owl-stage', function (e) {
		// 	if (e.deltaY<0) {
		// 		slideServicios.trigger('next.owl');
		// 		servicios.find('.active').next().addClass('active').prev().removeClass('active');
		// 	} else {
		// 		slideServicios.trigger('prev.owl');
		// 		servicios.find('.active').prev().addClass('active').next().removeClass('active');
		// 	}
		// 	e.preventDefault();
		// });


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
		
		// CASOS DE ÉXITO
		
		$('.owl-foto-caso').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			dots:false,
			autoplay : true,
			URLhashListener:true,
			autoplayHoverPause:true,
			autoplayTimeout:6000,
			autoplaySpeed : 6000,
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
			animateIn: 'fadeIn',
			animateOut: 'fadeOut',
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

		$('.owl-detalle-texto').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			dots:false,
			URLhashListener:true,
			autoplayHoverPause:true,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut',
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

		$('.owl-servicios').owlCarousel({
			loop:false,
			margin:0,
			nav:true,
			dots:false,
			autoplay:false,
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
		
		// ACCIONES MENÚ
		
		$('.accion-menu').click(function(){
			$('.menu-custom').toggleClass('esconde-menu');
			$('body').toggleClass('no-scroll');
		});

		//FUNCIÓN PARA DESTACAR SERVICIO ACTUAL DENTRO DE PÁGINAS DE SERVICIOS
		let servicioActual = window.location.pathname,
			menu = $('.menu');

		menu.find(`[data-servicio="${home}${servicioActual}"]`).addClass('active');
		// console.log(servicioActual);

		//MENU STICKY EN INTERIOR DE SERVICIOS
		let menuInterior = $('.contenedor-menu'),
			altoSitio,
			positionWeb;
		
		$(window).scroll(function(){
			let positionWeb = $(this).scrollTop();
			if(positionWeb > 32){
				menuInterior.addClass('menu-sticky');
			}else{
				menuInterior.removeClass('menu-sticky');
			}
			// console.log(positionWeb)
		});

		// DENTRO DE CASOS DE ÉXITO
		let mostrarDetalles = $('.muestra-detalles');
		mostrarDetalles.click(function(){
			if($(this).prev().hasClass('mostrando')){
				$(this).prev().slideUp().removeClass('mostrando')
				$(this).find('i').removeClass('rotar');
			}else{
				$('.mostrando').slideUp().removeClass('mostrando');
				$('.mostrando').next().find('i').removeClass('rotar');
				$(this).prev().slideToggle('slow').addClass('mostrando');
				$(this).find('i').addClass('rotar');
			}
		});
	});


}(jQuery));
