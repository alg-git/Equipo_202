<?php session_start(); 
$idioma = $_SESSION['lang'] ?? 'es'; // Idioma por defecto: español 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="UTF-8">
        <meta name="Viewport" content="Width=device-width,initial-scale=1.0">
    <head><link rel="stylesheet"href="hoja_de_estilos_de_omar.css">
    </head>
    <body>
<div class="my0iv">
<main>
<footer>  

<h1 data-i18n="p5.61">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p6.1"> Energía Solar, Eólica, Hidroeléctrica y geotérmica</h2>

<select id="languageSelector">
    <option value="es" <?= $idioma === 'es' ? 'selected' : '' ?>>Español</option>
    <option value="en" <?= $idioma === 'en' ? 'selected' : '' ?>>English</option>
</select>

<script>
let translations = {};
let currentLang = "<?= $idioma ?>"; // idioma desde PHP

function applyTranslations(lang) {
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        if (translations[lang] && translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });
}

fetch('traductor_energia_solar_eolica_hidroelectrica_geotermica.json')
    .then(response => response.json())
    .then(data => {
        translations = data;
        applyTranslations(currentLang);
    })
    .catch(error => {
        console.error("Error al cargar las traducciones:", error);
    });

document.getElementById("languageSelector").addEventListener("change", function() {
    const selectedLang = this.value;

    fetch('guardar_idioma.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'lang=' + encodeURIComponent(selectedLang)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            applyTranslations(selectedLang);
            currentLang = selectedLang;
        }
    });
});
</script>

        

</footer> 
        
 <!-- barra de menu-->


       
<nav>
        
<input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
            
<li><a data-i18n="m1" href="index.php">Menú</a></li>
            <li>
                
            
<li><a data-i18n="m2" href="Conciencia_y_Educacion_Ambiental.php">Conciencia y Educacion Ambiental</a>
<ul class="submenu">
<li><a data-i18n="m3" href="pag1_Importancia_de_la_educacion_ambuental.php">Importancia de la educacion ambiental</a></li>
<li><a data-i18n="m4" href="pag1_Responsabilidad_individual_y_colectiva.php">Responsabilidad individual y colectiva</a></li>
<li><a data-i18n="m5" href="pag1_Cambio_de_hábitos_para_reducir_el_impacto_ambiental.php">Cambio de habitos para reducir el impacto ambiental</a></li>
                </ul>
            </li>
            
            
<li>
<a data-i18n="m6" href="cambio_climatico_y_sus_efectos.php">Cambio Climático y sus Efectos</a>
<ul  class="submenu">
<li><a data-i18n="m7" href="causas_del_cambio_climatico.php">Causas del Cambio Climático</a></li>
<li><a data-i18n="m8" href="Consecuencias_para_el_Planeta_y_la_Humanidad.php">Consecuencias para el Planeta y la Humanidad</a></li>
<li><a data-i18n="m9" href="Medidas_para_Mitigar_el_Cambio_Ambiental.php">Medidas para Mitigar el Cambio Ambiental</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m10" href="contaminacion_ambiental.php">Contaminación Ambiental</a>
<ul  class="submenu">
<li><a data-i18n="m11" href="contaminacion_agua_aire_suelo.php">Contaminación del Agua, Aire y Suelo</a></li>
<li><a data-i18n="m12" href="contaminacion_plasticos.php">Contaminación por Plásticos y Microplásticos</a></li>
<li><a data-i18n="m13" href="contaminacion_acustica_termica.php">Contaminación Acústica y Lumínica</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m14" href="energias_renovables_sostenibilidad.php">Energías Renovables y Sostenibilidad</a>
<ul class="submenu">
<li><a data-i18n="m15" href="energia_solar_eolica_hidroelectrica_geotermica.php">Energía Solar, Eólica, Hidroeléctrica y Geotérmica</a></li>
<li><a data-i18n="m16" href="beneficios_energias_limpias.php">Beneficios de las Energías Limpias</a></li>
<li><a data-i18n="m17" href="retos_transformacion_energetica.php">Retos de la Transición Energética</a></li>
                </ul>
</li>

<li><a data-i18n="m18" href="Biodiversidad_y_Ecosistemas.php">Biodiversidad y Ecosistemas</a>
<ul class="submenu">
<li><a data-i18n="m19" href="Importancia_de_la_Biodiversidad.php">Importancia de la Biodiversidad</a></li>
<li><a data-i18n="m20" href="Perdidas-de_Habitats_y_Especies_en_Peligro.php">Pérdida de Hábitats y Especies en Peligro</a></li>
<li><a data-i18n="m21" href="Estrategias_de_Conservación_de_Flora_y_Fauna.php">Estrategias de Conservación de Flora y Fauna</a></li>
                </ul>
            </li>
            <li>
                
<a data-i18n="m22" href="Gestión_de_residuos_y_reciclaje.php">Gestión de Residuos y Reciclaje</a>
<ul class="submenu">
<li><a data-i18n="m23" href="pag6_Reducción,_reutilización_y_reciclaje(las_3R's).php ">Reducción, Reutilización y Reciclaje (3R)</a></li>
<li><a data-i18n="m24" href="pag7_Economía_Circular_y_Materiales_Sostenibles.php">Economía Circular y Materiales Sostenibles</a></li>
<li><a data-i18n="m25" href="pag8_Manejo_Adecuado_de_Residuos_Electrónicos_Peligrosos.php">Manejo Adecuado de Residuos Electrónicos Peligrosos</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m26" href="Uso_Responsable_del_Agua.php">Uso Responsable del Agua</a>
<ul class="submenu">
<li><a data-i18n="m27" href="Escasez_del_agua_y_su_Impacto_global.php">Escasez de Agua y su Impacto Global</a></li>
<li><a data-i18n="m28" href="Estrategias_de_Ahorro_y_Reutilización.php">Estrategias de Ahorro y Reutilización</a></li>
<li><a data-i18n="m29" href="Contaminacion_del_agua_y_su_tratamiento.php">Contaminación del Agua y su Tratamiento</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m30" href="agricultura_y_Alimentación_sustenible.php">Agricultura y Alimentación Sostenible</a>
<ul  class="submenu">
<li><a data-i18n="m31" href="Agriculturay_Permacultura.php">Agricultura y Permacultura</a></li>
<li><a data-i18n="m32" href="impacto_ambiental_de_la_ganaderia_y_la_pesca.php">Impacto Ambiental de la Ganadería y la Pesca</a></li>
<li><a data-i18n="m33" href="Reducción_de_desperdicio_Ambiental.php">Reducción del Desperdicio de Alimentos</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m34" href="Urbanismo_y_ciudades_sostenibles.php">Urbanismo y Ciudades Sostenibles</a>
<ul  class="submenu">
<li><a data-i18n="m35" href="Movilidad_Sustentable_(Bicicletas,_Transporte_Publico,_Autos_Electricos).php">Movilidad Sustentable (Bicicletas, Transporte Publico, Autos Electricos) </a></li>
<li><a data-i18n="m36" href="Construccion_Ecologica_y_Eficiente_Energicamente.php">Construcción Ecológica y Eficiente Energéticamente</a></li>
<li><a data-i18n="m37" href="ESPACIOS_VERDES-Y_SU_IMPACTO_EN_LA_CALIDAD_DE_VIDA.php">Espacios Verdes y su Impacto en la Calidad de Vida</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m38" href="Legislacion_y_Politicas_Ambientales.php">Legislación y Políticas Ambientales</a>
<ul class="submenu">
<li><a data-i18n="m39" href="Acuerdos_Internacionales_Sobre_el_Medio_Ambiente_(Acuerdo_de_Paris,_Argentina_2030).php">Acuerdos Internacionales Sobre el Medio Ambiente (Acuerdo de París, Agenda 2030)</a></li>
<li><a data-i18n="m40" href="Politicas_de_Proteccion_Ambiental.php">Políticas de Protección Ambiental en Distintos Países</a></li>
<li><a data-i18n="m41" href="papel_de_las_empresas_y_el_sector_privado_en_la_sociedad.php">Papel de las Empresas y el Sector Privado en la Sociedad</a></li>
                </ul>
            </li>
            
<li><a data-i18n="m42" href="cerrar.php">Cerrar</a></li>



        </ul>
    </nav>
      <div style="padding: 20px; max-width: 800px; margin: auto; background-color: #ffffff; border-radius: 15px;">



  <h3 data-i18n="p6.2"> 🌞 Energía Solar </h3>
  <h4 data-i18n="p6.3"> ¿Qué es? </h4>
  <p data-i18n="p6.4"> La energía solar proviene del Sol. Es una fuente inagotable y limpia, que se puede aprovechar para producir electricidad o calor. </p>
  
        <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_solar.webp" width="600"></div>
  
  <h4 data-i18n="p6.5"> ¿Cómo funciona? </h4>
  <p data-i18n="p6.6"> 1. Energía solar fotovoltaica: Usa paneles solares que convierten la luz solar directamente en electricidad. Cada panel contiene células fotovoltaicas hechas de silicio. </p>
  <p data-i18n="p6.7"> 2. Energía solar térmica: Usa colectores solares que absorben el calor del sol para calentar agua o aire, principalmente en viviendas o industrias. </p>
  
   <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/como_funciona_la_energia_solar.jpg" width="600"></div>
  
  <h4 data-i18n="p6.8"> ¿Para qué sirve? </h4>
  <p data-i18n="p6.9"> Generar electricidad para casas, oficinas o ciudades. </p>
  <p data-i18n="p6.10"> Calentar agua (uso doméstico, piscinas). </p>
  <p data-i18n="p6.11"> Cargar  dispositivos eléctricos en lugares remotos. </p>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/para_que_sirve_la_energia_solar.jpg" width="600"></div>

  <h4 data-i18n="p6.12"> Ventajas </h4>
  <p data-i18n="p6.13"> Fuente inagotable. </p>
  <p data-i18n="p6.14"> No contamina. </p>
  <p data-i18n="p6.15"> Reduce el uso de combustibles fósiles. </p>
  <p data-i18n="p6.16"> Útil en zonas alejadas sin red eléctrica. </p>
     
 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cuales-son-las-ventajas-de-la-energia-solar.jpg" width="600"></div>

  <h3 data-i18n="p6.17"> 💨 Energía Eólica </h3>
  <h4 data-i18n="p6.18"> ¿Qué es? </h4>
  <p data-i18n="p6.19"> La energía eólica se obtiene del viento, es decir, del movimiento del aire. </p>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_eólica.jpeg" width="600"></div>

  <h4 data-i18n="p6.20"> ¿Cómo funciona? </h4>
  <p data-i18n="p6.21"> Los aerogeneradores (molinos de viento modernos) tienen grandes aspas que giran con el viento. Este movimiento acciona un generador que convierte la energía mecánica en electricidad. </p>
 
   <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/como_funciona_la_energia_eolica.jpg" width="600"></div>
 
  <h4 data-i18n="p6.22"> ¿Para qué sirve? </h4>
  <p data-i18n="p6.23"> Suministrar energía a comunidades, granjas o industrias. </p>
  <p data-i18n="p6.24"> Complementar otras fuentes de energía en la red eléctrica nacional. </p>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Uso de Energías Renovables.jpg" width="600"></div>

  <h4 data-i18n="p6.25"> Ventajas </h4>
  <p data-i18n="p6.26"> Es renovable y limpia. </p>
    <p data-i18n="p6.27"> Reduce las emisiones de CO₂. </p>
  <p data-i18n="p6.28"> Puede instalarse en tierra o en el mar (offshore). </p>
  <p data-i18n="p6.29"> Los parques eólicos pueden coexistir con la agricultura. </p>
        
 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/energia.jpg" width="600"></div>

  <h3 data-i18n="p6.30"> 💧 Energía Hidroeléctrica </h3>
  <h4 data-i18n="p6.31"> ¿Qué es? </h4>
  <p data-i18n="p6.32"> Es la energía que se produce con el movimiento del agua, especialmente cuando cae desde una altura o fluye con fuerza. </p>
 
  <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/energia_hidraulica.jpg" width="600"></div>
 
  <h4 data-i18n="p6.33"> ¿Cómo funciona? </h4>
  <p data-i18n="p6.34"> 1. Se construyen presas para almacenar agua en embalses. </p>
  <p data-i18n="p6.35"> 2. Cuando el agua se libera, cae por tuberías y hace girar turbinas conectadas a generadores. </p>
  <p data-i18n="p6.36"> 3. Esa energía mecánica se convierte en electricidad. </p>

  <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_hidráulica.jpg" width="600"></div>

    <h4 data-i18n="p6.37"> ¿Para qué sirve? </h4>
  <p data-i18n="p6.38"> Abastecer a ciudades enteras con energía eléctrica. </p>
  <p data-i18n="p6.39"> Regular ríos y controlar inundaciones. </p>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/para_que_sirve_energia_hidraulica.png" width="600"></div>

  <h4 data-i18n="p6.40"> Ventajas </h4>
  <p data-i18n="p6.41"> Proporciona gran cantidad de energía. </p>
  <p data-i18n="p6.42"> Se puede ajustar según la demanda. </p>
  <p data-i18n="p6.43"> Ayuda en la gestión del agua. </p>
  <p data-i18n="p6.44"> Vida útil larga (más de 50 años en muchas plantas). </p>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/ventajasdelaenergiahidraulica.jpg" width="600"></div>

  <h3 data-i18n="p6.45"> 🌋 Energía Geotérmica </h3>
  <h4 data-i18n="p6.46"> ¿Qué es? </h4>
  <p data-i18n="p6.47"> Es la energía que proviene del calor interno de la Tierra. Se encuentra en zonas volcánicas, fallas geológicas o aguas termales. </p>
 
 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/energía_geotérmica.jpg" width="600"></div>

  <h4 data-i18n="p6.48"> ¿Cómo funciona? </h4>
  <p data-i18n="p6.49"> 1. Se perfora el suelo para alcanzar rocas o agua caliente subterránea </p>
  <p data-i18n="p6.50"> 2. El vapor o agua caliente sube y mueve turbinas generadoras de electricidad. </p>
  <p data-i18n="p6.51"> 3. También se puede usar directamente para calefacción o procesos industriales. </p>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/la_energía_geotérmica_funciona.jpeg" width="600"></div>

  <h4 data-i18n="p6.52"> ¿Para qué sirve?</h4>
  <p data-i18n="p6.53"> Producir electricidad (especialmente en países como Islandia, México o Indonesia). </p>
  <p data-i18n="p6.54"> Calefacción de edificios y redes urbanas. </p>
  <p data-i18n="p6.55"> Invernaderos y spas. </p>

  <h4 data-i18n="p6.56"> Ventajas </h4>
  <p data-i18n="p6.57"> Fuente constante (no depende del clima). </p>
  <p data-i18n="p6.58"> Baja emisión de gases </p>
  <p data-i18n="p6.59"> Requiere poco espacio en la superficie. </p>
  <p data-i18n="p6.60"> Ideal para regiones con actividad volcánica.</p>
 
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/ventajas_de_la_energía_geotérmica.jpg" width="600"></div>

</div>

</body>
 <footer>  
<h1 >CBT Dr. Eduardo Suarez A., Texcoco</h1>  
<h2>  Gonzalez Hernandez Amairani Quetzal</h2>
</footer>  
      </label>
