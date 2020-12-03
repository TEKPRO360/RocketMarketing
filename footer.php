<?php b4st_footer_before();?>

<footer id="site-footer" class="py-4 w-100">
  <div class="col-12 d-flex flex-wrap py-md-4 m-auto bloques-footer">
    <div class="col-12 col-md text-center">
      <a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo-blanco.png" alt="" class="mb-2 p-3"></a>
    </div>
    <div class="col-12 col-md columna-3 mt-4 mt-md-0 d-flex flex-column">
      <h3 class="titulo-footer">Nosotros</h3>
      <a href="<?php echo esc_url( home_url('/servicios/posicionamiento-en-buscadores') ); ?>">Servicios</a>
      <a href="<?php echo esc_url( home_url('/casos') ); ?>">Casos de éxito</a>
      <a href="<?php echo esc_url( home_url('/#clientes') ); ?>">Clientes</a>
      <a href="<?php echo esc_url( home_url('/#contacto') ); ?>">Escríbenos</a>
    </div>
    <div class="col-12 col-md columna-3 mt-4 mt-md-0 d-flex flex-column">
      <h3 class="titulo-footer">Contacto</h3>
      <p>Joaquín Montero 3000, Oficina 502, Vitacura. Santiago, Chile.</p>
      <p>+56 (2) 2869 9180</p>
      <a href="mailto:contacto@rocketmkt.com">contacto@rocketmkt.com</a>
    </div>
    <div class="col-12 col-md columna-4 mt-4 mt-md-0 redes">
      <h3 class="titulo-footer w-100">Social</h3>
      <a href="https://www.instagram.com/rocketmarketing07/" class="fab fa-instagram mr-3"></a>
      <a href="https://www.linkedin.com/company/rocket-marketing01/" class="fab fa-linkedin-in mr-3"></a>
    </div>
  </div>
</footer>

<?php b4st_footer_after();?>

<?php wp_footer(); ?>
</body>
</html>
