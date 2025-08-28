<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Guía para la decoración de tu hogar</h1>

  <picture>
    <source srcset="/build/img/destacada2.webp" type="image/webp" />
    <source srcset="/build/img/destacada2.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="/build/img/destacada.jpg"
      alt="Imagen de la Propiedad" />
  </picture>
  <p class="informacion-meta">
    Escrito el <span>20/10/2025</span> por: <span>Evelyn Bautista</span>
  </p>

  <div class="resumen-propiedad">
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