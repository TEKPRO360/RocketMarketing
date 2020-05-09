<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="w-100">
  <!-- SECCIÓN PRIMERA -->
  <section class="intro vh-100 d-flex flex-column justify-content-center align-items-center destacar">
    <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo.png" alt="" class="mt-auto mb-0">
    <a href="#servicios" class="mt-auto mb-5">
      <i class="fas fa-chevron-down btn-rocket"></i>
    </a>
  </section>
  <!-- FIN SECCIÓN PRIMERA -->

  <!-- SECCIÓN SERVICIOS -->

  <?php $servicios = new WP_Query( array( 
          'post_type' => 'servicios',
          'posts_per_page' => -1,
          'category' => 'current'
          ) ); $numero_servicio = 0; ?>
  <?php if ($servicios->have_posts() ) :?>
  <div class="info-servicios d-none">
    <?php while ($servicios->have_posts() ) : $servicios->the_post(); $numero_servicio++; $imagen1 = get_field('imagen_home_1'); $imagen2 = get_field('imagen_home_2');?>
    <div class="servicio-0<?php echo $numero_servicio;?> d-none" data-titulo="<?php the_title();?>" data-descripcion="<?php the_field( 'descripcion_del_servicio' ); ?>" data-imagen1="<?php echo $imagen1; ?>" data-imagen2="<?php echo $imagen2; ?>"></div>
    <?php endwhile; wp_reset_postdata();?>
  </div>
                
  <section id="servicios" class="vh-100 text-white d-flex flex-wrap justify-content-center align-items-center destacar">
    <div class="imagenes col-11 ml-auto mr-0 mb-0 mt-auto">
      <img src="" alt="" class="recibe-imagen-1">
      <img src="" alt="" class="recibe-imagen-2">
    </div>
    <div class="col-12 col-md-10 d-flex flex-wrap p-0 mt-0 mb-auto">
      <div class="col-12 col-md-6 d-flex  p-0">
        <div class="contenedor-enumeracion d-flex flex-column justify-content-between align-items-center col-1 p-0">
          <p class="enumeracion-servicio text-center" data-servicio="01" data-titulo="Campañas de Branding" data-detalle="Empoderamos tu marca a través de nuestras campañas de reconocimiento. Logramos el posicionamiento que deseas en tu público objetivo apuntando a lograr el mayor alcance al menor costo posible.">01</p>
          <p class="enumeracion-servicio text-center" data-servicio="02" data-titulo="Campañas de Google Shopping" data-detalle="Sincronizamos tu catálogo de productos con google, lo que nos permite estar presentes en google shopping y activar campañas de smart shopping. Este nuevo formato ha sido muy exitoso y rentable en el objetivo de aumentar las ventas online.">02</p>
          <p class="enumeracion-servicio text-center" data-servicio="03" data-titulo="Posicionamiento en buscadores (SEM)" data-detalle="A través de nuestras campañas de posicionamiento, damos visibilidad a tu negocio en los resultados de búsquedas de google. Empleamos la estrategia más conveniente según tus objetivos, tanto si van orientados a generar ventas online (performance) o branding.">03</p>
          <p class="enumeracion-servicio text-center" data-servicio="04" data-titulo="Campañas de performance" data-detalle="Las campañas de performance nos permiten aumentar las ventas online de tu sitio web, al tiempo que rentabilizamos tu inversión. Te proponemos un mix de medios adecuados a esos objetivos.">04</p>
        </div>
        <div class="detalles-servicio col-12 col-md-11">
          <p class="numero-servicio">Servicio <span>01</span></p>
          <p class="titulo-servicio"><?php echo esc_html( get_the_title(14) ); ?></p>
          <p class="detalle-servicio">Empoderamos tu marca a través de nuestras campañas de reconocimiento. Logramos el posicionamiento que deseas en tu público objetivo apuntando a lograr el mayor alcance al menor costo posible.</p>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex  p-0">
        <div class="contenedor-enumeracion d-flex flex-column justify-content-between align-items-center col-1 p-0">
          <p class="enumeracion-servicio text-center" data-servicio="05" data-titulo="Campañas de Branding" data-detalle="Empoderamos tu marca a través de nuestras campañas de reconocimiento. Logramos el posicionamiento que deseas en tu público objetivo apuntando a lograr el mayor alcance al menor costo posible.">05</p>
          <p class="enumeracion-servicio text-center" data-servicio="06" data-titulo="Campañas de Google Shopping" data-detalle="Sincronizamos tu catálogo de productos con <strong>google</strong>, lo que nos permite estar presentes en google shopping y activar campañas de smart shopping. Este nuevo formato ha sido muy exitoso y rentable en el objetivo de aumentar las ventas online.">06</p>
          <p class="enumeracion-servicio text-center" data-servicio="07" data-titulo="Posicionamiento en buscadores (SEM)" data-detalle="A través de nuestras campañas de posicionamiento, damos visibilidad a tu negocio en los resultados de búsquedas de google. Empleamos la estrategia más conveniente según tus objetivos, tanto si van orientados a generar ventas online (performance) o branding.">07</p>
          <p class="enumeracion-servicio text-center" data-servicio="08" data-titulo="Campañas de performance" data-detalle="Las campañas de performance nos permiten aumentar las ventas online de tu sitio web, al tiempo que rentabilizamos tu inversión. Te proponemos un mix de medios adecuados a esos objetivos.">08</p>
        </div>
        <div class="detalles-servicio col-12 col-md-11">
          <p class="numero-servicio">Servicio <span>05</span></p>
          <p class="titulo-servicio">Campañas de Branding</p>
          <p class="detalle-servicio">Empoderamos tu marca a través de nuestras campañas de reconocimiento. Logramos el posicionamiento que deseas en tu público objetivo apuntando a lograr el mayor alcance al menor costo posible.</p>
        </div>
      </div>
    </div>
    <div class="btn-ver-mas container d-flex my-0">
      <button class="btn-rocket col-3 m-auto d-flex text-center"><p>Ver más</p><i class="fas fa-chevron-right"></i></button>
    </div>
  </section>
  <?php endif;?>
  <!-- FIN SECCIÓN SERVICIOS -->

  <!-- SECCIÓN CASOS DE ÉXITO -->
  <section id="casos-de-exito" class="vh-100">
    aaaaaaaaaa
  </section>
  <!-- FIN SECCIÓN CASOS DE ÉXITO -->
</main>

<?php 
  //b4st_main_after();
  get_footer(); 
?>
