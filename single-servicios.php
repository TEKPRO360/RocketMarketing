<?php
  get_header();
  b4st_main_before();
?>

<main id="site-main" class="servicios d-flex flex-wrap bg-servicio text-servicio">
<?php $servicios = new WP_Query( array( 
          'post_type'       => 'servicios',
          'posts_per_page'  => -1,
          'category'        => 'current',
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); $numero_servicio = 0; ?>
  <?php if ($servicios->have_posts() ) :?>
  <div class="contenedor-menu col-md-4 pt-5 px-3 destacar">
    <div class="menu my-5">
      <p>Servicios</p>
      <?php while ($servicios->have_posts() ) : $servicios->the_post(); $numero_servicio++;?>
      <a href="<?php the_permalink();?>" class="w-100 d-flex flex-row align-items-center justify-content-between my-2 destacar">
        <p class="numero-menu text-center">0<?php echo $numero_servicio;?></p>
        <p class="titulo-menu ml-0 col-md"><?php the_title();?></p>
      </a>
      <?php endwhile; wp_reset_postdata();?>
    </div>
  </div>
  <?php endif; wp_reset_postdata();?>

  <!-- CONTENEDOR SECCIONES -->
  <div class="contenedor-secciones w-100">
    <!-- SECCIÓN 1 -->
    <?php if ( have_rows( 'seccion_1' ) ) : ?>
    <?php while ( have_rows( 'seccion_1' ) ) : the_row(); $imagenHorizontal = get_sub_field('imagen_horizontal'); $imagenVertical = get_sub_field('imagen_vertical');?>
    <section class="seccion-1 w-100 bg-seccion-1 text-seccion-1 pr-0">
      <div class="col-12 col-md-8 d-flex flex-wrap ml-auto px-0">
        <div class="titulo-detalle col-12 col-md-6">
          <h1 class=""><?php the_title();?></h1>
          <p><?php the_sub_field( 'detalles_de_servicio' ); ?></p>
        </div>
        <div class="contenedor-fotos w-100 d-flex flex-wrap">
          <img src="<?php echo $imagenHorizontal; ?>" alt="" class="img-horizontal sombra-foto">
          <img src="<?php echo $imagenVertical; ?>" alt="" class="img-vertical sombra-foto">
        </div>
      </div>
    </section>
    <?php endwhile; wp_reset_postdata();?>
    <?php endif; ?>
    <!-- FIN SECCIÓN 1 -->
    <!-- SECCIÓN 2 -->
    <?php if ( have_rows( 'seccion_2' ) ) : ?>
    <?php while ( have_rows( 'seccion_2' ) ) : the_row();?>
    <section class="seccion-2 w-100 pr-0 py-5" style="background:<?php the_sub_field( 'color_background' ); ?>;color:<?php the_sub_field( 'color_texto' ); ?>;">
      <div class="col-12 col-md-8 d-flex flex-wrap ml-auto px-0">
        <div class="owl-theme owl-carousel owl-servicios text-center p-3">
          <?php if ( have_rows( 'slide_detalles_servicios_1' ) ) : ?>
          <?php while ( have_rows( 'slide_detalles_servicios_1' ) ) : the_row();?>
            <?php the_sub_field('detalle_servicio_interior_1');?>
          <?php endwhile; ?>  
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php endwhile; wp_reset_postdata();?>
    <?php endif; ?>
    <!-- FIN SECCIÓN 2 -->
    <!-- SECCIÓN 3 -->
    <?php if ( have_rows( 'seccion_3' ) ) : ?>
    <?php while ( have_rows( 'seccion_3' ) ) : the_row(); $imagenTres = get_sub_field('imagen_slide_detalles_servicios_3'); $imagenCuatro = get_sub_field('imagen_slide_detalles_servicios_4');?>
    <section class="seccion-3 w-100 pr-0" style="background:<?php the_sub_field( 'color_background' ); ?>;color:<?php the_sub_field( 'color_texto' ); ?>;">
      <div class="detalles-3 col-12 col-md-8 d-flex flex-wrap ml-auto px-0 d-flex flex-wrap align-items-center justify-content-center">
        <div class="owl-theme owl-carousel owl-servicios text-center col-12 col-md-6 p-3">
          <?php if ( have_rows( 'slide_detalles_servicios_2' ) ) : ?>
          <?php while ( have_rows( 'slide_detalles_servicios_2' ) ) : the_row();?>
            <?php the_sub_field('detalle_servicio_interior_1');?>
          <?php endwhile; ?>  
          <?php endif; ?>
        </div>
        <img src="<?php echo $imagenTres;?>" alt="">
      </div>
      <div class="detalles-4 col-12 col-md-8 d-flex flex-wrap ml-auto px-0 d-flex flex-wrap align-items-center justify-content-center">
        <img src="<?php echo $imagenCuatro;?>" alt="">
        <div class="owl-theme owl-carousel owl-servicios text-center col-12 col-md-6 p-3">
          <?php if ( have_rows( 'slide_detalles_servicios_3' ) ) : ?>
          <?php while ( have_rows( 'slide_detalles_servicios_3' ) ) : the_row();?>
            <?php the_sub_field('detalle_servicio_interior_1');?>
          <?php endwhile; ?>  
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php endwhile; wp_reset_postdata();?>
    <?php endif; ?>
    <!-- FIN SECCIÓN 3 -->
  </div>
  <!-- FIN CONTENEDOR SECCIONES -->
</main>

<?php
    b4st_main_after();
    get_footer();
?>
