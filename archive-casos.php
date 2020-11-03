<?php
  get_header();
  b4st_main_before();
?><?php $casos = new WP_Query( array( 
  'post_type'       => 'casos',
  'posts_per_page'  => -1,
  'category'        => 'current',
  'order_by'        => 'date',
  'order'           => 'ASC'
  ) ); ?>
<main id="site-main" class="casos align-items-center">
  <section class="cabecera col-12 col-md-8 d-flex flex-column align-items-center justify-content-center text-center des">
    <h1 class="mt-2 mt-md-5">Casos de éxito</h1>
    <p>Apoyamos a nuestros clientes a cumplir sus objetivos digitales mediante una gran variedad servicios que apuntan a llegar al target objetivo optimizando la inversión publicitaría.</p>
  </section>
  <!-- SECCIÓN COLUMNAS -->
  <?php if ($casos->have_posts() ) :?>
  <section class="columnas container">
    <?php while ($casos->have_posts() ) : $casos->the_post(); $servicios_involucrados = get_field( 'servicios_involucrados' ); $capturaCaso = get_field('captura_caso');?>
    <?php if ( $servicios_involucrados ) : ?>
      <div class="caso d-flex flex-column justify-content-center p-4 col-12 col-md-3">
        <img src="<?php echo $capturaCaso; ?>" alt="" class="mb-md-3">
        <div class="textos-single-caso">
          <div class="detalles-caso rounded" style="display:none;">
            <?php echo get_field('detalles_del_caso'); ?>
          </div>
          <p class="muestra-detalles text-center">Más <i class="fas fa-chevron-down text-center"></i></p>
          <h3 class="nombre-caso text-left" data-hash="<?php the_title();?>" data-link="<?php the_permalink();?>"><?php the_title();?></h3>
          <?php foreach ( $servicios_involucrados as $post ) : ?>
          <?php setup_postdata ( $post ); ?>
          <p class="servicio-caso text-left">
            <?php the_title(); ?>
          </p>
          <?php endforeach; ?>
        </div>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
    <?php endwhile; wp_reset_postdata();?>
  </section>
  <?php endif;wp_reset_postdata();?>
  <!-- FIN SECCION COLUMNAS -->
</main>

<?php
    b4st_main_after();
    get_footer();
?>