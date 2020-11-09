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

		const svg1 = '<svg width="18px" height="17px" viewBox="0 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="prev" transform="translate(8.500000, 8.500000) scale(-1, 1) translate(-8.500000, -8.500000)"><polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon><polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon><path d="M-1.48029737e-15,0.56157424 L-1.48029737e-15,16.1929159 L9.708,8.33860465 L-2.66453526e-15,0.56157424 L-1.48029737e-15,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path></g></svg>'

		const svg2 = '<svg width="18px" height="17px" viewBox="-1 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http:www.w3.org/1999/xlink"><g><polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon><polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon><path d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path></g></svg>'
		
		$('.owl-foto-caso').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			navText:[svg1,svg2],
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
