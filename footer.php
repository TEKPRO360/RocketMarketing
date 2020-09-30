<?php b4st_footer_before();?>

<?php $servicios = new WP_Query( array( 
  'post_type'       => 'servicios',
  'posts_per_page'  => 4,
  'category'        => 'current',
  'order_by'        => 'date',
  'order'           => 'ASC'
  ) ); ?>

<footer id="site-footer" class="py-5">
  <div class="col-12 col-md-11 d-flex flex-wrap m-auto">
    <div class="w-100">
      <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo-blanco.png" alt="" class="mb-2 p-3">
    </div>
    <div class="col-12 col-md-4 d-flex flex-column justify-content-start columna-1">
      <p>Reaching the right people, in the right place, at the right time.®</p>
      <p>© 2020 Rocket Marketing. Creado y operado por Tekpro Ecommerce.</p>
      <a href="#site-footer" class="site-map w-100">Site Map</a>
    </div>
    <?php if ($servicios->have_posts() ) :?>
    <div class="col-12 col-md columna-2 d-flex flex-column">
      <h3 class="titulo-footer">Servicios</h3>
      <?php while ($servicios->have_posts() ) : $servicios->the_post();?>
      <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
      <?php endwhile;wp_reset_postdata();?>
    </div>
    <?php endif; wp_reset_postdata();?>
    <div class="col-12 col-md columna-3">
      <h3 class="titulo-footer">Contacto</h3>
      <p>JOAQUÍN Montero 3000, Oficina 302, Vitacura.</p>
      <p>SANTIAGO CHILE.</p>
      <p>+8939473984</p>
      <a href="mailto:rocket.mkt@tekpro.cl">rocket.mkt@tekpro.cl</a>
    </div>
    <div class="col-12 col-md columna-4">
      <h3 class="titulo-footer w-100">Social</h3>
      <a href="#facebook" class="fab fa-facebook-f mr-3"></a>
      <a href="#instagram" class="fab fa-instagram mr-3"></a>
      <a href="#twitter" class="fab fa-twitter mr-3"></a>
      <a href="#linkedin" class="fab fa-linkedin-in mr-3"></a>
    </div>
  </div>
</footer>

<?php b4st_footer_after();?>

<?php //b4st_bottomline();?>

<!--
Viewport width indicator
========================
Just delete this if or when you don't need it.
-->

<!-- <div id="vp" style="position: fixed; bottom: 0.5rem; right: 0.5rem; z-index: 999; display: inline-block; background: #555; color: #ffffff; padding: 0 0.5rem 0.125rem; border-radius: 0.25rem;"></div>

<script>
  var vp = document.body.querySelector('#vp');
  var viewportWidth = window.innerWidth + 'px';
  vp.innerHTML = viewportWidth;
  window.addEventListener('resize', function () {
    viewportWidth = window.innerWidth + 'px';
    vp.innerHTML = viewportWidth;
  });
</script> -->

<?php wp_footer(); ?>
</body>
</html>
