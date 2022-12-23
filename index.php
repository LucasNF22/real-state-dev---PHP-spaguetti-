<?php

    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor">
        <h1>Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Ventas y transacciones seguras de inicio a fin.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>El mejor precio para tu bolsillo.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Tu tiempo es valioso, nosotros lo valoramos.</p>
            </div>
        </div>

    </main>

    <section class="seccion contenedor">
        <h2>Propiedades disponibles</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.webp" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa en el Lago</h3>
                    <p>Casa en el lago con excelente vista, materiales de lujo a un excelente precio.</p>

                    <p class="precio">$3.000.000</p>
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

                    <a href="anuncio.php" class="boton boton-amarillo">Ver propiedad</a>
                </div>
            </div> <!--fin .anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.webp" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">

                    <h3>Casa en el valle</h3>
                    <p>Casa en el con diseño moderno y tecnología de punta.</p>
                    <p class="precio">$3.000.000</p>
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

                    <a href="anuncio.php" class="boton boton-amarillo">Ver propiedad</a>
                </div>
            </div> <!--fin .anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.webp" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa estilo cabaña</h3>
                    <p>Casa en la ciudad, con pileta y un estilo acojedor. </p>
                    <p> - EXCELENTE OPORTUNIDAD - </p>
                    <p class="precio">$3.000.000</p>
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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
                </div>
            </div> <!--fin .anuncio-->
        </div><!--fin .contenedor-anuncios-->
        <div class="alinear-centro">
            <a href="anuncios.php" class="boton-verde j">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra el Hogar de tus sueños</h2>
        <p>Completa el formulario de contacto y un asesor se pondrá en contacto a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Imagen blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="info-meta">Escrito el: <span>20/12/22</span> por: <span>ADMIN</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa.
                        </p>
                    </a>
                </div>
            </article><!--Fin entrada blog-->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Imagen blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para una correcta decoración</h4>
                        <p class="info-meta">Escrito el: <span>18/12/22</span> por: <span>ADMIN</span></p>
                        <p>
                            Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles
                            y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article><!--Fin entrada blog-->
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención
                    y la casa que adquirí, cumplió todas las espectativas.
                </blockquote>
                <p>- Lionel Messi</p>
            </div>
        </section>

    </div>

    <?php incluirTemplate('footer'); ?>

   