<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Estancia 3H</h1>
        
        
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$4.200.800</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pharetra diam, nec convallis metus. Nullam vehicula rutrum leo eget aliquam. Duis molestie facilisis odio, id pretium lectus varius vitae. Praesent quis placerat elit. Nam nec tellus sit amet mi gravida viverra sed ut diam. Sed nec odio feugiat, lacinia nibh sit amet, consequat dui. Aenean in dapibus lacus, pharetra congue neque. Curabitur scelerisque tortor at vulputate sodales. Maecenas sed interdum elit. Cras rhoncus tellus elit, et blandit elit gravida eu. Curabitur pretium, lectus at dictum dictum, tellus ipsum interdum enim, vel hendrerit lectus lorem posuere mi. Nam posuere tincidunt cursus. Maecenas dapibus dictum venenatis.
                    </p>
        </div>
    </main>

    <?php incluirTemplate('footer'); ?>
    
    