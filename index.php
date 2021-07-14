<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="w-100 index">
  <!-- SECCIÓN PRIMERA -->
  <section class="intro vh-100 d-flex flex-column justify-content-center align-items-center">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo-animado.gif" alt="" class="mt-auto mb-0"> -->
    <a href="#servicios" class="mt-auto mb-5">
      <i class="fas fa-chevron-down btn-rocket"></i>
    </a>
  </section>
  <!-- FIN SECCIÓN PRIMERA -->

  <!-- SECCIÓN SERVICIOS -->
  <?php if (! wp_is_mobile() ): ?>

  <section id="servicios" class="p-5 text-white d-flex align-items-center justify-content-center">
    <?php $servicios = new WP_Query( array( 
      'post_type'       => 'servicios',
            'posts_per_page'  => -1,
            'category'        => 'current',
            'order_by'        => 'date',
            'order'           => 'ASC'
            ) ); $numero_servicio = 0; ?>
    <?php if ($servicios->have_posts() ) :?>
    <div class="d-flex flex-wrap w-100 p-0" data-aos="fade-up">
      <div class="contenedor-lista col-4 align-items-center p-2">
        <div class="numeros-servicios">
          <?php while ($servicios->have_posts() ) : $servicios->the_post(); $numero_servicio++;?>
          <a class="servicio servicio-<?php echo $numero_servicio;?> d-flex flex-wrap align-items-center " href="#<?php echo $numero_servicio;?>">
            <span class="numero text-center d-flex align-items-center" data-servicio="<?php the_title();?>"><?php if ($numero_servicio < 10):?>0<?php endif?><?php echo $numero_servicio;?></span>
            <p class="col m-0 titulo-numero"><?php echo the_title();?></p>
          </a>
          <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
      <div class="detalles-servicios col-8 owl-carousel owl-theme owl-servicios-home pr-5">
        <?php $numero_servicio = 0; while ($servicios->have_posts() ) : $servicios->the_post(); $numero_servicio++; $imagen1 = get_field('foto_home_1'); $imagen2 = get_field('foto_home_2');?>
        <div data-hash="<?php echo $numero_servicio?>" class="servicio d-flex flex-wrap pr-5">
          <img class="col-5" src="<?php echo(get_field('foto_home_1'));?>" alt="<?php the_title();?>">
          <div class="textos col-7 d-flex flex-column align-items-center">
            <h3 class="titulo"><?php the_title();?></h3>
            <?php the_field( 'resumen_servicio' ); ?>
            <a href="<?php the_permalink();?>" class="btn-ver-mas text-center">Ver más <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
      </div>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- SERVICIOS MOBILE -->
  <?php else:?>
  <?php $servicios = new WP_Query( array(
    'post_type'       => 'servicios',
    'post_per_page'   => -1,
    'category'        => 'current',
    'order_by'        => 'date',
    'order'           => 'ASC'
  )); ?>
  <?php if ($servicios->have_posts() ) :?>
  <section id="servicios" class="text-white py-4">
    <h2 class="text-white text-center titulo mb-5" data-aos="fade-up">
      Nuestros Servicios
    </h2>
    <div class="owl-theme owl-carousel owl-servicios-mobile py-5" data-aos="fade-up">
      <?php while ($servicios->have_posts() ) : $servicios->the_post();?>
      <div class="card-servicios d-flex flex-column justify-content-center">
        <img src="<?php echo(get_field('foto_home_2'));?>" alt="<?php the_title();?>">
        <h3 class="titulo text-center mt-3">
          <?php the_title();?>
        </h3>
        <?php echo wp_trim_words(the_field('resumen_servicio'), 10, '...');?>
        <a href="<?php the_permalink();?>" class="col-12 text-center">Ver más</a>
      </div>
      <?php endwhile; wp_reset_postdata();?>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <?php endif ?>
  <!-- FIN SECCIÓN SERVICIOS -->

  <!-- SECCIÓN CASOS DE ÉXITO -->
  <?php $casos = new WP_Query( array( 
          'post_type'       => 'casos',
          'posts_per_page'  => 3,
          'cat'             => 2,
          'order_by'        => 'date',
          'order'           => 'DESC'
          ) ); ?>
  <?php if ($casos->have_posts() ) :?>
  <section id="casos-de-exito" class="d-flex flex-wrap justify-content-center align-items-center px-0 py-5 ">
    <div class="w-100 d-flex flex-wrap px-1 px-md-5" data-aos="fade-up">
      <div class="titulo-casos col-12 col-md-3  d-flex">
        <p class="d-none d-md-block">Casos<br>de éxito</p>
        <p class="d-block d-md-none">Casos de éxito</p>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center justify-content-center computador" data-aos="fade-up">
        <div class="pantalla owl-theme owl-carousel owl-foto-caso">
          <?php while ($casos->have_posts() ) : $casos->the_post();
            $imagenCaso = get_field('imagen_del_caso_de_exito');
            $titulo = get_the_title();
            $titulo = str_replace(' ', '_', $titulo);?>
          <img src="<?php echo $imagenCaso; ?>" alt="<?php the_title();?> en Tekpro" data-hash="<?php echo($titulo);?>">
          <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
      <div class="col-12 col-md-3 d-flex" data-aos="fade-up">
        <div class="owl-theme owl-carousel owl-detalle-caso d-flex align-items-center">
          <?php while ($casos->have_posts() ) : $casos->the_post();
            $servicios_involucrados = get_field( 'servicios_involucrados' );
            $titulo = get_the_title();
            $titulo = str_replace(' ', '_', $titulo); ?>
          <?php if ( $servicios_involucrados ) : ?>
          <div class="detalles-casos p-2 d-flex flex-column">
            <h3 class="nombre-caso text-center text-md-right" data-hash="<?php echo($titulo);?>" data-link="<?php the_permalink();?>"><?php the_title();?></h3>
            <?php foreach ( $servicios_involucrados as $post ) : ?>
            <?php setup_postdata ( $post ); ?>
            <p class="servicio-caso text-center text-md-right"><?php the_title(); ?></p>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
          <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
    </div>
    <div class="container mt-5 owl-theme owl-carousel owl-detalle-texto" data-aos="fade-up">
    <?php while ($casos->have_posts() ) : $casos->the_post();
          $detalles_caso = get_field('detalles_del_caso');
          $titulo = get_the_title();
          $titulo = str_replace(' ', '_', $titulo); ?>
    <div class="contenedor-detalle pb-3" data-hash="<?php echo($titulo);?>">
      <?php echo $detalles_caso; ?>
      <a href="<?php echo get_site_url(); ?>/casos" class="btn-ver-mas col-12 text-center text-md-right">Ver más <i class="fas fa-chevron-right"></i></a>
    </div>
    <?php endwhile; wp_reset_postdata();?>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- FIN SECCIÓN CASOS DE ÉXITO -->

  <!-- SECCIÓN CLIENTES -->
  <?php $clientes = new WP_Query( array( 
          'post_type'       => 'clientes',
          'posts_per_page'  => -1,
          'cat'             => 4,
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); ?>
  <?php if ($clientes->have_posts() ) :?>
  <section data-pagina="test" id="clientes" class="py-5">
    <h2 class="titulo" data-aos="fade-up">Clientes</h2>
    <div class="owl-theme owl-carousel owl-logos-1">
      <?php while ($clientes->have_posts() ) : $clientes->the_post(); $logo = get_field('logo_blanco');?>
      <img src="<?php echo $logo; ?>" alt="<?php the_title();?> en Tekpro" class="">
      <?php endwhile; wp_reset_postdata();?>
    </div>
  <?php $clientes = new WP_Query( array( 
          'post_type'       => 'clientes',
          'posts_per_page'  => -1,
          'cat'             => 5,
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); ?>
    <div class="owl-theme owl-carousel owl-logos-2">
      <?php while ($clientes->have_posts() ) : $clientes->the_post(); $logo = get_field('logo_blanco');?>
      <img src="<?php echo $logo; ?>" alt="<?php the_title();?> en Tekpro" class="">
      <?php endwhile; wp_reset_postdata();?>
    </div>
  <?php $clientes = new WP_Query( array( 
          'post_type'       => 'clientes',
          'posts_per_page'  => -1,
          'cat'             => 6,
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); ?>
    <div class="owl-theme owl-carousel owl-logos-3">
      <?php while ($clientes->have_posts() ) : $clientes->the_post(); $logo = get_field('logo_blanco');?>
      <img src="<?php echo $logo; ?>" alt="<?php the_title();?> en Tekpro" class="">
      <?php endwhile; wp_reset_postdata();?>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- FIN SECCIÓN CLIENTES -->

  <!-- SECCIÓN CONTACTO -->
  <section id="contacto" class="w-100">
    <div class="pb-5 d-flex flex-wrap container align-items-center container">
      <h2 class="titulo mb-3 col-12">Contacto</h2>
      <div id="directo" class="col-12 col-md-4">
        <div class="llamanos p-0 col-12 mb-4">
          <p class="subtitulo">Llámanos</p>
          <span>+56 (2) 2869 9180</span>
        </div>
        <div class="escribenos p-0 col-12 mb-4">
          <p class="subtitulo">Escríbenos</p>
          <span><a href="mailto:contacto@rocketmkt.com">contacto@rocketmkt.com</a></span>
        </div>
      </div>
      <div id="formulario-contacto" class="col-12 col-md-8 m-auto d-flex flex-wrap">
        <?php echo do_shortcode('[contact-form-7 id="60" title="Formulario Contacto"]') ?>
      </div>
    </div>
  </section>
  <script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log('enviado');
    // ga( 'send', 'event', 'Contact Form', 'submit' );
  }, false );
  </script>
  <!-- FIN SECCIÓN CONTACTO -->
</main>

<?php 
  //b4st_main_after();
  get_footer(); 
?>