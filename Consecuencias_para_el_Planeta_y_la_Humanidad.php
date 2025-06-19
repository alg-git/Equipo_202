<?php session_start(); 
$idioma = $_SESSION['lang'] ?? 'es'; // Idioma por defecto: español 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="hoja_de_estilos_de_omar.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="my0iv">
<main>

<footer>  

<h1 data-i18n="p3.29">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p3.1">Consecuencias para el Planeta y la Humanidad</h2>

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

fetch('traductor_Consecuencias_para_el_Planeta_y_la_Humanidad.json')
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

    <h2 data-i18n="p3.2">Consecuencias para el Planeta:</h2>
    <ul>
        <h4 data-i18n="p3.3"><li>Disminución de la Capa de Ozono:</li></h4>
        <h5><ul><li data-i18n="p3.4">El aumento de ciertos gases debilita esta capa, incrementando la radiación UV.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Consecuencias_para_el_Planeta_y_la_Humanidad.jpeg" width="600"></div>

        <h4 data-i18n="p3.5"><li>Blanqueamiento de Corales:</li></h4>
        <h5><ul><li data-i18n="p3.6">El aumento de la temperatura oceánica estresa a los corales, matando algas esenciales para su vida.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/coral-blanqueado.jpg" width="600"></div>

        <h4 data-i18n="p3.7"><li>Pérdida de Biodiversidad:</li></h4>
        <h5><ul><li data-i18n="p3.8">La desaparición de hábitats causa la extinción de miles de especies cada año.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/cambio.jpg" width="600"></div>

        <h4 data-i18n="p3.9"><li>Cambios en Corrientes Oceánicas:</li></h4>
        <h5><ul><li data-i18n="p3.10">La alteración del clima y deshielo afecta los patrones oceánicos, modificando climas regionales.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/ambios_en_Corrientes_Oceánicas.jpeg" width="600"></div>

        <h4 data-i18n="p3.11"><li>Desertificación:</li></h4>
        <h5><ul><li data-i18n="p3.12">Las zonas fértiles se convierten en desiertos por sequías prolongadas y mala gestión del suelo.</li></ul></h5>
    </ul>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/alteracion.jpg" width="600"></div>

    <h2 data-i18n="p3.13">Consecuencias para la Humanidad:</h2>
    <ul>
        <h4 data-i18n="p3.14"><li>Desigualdad Social Aumentada:</li></h4>
        <h5><ul><li data-i18n="p3.15">Las comunidades vulnerables sufren más los impactos, ampliando la brecha social.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Consecuencias_para_la_Humanidad.jpeg" width="600"></div>

        <h4 data-i18n="p3.16"><li>Impacto en la Seguridad Alimentaria:</li></h4>
        <h5><ul><li data-i18n="p3.17">Los cambios climáticos afectan cultivos clave, provocando hambrunas y alzas en precios.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Impacto_en_la_Seguridad_Alimentaria.jpg" width="600"></div>

        <h4 data-i18n="p3.18"><li>Afectación Psicológica y Emocional:</li></h4>
        <h5><ul><li data-i18n="p3.19">El miedo al futuro y la pérdida de hogares o medios de vida genera ansiedad, estrés y trauma.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Afectación_Psicológica_y_Emocional.webp" width="600"></div>

        <h4 data-i18n="p3.20"><li>Colapso de Servicios Públicos:</li></h4>
        <h5><ul><li data-i18n="p3.21">Eventos extremos pueden saturar hospitales, infraestructura eléctrica y sistemas de emergencia.</li></ul></h5>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Colapso_de_Servicios_Públicos.jpg" width="600"></div>

        <h4 data-i18n="p3.22"><li>Pérdida de Patrimonio Cultural:</li></h4>
        <h5><ul><li data-i18n="p3.23">Zonas arqueológicas, ciudades costeras y bienes culturales están en riesgo por el aumento del nivel del mar.</li></ul></h5>
  
  <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Pérdida_de_Patrimonio_Cultural.jpeg" width="600"></div>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/duBY-GUZYfk?si=bwJLv5NGyfOqBXhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </ul>
    </div>
</main>
</div>
<footer>  
    <h1>CBT Dr. Eduardo Suarez A., Texcoco</h1>  
    <h2>Integrante: Espinoza Sánchez Omar</h2>
</footer>

</body>
</html>