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

<h1 data-i18n="p5.12">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p6.1">Importancia de la Biodiversidad</h2>

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

fetch('traductor_Importancia_de_la_Biodiversisdad.json')
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

      <div style="padding: 20px; max-width: 900px; margin: auto; background-color: #ffffff; border-radius: 15px;">

<p data-i18n="p6.2"><strong>La biodiversidad es esencial para el equilibrio del planeta. Entre sus beneficios están:</strong></p>  

<ul>
    <li>
        <h4 data-i18n="p6.3">Servicios ecológicos:</h4>
        <ul>
            <li data-i18n="p6.4">Purificación del aire y el agua, la polinización de cultivos, el control de plagas, y la regulación del clima.</li>
        </ul>
    </li>

      <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/la_polinización_de_cultivos.jpeg" width="600"></div>

    <li>
        <h4 data-i18n="p6.5">Alimentación y salud:</h4>
        <ul>
            <li data-i18n="p6.6">Muchas especies son fuente de alimentos, medicinas y materias primas.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Muchas_especies_son_fuente_de_alimentos,_medicinas_y_materias_primas..webp" width="600"></div>

    <li>
        <h4 data-i18n="p6.7">Cultura y recreación:</h4>
        <ul>
            <li data-i18n="p6.8">La naturaleza influye en las culturas, el arte y el turismo.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/La_naturaleza_influye_en_las_culturas,_el_arte_y_el_turismo.jpg" width="600"></div>

    <li>
        <h4 data-i18n="p6.9">Resiliencia ecológica:</h4>
        <ul>
            <li data-i18n="p6.10">Ecosistemas diversos se recuperan más fácilmente de cambios o desastres.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Resiliencia_ecológica.jpeg" width="600"></div>

    <li>
        <h4 data-i18n="p6.12">Estabilidad ecológica:</h4>
        <ul>
            <li data-i18n="p6.13">Cuanta más biodiversidad existe, más estable y resistente es un ecosistema ante crisis ambientales.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Estabilidad_ecológica.jpeg" width="600"></div>

    <li>
        <h4 data-i18n="p6.14">Avances científicos:</h4>
        <ul>
            <li data-i18n="p6.15">La biodiversidad proporciona recursos genéticos clave para la investigación médica, farmacológica y biotecnológica.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/La_biodiversidad_proporciona_recursos_genéticos_clave_para_la_investigación_médica,_farmacológica_y_biotecnológica.jpeg" width="600"></div>

    <li>
        <h4 data-i18n="p6.16">Seguridad alimentaria:</h4>
        <ul>
            <li data-i18n="p6.17">La variedad de especies garantiza disponibilidad de cultivos resistentes y nutritivos frente al cambio climático.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Seguridad_alimentaria.jpg" width="600"></div>

    <li>
        <h4 data-i18n="p6.18">Valor intrínseco:</h4>
        <ul>
            <li data-i18n="p6.19">Cada especie tiene un valor propio, independientemente de su utilidad para los humanos.</li>
        </ul>
    </li>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/valor_de_las_especies.jpeg" width="600"></div>

</ul>

<p data-i18n="p6.20">La biodiversidad es fundamental porque garantiza el funcionamiento de los ecosistemas, sostiene la vida humana y permite adaptarnos a los desafíos ambientales. Sin ella, los servicios naturales que nos proveen alimentos, agua, aire limpio y protección desaparecerían.</p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/4PZY5DiYD1M?si=22Su_DOm0pct1SlW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>
 <footer>  
<h1 >CBT Dr. Eduardo Suarez A., Texcoco</h1>  
<h2>  Espinoza Sanchez Omar</h2>
</footer>  
</body>  
</html>