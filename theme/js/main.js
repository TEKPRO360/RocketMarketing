const   colorServicio = my_data.color_servicio,
        textoServicio = my_data.texto_servicio;


console.log(colorServicio);
console.log(textoServicio);

$('.bg-servicio').css('background', colorServicio);
$('.text-servicio').css('color', textoServicio);