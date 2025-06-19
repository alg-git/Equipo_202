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

<h1 data-i18n="p3.22">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p3.23"> Cambio de habitos para reducir el impacto ambirntal</h2>

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

fetch('traslation3.json')
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
<div style="padding: 20px; max-width: 900px; margin: auto; background-color: #ffffff; border-radius: 15px;">
    
<h1 data-i18n="p3h1"> Los cambios</h1>
<p data-i18n="p3.1"> El cambio de hábitos para reducir el impacto ambiental es fundamental para cuidar el planeta y asegurar un futuro sostenible. Consiste en modificar nuestras rutinas diarias para minimizar el daño que causamos al medio ambiente. Aquí tienes algunos ejemplos clave:</p><br>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cambio_de_habitos_para_reducir_el_impacto_ambiental.jpg" width="350"></div>

<h2 data-i18n="p3.2">Alimentación</h2><br><br>

<li data-i18n="p3.3">Reduce el consumo de carne y productos de origen animal: La producción ganadera es una de las principales fuentes de gases de efecto invernadero.</li><br><br>

<li data-i18n="p3.4">Compra productos locales y de temporada: Reduces la huella de carbono asociada al transporte.</li><br><br>

<li data-i18n="p3.5">Evita el desperdicio de alimentos: Planifica tus comidas y almacena los alimentos adecuadamente.</li><br><br>

 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/comprar_alimentos_consientemente.jpg" width="350"></div>

<h2 data-i18n="p3.6">Consumo responsable</h2><br><br>

<li data-i18n="p3.7">Evita el plástico de un solo uso: Usa botellas reutilizables, bolsas de tela y envases reciclables.</li><br><br>

<li data-i18n="p3.8">Compra menos y mejor: Opta por productos duraderos, reparables y hechos con materiales sostenibles.</li><br><br>

<li data-i18n="p3.9">Apoya marcas con prácticas éticas y sostenibles.</li><br><br>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/consumo_de_menos_plasticos.jpg" width="350"></div>

<h2 data-i18n="p3.10">Transporte</h2><br><br>

<li data-i18n="p3.11">Camina, usa la bicicleta o el transporte público siempre que sea posible.</li><br><br>

<li data-i18n="p3.12">Comparte el coche o trabaja desde casa si tienes la opción.</li><br><br>

<li data-i18n="p3.13">Considera vehículos eléctricos o híbridos si debes usar automóvil.</li><br><br>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/movilidad_sustentable.jpeg" width="350"></div>

<h2 data-i18n="p3.14">Energía</h2><br><br>

<li data-i18n="p3.15">Apaga luces y aparatos electrónicos cuando no los uses.</li><br><br>

<li data-i18n="p3.16">Aprovecha la luz natural al máximo.</li><br><br>

<li data-i18n="p3.17">Instala bombillas LED de bajo consumo.</li><br><br>

<li data-i18n="p3.18">Si puedes, instala paneles solares o elige una compañía eléctrica con energía renovable.</li><br><br>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/energia.jpg" width="350"></div>

<h2 data-i18n="p3.19">Agua</h2><br><br>

<li data-i18n="p3.20">Cierra el grifo mientras te cepillas los dientes o lavas los platos.</li><br><br>

<li data-i18n="p3.21">Repara fugas de inmediato.</li><br><br>

<li data-i18n="p3.24">Usa sistemas de bajo consumo en duchas, grifos e inodoros. </li><br><br>

<li data-i18n="p3.25">Recolecta agua de lluvia para riego.</li><br><br>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/uso_responsable_del_agua.jpeg" width="350"></div>

<h2 data-i18n="p3.26">Productos de limpieza e higiene</h2><br><br>

<li data-i18n="p3.27">Usa productos biodegradables y ecológicos.</h2><br><br>

<li data-i18n="p3.28">Evita los productos con microplásticos.</li><br><br>

<li data-i18n="p3.29">Haz tus propios limpiadores naturales (vinagre, bicarbonato, limón).</li><br><br>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/productos-de-limpieza-ecologicos-biodegradables-ilutrativo.png" width="350"></div>


<h2 data-i18n="p3.30">Naturaleza y comunidad</h2><br><br>

<li data-i18n="p3.31">Planta árboles o cuida espacios verdes.</li><br><br>

<li data-i18n="p3.32"> Participa en limpiezas comunitarias o actividades ambientales.</li><br><br>

<li data-i18n="p3.33">Educa a otros sobre la importancia de cuidar el medio ambiente.</li><br><br>

<iframe width="590" height="400" src="https://www.youtube.com/embed/1Xar55g7PYE?si=VpoQSnE9PvbeyMsk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>

</main>

<footer>   <h2>Plantel:CBT Dr. Eduardo Suarez A., Texcoco<br>Aremy Roldan Perez</h2></footer>