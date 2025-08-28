<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
  <h1>Casa en Venta frente al Bosque</h1>

  <picture>
    <source srcset="/build/img/destacada.webp" type="image/webp" />
    <source srcset="/build/img/destacada.jpg" type="image/jpeg" />
    <img
      class="icono"
      loading="lazy"
      src="/build/img/destacada.jpg"
      alt="Imagen de la Propiedad" />
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>
    <ul class="iconos-caracteristicas">
      <li>
        <img loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc" />
        <p>3</p>
      </li>
      <li>
        <img
          class="icono"
          loading="lazy"
          src="/build/img/icono_estacionamiento.svg"
          alt="icono estacionamiento" />
        <p>3</p>
      </li>
      <li>
        <img
          class="icono"
          loading="lazy"
          src="/build/img/icono_dormitorio.svg"
          alt="icono habitaciones" />
        <p>4</p>
      </li>
    </ul>
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
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nisi
      unde, tempore nihil doloribus cupiditate porro possimus dolore
      obcaecati a debitis deserunt quae facilis quasi numquam beatae dolorem
      cum fuga!
    </p>
  </div>
</main>

<?php
incluirTemplate('footer');
?>