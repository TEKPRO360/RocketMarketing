<?php
  get_header();
  b4st_main_before();
?>

<main id="site-main" class="servicios bg-servicio text-servicio">
  <?php $servicios = new WP_Query( array( 
        'post_type'       => 'servicios',
        'posts_per_page'  => -1,
        'category'        => 'current',
        'order_by'        => 'date',
        'order'           => 'ASC'
        ) );
      $numero_servicio = 0; ?>
  <?php if ($servicios->have_posts() ) :?>
  <div class="contenedor-menu ">
    <div class="menu text-servicio">
      <p>Servicios</p>
      <?php while ($servicios->have_posts() ) : $servicios->the_post(); $numero_servicio++;?>
      <a class="servicio servicio-<?php echo $numero_servicio;?> d-flex flex-wrap align-items-center "
        href="<?php the_permalink();?>" data-servicio="<?php the_permalink();?>">
        <p class="numero text-center numero-menu">
          <?php if ($numero_servicio < 10):?>0<?php endif?><?php echo $numero_servicio;?></p>
        <p class="col m-0 titulo-numero"><?php echo the_title();?></p>
      </a>
      <?php endwhile; wp_reset_postdata();?>
    </div>
  </div>
  <?php endif; wp_reset_postdata();?>

  <div class="contenedor-servicios">
    <!-- SECCIÓN 1 -->
    <?php if ( have_rows( 'seccion_1' ) ) : the_row();
      $imagenHorizontal = get_sub_field('imagen_horizontal');
      $imagenVertical = get_sub_field('imagen_vertical');
    ?>
    <section class="seccion-1 bg-seccion-1 text-seccion-1">
      <div class="contenido-seccion ">
        <div class="titulo-detalle col-12 col-md-6">
          <h1 class="title-services"><?php the_title();?></h1>
          <p><?php the_sub_field( 'detalles_de_servicio' ); ?></p>
        </div>
        <div class="contenedor-fotos col-10 col-md-12 m-auto d-flex flex-wrap p-0">
          <img src="<?php echo $imagenHorizontal; ?>" alt="" class="img-horizontal">
          <img src="<?php echo $imagenVertical; ?>" alt="" class="img-vertical d-none d-md-block">
        </div>
      </div>
      <div class="bg-seccion"></div>
    </section>
    <?php wp_reset_postdata(); endif;?>
    
    <!-- SECCIÓN 2 -->
    <?php if ( have_rows( 'seccion_2' ) ) : while ( have_rows( 'seccion_2' ) ) : the_row();
      $imagenHorizontal = get_sub_field('imagen_horizontal');
      $imagenVertical = get_sub_field('imagen_vertical');
    ?>
    <?php if ( get_sub_field( 'se_muestra_seccion_2' ) == 1 ) : ?>
    <section class="seccion-2" style="background:<?php the_sub_field( 'color_background' ); ?>;color:<?php the_sub_field( 'color_texto' ); ?>;">
      <div class="contenido-seccion">
        <div class="owl-theme owl-carousel owl-servicios text-center py-3">
          <?php if ( have_rows( 'slide_detalles_servicios_1' ) ) : ?>
            <?php while ( have_rows( 'slide_detalles_servicios_1' ) ) : the_row();?>
            <?php the_sub_field('detalle_servicio_interior_1');?>
            <?php endwhile; ?>  
            <?php endif; ?>
          </div>
      </div>
    </section>
    <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); endif;?>

    <!-- SECCIÓN 3 -->
    <?php if ( have_rows( 'seccion_3' ) ) : ?>
    <?php while ( have_rows( 'seccion_3' ) ) : the_row(); $imagenTres = get_sub_field('imagen_slide_detalles_servicios_3'); $imagenCuatro = get_sub_field('imagen_slide_detalles_servicios_4');?>
    <?php if ( get_sub_field( 'se_muestra_seccion_3' ) == 1 ) : ?>
      <section class="seccion-3" style="background:<?php the_sub_field( 'color_background' ); ?>;color:<?php the_sub_field( 'color_texto' ); ?>;">
      <div class="contenido-seccion ">
        <div class="owl-theme owl-carousel owl-servicios text-center col-12 col-md-6 p-3">
          <?php if ( have_rows( 'slide_detalles_servicios_2' ) ) : ?>
          <?php while ( have_rows( 'slide_detalles_servicios_2' ) ) : the_row();?>
            <?php the_sub_field('detalle_servicio_interior_1');?>
          <?php endwhile; ?>  
          <?php endif; ?>
        </div>
        <div class="contenedor-imagen">
          <img src="<?php echo $imagenTres;?>" alt="">
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); endif;?>
    
  </div>

  <!-- MENÚ MOBILE -->
  <section class="links-servicios boton-servicio d-md-none">
    <p>Otros servicios</p>
    <?php previous_post_link('%link', '< %title'); ?>
    <?php next_post_link('%link', '%title >'); ?>
  </section>
</main>

<?php
    b4st_main_after();
    get_footer();
?>