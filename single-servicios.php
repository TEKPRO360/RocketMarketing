<?php
  get_header();
  b4st_main_before();
?>

<main id="site-main" class="servicios d-flex flex-wrap bg-servicio text-servicio destacar">
<?php $servicios = new WP_Query( array( 
          'post_type'       => 'servicios',
          'posts_per_page'  => -1,
          'category'        => 'current',
          'order_by'        => 'date',
          'order'           => 'ASC'
          ) ); $numero_servicio = 0; ?>
  <?php if ($servicios->have_posts() ) :?>
  <div class="contenedor-menu col-md-2 pt-5 px-2 destacar">
    <div class="menu sticky-top my-5">
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
  <div class="contenedor-secciones col-12 col-md-10 ml-auto mr-0 px-0 pt-5">
    <?php if ( have_rows( 'seccion_1' ) ) : ?>
    <?php while ( have_rows( 'seccion_1' ) ) : the_row(); ?>
    <section class="seccion-1 w-100 pt-5 destacar vh-100 d-flex flex-wrap bg-light">
      <div class="titulo-detalle col-12 col-md-6 destacar">
        <h1 class=""><?php the_title();?></h1>
        <p><?php the_sub_field( 'detalles_de_servicio' ); ?></p>
      </div>
      <img src="" alt="" class="img-sec1-1 col-12 col-md-6 destacar">
      <img src="" alt="" class="img-sec1-2 col-12 col-md-6 ml-0 mr-auto destacar">
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php
    b4st_main_after();
    get_footer();
?>
