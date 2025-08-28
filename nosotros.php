<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Conoce Sobre Nosotros</h1>

  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="/build/img/nosotros.webp" type="image/webp" />
        <source srcset="/build/img/nosotros.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="/build/img/nosotros.jpg"
          alt="Sobre Nosotros" />
      </picture>
    </div>

    <div class="texto-nosotros">
      <blockquote>25 Años de experiencia</blockquote>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
        reprehenderit sapiente nobis sequi voluptatibus, explicabo delectus
        expedita corrupti, ullam doloribus accusamus error ad. Et quaerat
        possimus, commodi corrupti expedita aperiam! Lorem ipsum, dolor sit.
        amet consectetur adipisicing elit. Molestias exercitationem nemo
        laboriosam quos laudantium tenetur quam nam at magnam ipsam odit
        consequuntur, aliquid magni, perferendis vitae. Quod voluptas eos
        dolor.
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
        nisi unde, tempore nihil doloribus cupiditate porro possimus dolore
        obcaecati a debitis deserunt quae facilis quasi numquam beatae
        dolorem cum fuga!
      </p>
    </div>
  </div>
</main>

<section class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img
        src="/build/img/icono1.svg"
        alt="Icono Seguridad"
        loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        dolorem in expedita non reiciendis voluptas fugiat enim iure
        consectetur necessitatibus nihil, dignissimos ipsum?
      </p>
    </div>
    <div class="icono">
      <img src="/build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        dolorem in expedita non reiciendis voluptas fugiat enim iure
        consectetur necessitatibus nihil, dignissimos ipsum?
      </p>
    </div>
    <div class="icono">
      <img src="/build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        dolorem in expedita non reiciendis voluptas fugiat enim iure
        consectetur necessitatibus nihil, dignissimos ipsum?
      </p>
    </div>
  </div>
</section>

<?php
incluirTemplate('footer');
?>