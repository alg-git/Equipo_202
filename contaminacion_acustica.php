<?php
session_start();
$_SESSION['ultimapagina']=$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="es">
    <head><link rel="stylesheet" href="Style.css">
        <title>Index</title>
                <meta charset="UTF-8">
        <meta name="Viewport" content="Width=device-width,initial-scale=1.0">
    </head>
    <body>
        <div class="myDiv">            <script>
    let translations = {};

    function applyTranslations(lang) {
        document.querySelectorAll('[data-i18n]').forEach(element => {
            const key = element.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                element.textContent = translations[lang][key];
            }
        });
    }

    fetch('traductor4.json')
        .then(response => response.json())
        .then(data => {
            translations = data;
            // Aplicar traducción inicial si se desea
            applyTranslations('es');
            document.getElementById("languageSelector").addEventListener("change", function() {
                applyTranslations(this.value);
            });
        })
        .catch(error => {
            console.error("Error al cargar las traducciones:", error);
        });
</script>
              <div class="my0iv">
<footer>                          <h1><p
data-i18n="p4.7">"Cuidado del medio ambiente"</p></h1>
    <div class="sitio">
<main>
<h2><p data-i18n="p4.8">Responsabilidad individual y colectiva</p></h2>
<select id="languageSelector">
    <option value="es">Español</option>
    <option value="en">English</option>
               </div>
</select>
                <strong><h3>             <p data-i18n="p4.1">Contaminación acústica y térmica</p></h3></strong>
                  <label for="sitio">
<img src="media_thumb_noticia2019_07_15_09_08_58_35.jpg" class="sitio" alt="sitio" width="400" height="250" border=4px />
  <p data-i18n="p4.2">🔊 Contaminación Acústica y Térmica</p>
  <p data-i18n="p4.3">·Contaminación acústica</p>
  <p data-i18n="p4.4">Se refiere al exceso de ruido en el ambiente, proveniente de fuentes como el tráfico, industrias y actividades urbanas.  Este tipo de contaminación puede causar estrés, trastornos del sueño y problemas auditivos en humanos  .</p>
          <video width="400" controls muted loop autoplay>
<source src="Qué es la CONTAMINACIÓN ACÚSTICA_  Contaminación acústica PARA NIÑOS.mp4" type="video/mp4"/></video>
  <p data-i18n="p4.5">·Contaminación Térmica</p>
  <p data-i18n="p4.6">Ocurre cuando se altera la temperatura natural de un entorno, generalmente por descargas de agua caliente de procesos industriales en cuerpos de agua.  Esto puede afectar negativamente a los ecosistemas acuáticos al alterar las condiciones de vida de las especies  .</p>
        <video width="400" controls muted loop autoplay>
<source src="termica.mp4" type="video/mp4"/></video>
</div>
</body>
    <footer>
     CBT Dr. Eduardo Suárez, A. Texcoco.
    <br> ©Amairani Quetzal Gónzalez Hernández
    </footer>
      <label for="sitio">
<img src="contaminacion-termica.jpg" class="sitio" alt="sitio" width="400" height="250" border=4px />