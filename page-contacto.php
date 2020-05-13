<?php
  get_header(); 
  b4st_main_before();
?>

<?php /* if (function_exists('dimox_breadcrumbs')) { ?>
  <?php dimox_breadcrumbs(); ?>
<?php } */ ?>

<main id="site-main" class="contacto d-flex flex-wrap aligncenter justify-content-center">  
  <div class="bloque-datos col-12 col-md-3">
    <div class="seccion-datos">
      <p class="titulo-contacto">Contacto</p>
      <p class="datos">JOAQUÍN Montero 3000</p>
      <p class="datos">oficina 302, Vitacura.</p>
      <p class="datos">Santiago Chile.</p>
      <p class="telefono-contacto"><a href="tel:+569123456789">+569123456789</a></p>
      <p class="mail-contacto"><a href="mailto:rocket.mkt@tekpro.cl">rocket.mkt@tekpro.cl</a></p>
    </div>
  </div>
  <div class="bloque-formulario col-12 col-md-9 d-flex text-white text-upper">
    <div class="contenedor-formulario container d-flex flex-wrap justify-content-around m-auto">
      <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="nombre col-12 col-md-5">
      <input type="text" name="apellido" placeholder="Apellido" id="apellido" class="apellido col-12 col-md-5">
      <input type="email" name="correo" placeholder="Correo" id="correo" class="correo col-12 col-md-11">
      <label for="mensaje-contacto" class="col-12 col-md-11">Mensaje</label>
      <textarea name="mensaje-contacto" id="mensaje-contacto" cols="30" rows="10" class="mensaje-contacto col-12 col-md-11"></textarea>
      <button class="enviar-contacto btn-rocket col-10 col-md-3 mx-auto mt-3">Enviar <i class="fas fa-chevron-right ml-1"></i></button>
    </div>
  </div>
</main>

<?php 
  b4st_main_after();

  if(is_active_sidebar('main-widget-area')): ?>
  <?php endif;

  get_footer(); 
?>
