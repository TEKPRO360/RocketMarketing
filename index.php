<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="w-100 index">
  <!-- SECCIÓN PRIMERA -->
  <section class="intro vh-100 d-flex flex-column justify-content-center align-items-center">
    <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo.png" alt="" class="mt-auto mb-0">
    <a href="#servicios" class="mt-auto mb-5">
      <i class="fas fa-chevron-down btn-rocket"></i>
    </a>
  </section>
  <!-- FIN SECCIÓN PRIMERA -->

  <!-- SECCIÓN SERVICIOS -->

  <?php $servicios = new WP_Query( array( 
          'post_type'       => 'servicios',
          'posts_per_page'  => -1,
          'category'        => 'current',
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); $numero_servicio = 0; ?>
  <?php if ($servicios->have_posts() ) :?>
  <div class="info-servicios d-none">
    <?php while ($servicios->have_posts() ) : $servicios->the_post(); $numero_servicio++; $imagen1 = get_field('foto_home_1'); $imagen2 = get_field('foto_home_2');?>
    <div class="servicio-0<?php echo $numero_servicio;?> d-none" data-titulo="<?php the_title();?>" data-resumen="<?php the_field( 'resumen_servicio' ); ?>" data-imagen1="<?php echo $imagen1; ?>" data-imagen2="<?php echo $imagen2; ?>" data-link="<?php the_permalink();?>"></div>
    <?php endwhile; wp_reset_postdata();?>
  </div>
                
  <section id="servicios" class="pb-5 px-0 text-white d-flex flex-wrap justify-content-center align-items-center">
    <div class="imagenes col-12 col-md-11 ml-auto mr-0 mb-5 mt-0 d-flex flex-row justify-content-between p-0">
      <img src="" alt="" class="recibe-imagen-1 sombra-foto d-none d-md-block">
      <img src="" alt="" class="recibe-imagen-2 sombra-foto mr-0">
    </div>
    <div class="col-12 col-md-10 d-flex flex-wrap p-0 mt-0 mb-auto bg-morado p-1">
      <div class="col-12 col-md-6 d-flex  p-0">
        <div class="contenedor-enumeracion d-flex flex-column justify-content-between align-items-center col-1 p-0">
          <p class="enumeracion-servicio text-center" data-servicio="01">01</p>
          <p class="enumeracion-servicio text-center" data-servicio="02">02</p>
          <p class="enumeracion-servicio text-center" data-servicio="03">03</p>
          <p class="enumeracion-servicio text-center" data-servicio="04">04</p>
        </div>
        <div class="detalles-servicio col-12 col-md-11 columna-1">
          <p class="numero-servicio">Servicio <span>01</span></p>
          <a href="" class="titulo-servicio mb-2"></a>
          <p class="resumen-servicio"></p>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex p-0">
        <div class="contenedor-enumeracion d-flex flex-column justify-content-between align-items-center col-1 p-0">
          <p class="enumeracion-servicio text-center" data-servicio="05">05</p>
          <p class="enumeracion-servicio text-center" data-servicio="06">06</p>
          <p class="enumeracion-servicio text-center" data-servicio="07">07</p>
          <p class="enumeracion-servicio text-center" data-servicio="08">08</p>
        </div>
        <div class="detalles-servicio col-12 col-md-11 columna-2">
          <p class="numero-servicio">Servicio <span>05</span></p>
          <a href="" class="titulo-servicio mb-2"></a>
          <p class="resumen-servicio"></p>
        </div>
      </div>
    </div>
    <div class="btn-ver-mas container d-flex mt-5 w-100">
      <button class="btn-rocket col-12 col-md-3 m-auto d-flex text-center"><p>Ver más</p><i class="fas fa-chevron-right"></i></button>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- FIN SECCIÓN SERVICIOS -->

  <!-- SECCIÓN CASOS DE ÉXITO -->
  <?php $casos = new WP_Query( array( 
          'post_type'       => 'casos',
          'posts_per_page'  => -1,
          'category'        => 'current',
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); ?>
  <?php if ($casos->have_posts() ) :?>
  <section id="casos-de-exito" class="d-flex flex-wrap justify-content-center align-items-center px-0 py-5 ">
    <div class="w-100 d-flex flex-wrap px-1 px-md-5">
      <div class="titulo-casos col-12 col-md-3  d-flex">
        <p class="d-none d-md-block">Casos<br>de éxito</p>
        <p class="d-block d-md-none">Casos de éxito</p>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center justify-content-center computador ">
        <div class="pantalla owl-theme owl-carousel owl-foto-caso">
        <?php while ($casos->have_posts() ) : $casos->the_post(); $imagenCaso = get_field('imagen_del_caso_de_exito');?>
        <img src="<?php echo $imagenCaso; ?>" alt="<?php the_title();?> en Tekpro" data-hash="<?php the_title();?>" class="">
        <?php endwhile; wp_reset_postdata();?>
      </div>
    </div>
    <div class="col-12 col-md-3 d-flex">
      <div class="owl-theme owl-carousel owl-detalle-caso d-flex align-items-center">
        <?php while ($casos->have_posts() ) : $casos->the_post(); $servicios_involucrados = get_field( 'servicios_involucrados' );?>
        <?php if ( $servicios_involucrados ) : ?>
        <div class="detalles-casos p-2 d-flex flex-column">
          <h3 class="nombre-caso text-center text-md-right" data-hash="<?php the_title();?>" data-link="<?php the_permalink();?>"><?php the_title();?></h3>
          <?php foreach ( $servicios_involucrados as $post ) : ?>
          <?php setup_postdata ( $post ); ?>
          <p class="servicio-caso text-center text-md-right"><?php the_title(); ?></p>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <a href="<?php echo get_site_url(); ?>/casos" class="col-12 text-center text-md-right">Ver más</a>
        <?php endif; ?>
        </div>
        <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
    </div>
    <div class="w-100">
      <p class="col-12 col-md-6 text-center mt-2 mt-md-auto mx-auto">Empoderamos tu marca a través de nuestras campañas de reconocimiento. logramos el posicionamiento que deseas en tu público objetivo apuntando a lograr el mayor alcance al menor costo posible.empoderamos tu marca a través de nuestras campañas de reconocimiento. logramos el posicionamiento que deseas en tu público objetivo apuntando a lograr el mayor alcance al menor costo posible.</p>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- FIN SECCIÓN CASOS DE ÉXITO -->

  <!-- SECCIÓN CLIENTES -->
  <?php $clientes = new WP_Query( array( 
          'post_type'       => 'clientes',
          'posts_per_page'  => -1,
          'category'        => 'current',
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); ?>
  <?php if ($clientes->have_posts() ) :?>
  <section id="clientes" class="py-5">
    <h2 class="titulo">Clientes</h2>
    <div class="owl-theme owl-carousel owl-logos-1">
      <?php while ($clientes->have_posts() ) : $clientes->the_post(); $logo = get_field('logo_blanco');?>
      <img src="<?php echo $logo; ?>" alt="<?php the_title();?> en Tekpro" class="">
      <?php endwhile; wp_reset_postdata();?>
    </div>
    <div class="owl-theme owl-carousel owl-logos-2">
      <?php while ($clientes->have_posts() ) : $clientes->the_post(); $logo = get_field('logo_blanco');?>
      <img src="<?php echo $logo; ?>" alt="<?php the_title();?> en Tekpro" class="">
      <?php endwhile; wp_reset_postdata();?>
    </div>
    <div class="owl-theme owl-carousel owl-logos-3">
      <?php while ($clientes->have_posts() ) : $clientes->the_post(); $logo = get_field('logo_blanco');?>
      <img src="<?php echo $logo; ?>" alt="<?php the_title();?> en Tekpro" class="">
      <?php endwhile; wp_reset_postdata();?>
    </div>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- FIN SECCIÓN CLIENTES -->

  <!-- SECCIÓN CONTACTO -->
  <section id="contacto" class="pb-5">
    <h2 class="titulo">Contacto</h2>
    <div id="formulario-contacto" class="col-12 col-md-8 m-auto d-flex flex-wrap">
      <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="nombre col-12 col-md-5">
      <input type="text" name="apellido" placeholder="Apellido" id="apellido" class="apellido col-12 col-md-5">
      <input type="text" name="empresa" placeholder="Empresa" id="empresa" class="empresa col-12 col-md-5">
      <input type="text" name="fono" placeholder="Fono" id="fono" class="fono col-12 col-md-5">
      <input type="email" name="correo" placeholder="Correo" id="correo" class="correo col-12 col-md-11">
      <textarea name="mensaje-contacto" placeholder="Mensaje" id="mensaje-contacto" cols="30" rows="10" class="mensaje-contacto col-12 col-md-11"></textarea>
      <button class="enviar-contacto btn-rocket col-10 col-md-3 mx-auto mt-3">Enviar <i class="fas fa-chevron-right ml-1"></i></button>
    </div>
  </section>
  <!-- FIN SECCIÓN CONTACTO -->
</main>

<?php 
  //b4st_main_after();
  get_footer(); 
?>
