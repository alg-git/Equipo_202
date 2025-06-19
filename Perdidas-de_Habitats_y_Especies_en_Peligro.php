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

<h1 data-i18n="p7.16">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p7.1"> Pérdidas de Hábitats y Especies en Peligro</h2>

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

fetch('traductor_Perdidas_de_Habitats_y_Especies_en_Peligro.json')
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

    <p data-i18n="p7.2"><strong>La biodiversidad está siendo amenazada por causas como:</strong></p>  

    <ul>
        <li>
            <h4 data-i18n="p7.3">Deforestación y urbanización.</h4>
        </li>

      <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/omar_imangen2.jpg" width="600"></div>

        <li>
            <h4 data-i18n="p7.4">Contaminación del agua, aire y suelo.</h4>
        </li>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Contaminación_del_agua,_aire_y_suelo.jpeg" width="600"></div>

        <li>
            <h4 data-i18n="p7.5">Cambio climático, que altera hábitats.</h4>
        </li>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/EL-CAMBIO-CLIMATICO-1.jpg" width="600"></div>

        <li>
            <h4 data-i18n="p7.6">Caza y pesca ilegal.</h4>
        </li>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Caza_y_pesca_ilegal.jpeg" width="600"></div>

        <li>
            <h4 data-i18n="p7.7">Especies invasoras que desplazan a las nativas.</h4>
        </li>
    </ul>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Especies_invasoras_que_desplazan_a_las_nativas..jpg" width="600"></div>

    <p data-i18n="p7.8">
    <strong>Esto provoca la extinción de especies, lo cual rompe el equilibrio de los ecosistemas. Actualmente, miles de especies están en peligro, como el jaguar, el rinoceronte o la vaquita marina.</strong>
    <p data-i18n="p7.10">
    La pérdida de hábitats es uno de los principales impulsores de la extinción de especies. Se refiere a la destrucción, degradación o fragmentación de los entornos naturales donde viven los seres vivos. Esto sucede principalmente por actividades humanas como la deforestación, la expansión agrícola, la construcción de carreteras, presas y ciudades.
    </p>

    <p data-i18n="p7.11">
    Cuando un hábitat desaparece o se transforma, las especies que dependen de él no pueden sobrevivir, reproducirse o encontrar alimento. Algunas pueden adaptarse o migrar, pero muchas otras están tan especializadas que simplemente desaparecen. Este fenómeno afecta especialmente a animales como los tigres, orangutanes, osos polares, y a plantas endémicas de selvas, arrecifes y humedales.
    </p>

    <p data-i18n="p7.12">
    Por otro lado, las especies en peligro de extinción son aquellas cuyas poblaciones han disminuido drásticamente y corren el riesgo de desaparecer en un futuro cercano. Las causas son diversas: pérdida de hábitats, caza furtiva, comercio ilegal, cambio climático, contaminación y especies invasoras.
    </p>

    <p data-i18n="p7.13">
    Proteger a estas especies no es solo una cuestión ética. Cada organismo cumple una función en su ecosistema: polinización, control de plagas, reciclaje de nutrientes, entre otros. Si desaparecen, los ecosistemas se vuelven más frágiles, lo que también amenaza la seguridad alimentaria, la salud y el bienestar de los seres humanos.
    </p>

    <p data-i18n="p7.14">
    La Unión Internacional para la Conservación de la Naturaleza (UICN) elabora la Lista Roja de Especies Amenazadas, que clasifica el riesgo de extinción de miles de especies. Entre las más amenazadas están el lince ibérico, la tortuga carey, el gorila de montaña y el ajolote mexicano.
    </p>

    <p data-i18n="p7.15">
    Es fundamental conservar los hábitats naturales, frenar la deforestación, crear áreas protegidas, aplicar leyes contra la caza ilegal, promover la educación ambiental y apoyar programas de reproducción y reintroducción de especies en su hábitat natural.
    </p>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/7RiJsgQ1P1o?si=-ywb45xYR69ONmZ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>

 <footer>  

<h1 >CBT Dr. Eduardo Suarez A., Texcoco</h1>  

<h2>  Espinoza Sanchez Omar</h2>

</footer>  
</body>  
</html>