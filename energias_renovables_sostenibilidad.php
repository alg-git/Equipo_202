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

<h1 data-i18n="p5.39">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p5.1">Energías renovables y sostenibilidad</h2>

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

fetch('traductor_energia_renovable_sostenibilidad.json')
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

  <h3 data-i18n="p5.2"> Tipos de energías renovables: cuáles son y qué papel tienen</h3>
  <p data-i18n="p5.3"> Las energías renovables son fuentes naturales inagotables que contribuyen a los Objetivos de Desarrollo Sostenible y la sostenibilidad global. Solar, eólica, hidráulica, geotérmica, mareomotriz, biomasa y biogás son claves en la transición energética.</p>
  <p data-i18n="p5.4"> Las energías renovables se caracterizan por su bajo impacto en el medioambiente, puesto que no generan residuos. A su vez, son fuentes de energía ilimitadas y autóctonas, ya que dependiendo de las características del lugar se pueden desarrollar.</p>
    <p data-i18n="p5.5"> Por ejemplo, los países con mayor número de horas de sol al año son propensos a generar energía solar. Por otro lado, los situados en zonas ventosas optarán por la energía eólica.</p>
    
    <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Uso de Energías Renovables.jpg" width="600"></div>

  <h3 data-i18n="p5.6"> ¿Cuáles son las energías renovables?</h3>
  <p data-i18n="p5.7"> Solar</p>
  <p data-i18n="p5.8"> Eólica</p>
  <p data-i18n="p5.9"> Hidráulica</p>
  <p data-i18n="p5.10"> Geotérmica</p>
  <p data-i18n="p5.11"> Mareomotriz</p>
  <p data-i18n="p5.12"> Undimotriz</p>
  <p data-i18n="p5.13"> La biomasa o el biogás</p>
      
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cuáles_son_las_energías_renovables.jpg" width="600"></div>

  <h4 data-i18n="p5.14"> Energía solar: qué es, tipos y por qué es clave en la sostenibilidad</h4>
  <p data-i18n="p5.15"> Este tipo de energía renovable consiste en aprovechar la radiación electromagnética procedente del sol mediante células fotovoltáicas, colectores solares o heliostatos. La propia energía solar puede ser fotovoltáica o térmica. </p>
    <p data-i18n="p5.16"> La diferencia es que la energía solar fotovoltáica produce directamente electricidad a partir de la radiación solar. Mientras que la térmica consiste en aprovechar la energía solar para producir calor.</p>
  <p data-i18n="p5.17"> La energía solar es una de las renovables que más posibilidades tienen a la hora de desarrollarse, puesto que el sol en mayor o menor medida puede ser aprovechado como fuente de energía en cualquier parte del planeta. Uno de los hitos clave para entender el desarrollo de la energía solar data de la década de los 70, cuando la crisis del petróleo hace buscar alternativas que abaraten el encarecimiento del crudo.</p>
  <p data-i18n="p5.18"> Además, este tipo de renovable puede ser una solución perfecta para lugares donde exportar energía es muy complicado y costoso. Desde la ONU, Hawai es uno de los casos que puede ser de éxito. La isla, debido a su situación geográfica, persigue el objetivo de autoabastecer al 100% de sus energías renovables para el año 2045.</p>
   
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_solar.webp" width="600"></div>

  <h4 data-i18n="p5.19"> Energía eólica: cómo funciona y ventajas de su uso renovable</h4>
  <p data-i18n="p5.20"> El viento es el responsable de generar energía cinética, que se obtiene por el movimiento que este provoca al mover las palas de un aerogenerador. Los parques eólicos también conforman una buena solución para muchas regiones debido al bajo coste de la producción eléctrica y su carácter no contaminante</p>
  <p data-i18n="p5.21"> La construcción de muchos parques eólicos se ubica en el mar, debido a que el viento es más estable frente al mar. Sin embargo, el coste de su construcción se incrementa debido a la complejidad a la hora de erigirse</p>
  <p data-i18n="p5.22"> El 45% de la energía eléctrica que consume BBVA en España es de origen eólico tras la inauguración en diciembre de 2019 del parque eólico situado en la localidad de Villamayor de Gállego, a las afueras de Zaragoza. El 55% de energía restante es suministrado por Endesa, mediante el modelo de suministro tradicional basado en certificados verdes, tanto en edificios corporativos como en la red de sucursales.</p>

<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_eólica.jpeg" width="600"></div>

  <h4 data-i18n="p5.23"> Energía hidráulica: cómo se genera y su impacto renovable</h4>
  <p data-i18n="p5.24"> Este tipo de energía renovable aprovecha el movimiento del agua para generar energía eléctrica. La obtención de esta tipología de energía se debe al aprovechamiento de la energía cinética y potencial de los saltos de agua, corrientes o mareas. La fuerza que provoca el movimiento del agua hace girar una turbina conectada a un transformador, que convierte el movimiento en energía eléctrica.</p>
  <p data-i18n="p5.25"> La energía hidráulica es renovable, puesto que no contamina y debido al ciclo del agua se puede considerar inagotable. Sin embargo, la construcción de presas o sistemas de retención del caudal del agua si no se proyectan de forma ordenada, sí provoca un impacto medioambiental al modificar el ecosistema.</p>
      
  <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_hidráulica.jpg" width="600"></div>

  <h4 data-i18n="p5.26"> Energía geotérmica: qué es, usos y beneficios renovables</h4>
  <p data-i18n="p5.27"> La Tierra emite calor. Es el principio fundamental que sigue esta energía renovable, que aprovecha el calor del interior de la corteza terrestre. Estas características hacen que la energía geotérmica sea una buena alternativa para producir energía térmica, tanto en uso industrial como doméstico.</p>
  <p data-i18n="p5.28"> Según la FAO, este tipo de energía puede ser muy beneficiosa en los países en desarrollo, puesto que puede ser usada en el secado de alimentos o la pasteurización y esterilización de la leche.</p>
       
  <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_geotérmica.webp" width="600"></div>

  <h4 data-i18n="p5.29"> Energía mareomotriz y undimotriz: cómo generan energía renovable</h4>
  <p data-i18n="p5.30"> La fuerza de las mareas puede generar energía. La llamada energía mareomotriz es la energía renovable que aprovecha el movimiento de las mareas, es importante no confundirlo con la energía undimotriz que aprovecha la fuerza de las olas.</p>
  <p data-i18n="p5.31"> La metodología que se emplea en este tipo de energía pasa por la instalación de generadores, que aprovechan el movimiento del agua del mar de forma similar a las turbinas eólicas. A diferencia de la mareomotriz, la obtención de energía undimotriz se basa en el aprovechamiento de la fuerza de las olas.</p>
            
 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Energía_mareomotriz_y_undimotriz.webp" width="600"></div>

  <h4 data-i18n="p5.32"> Biomasa y biogás: qué son y cómo generan energía renovable</h4>
  <p data-i18n="p5.33"> La generación de energía a partir de restos orgánicos es otra de las energías renovables, en este caso vinculada al gas y a la energía eléctrica. Hablamos del biogás, pero para llegar a ella necesitamos antes la biomasa</p>
  <p data-i18n="p5.34"> Y, ¿qué es la biomasa? Nos referimos a este término cuando hablamos de la materia orgánica que proviene de plantas, árboles y desechos animales susceptible de ser utilizada como fuente de energía. Para su conversión son necesarios los digestores anaerobios, dispositivos usados para el procesamiento de estos residuos orgánicos. Tras procesarlos, obtenemos biogás.</p>
  <p data-i18n="p5.35"> Entonces, ¿qué es el biogás? El Instituto para la Diversificación y Ahorro de la Energía (IDAE) lo define así: “Es un gas compuesto principalmente por metano (CH4) y dióxido de carbono (CO2), en proporciones variables dependiendo de la composición de la materia orgánica a partir de la cual se ha generado”.</p>
              
  <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Biomasa_y_biogás.webp" width="600"></div>

  <h4 data-i18n="p5.36"> Bioetanol y biodiésel: qué son y ventajas como energías renovables</h4>
  <p data-i18n="p5.37"> El bioetanol es un combustible renovable producido a partir de residuos o de cultivos sostenibles. Al ser una biomasa de origen vegetal, está considerado como una energía renovable y su empleo disminuye ampliamente la emisión de gases contaminantes a la atmósfera. Además, es el único combustible alternativos que se evalúa certificando toda la cadena de emisiones desde su producción hasta su consumo, no sólo las emisiones del vehículo.</p>
  <p data-i18n="p5.38"> Por otro lado, existe el biodiésel. Este es un combustible 100% vegetal y 100% biodegradable, por tanto, hablamos de una energía renovable e inagotable, que no genera residuos tóxicos. Para su producción hay que realizar un proceso de refinado a partir de una amplia variedad de aceites y grasas. Puede ser utilizado en motores diesel de alto rendimiento o incluso para producción de calor y energía.</p>
                
<iframe width="560" height="315" src="https://www.youtube.com/embed/eRXY4pnLhmI?si=4E_xaR2yo3dBbeZd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>

</body>
<footer>
<h1 >CBT Dr. Eduardo Suarez A., Texcoco</h1>  
<h2>  Gonzalez Hernandez Amairani Quetzal</h2>
</footer>  
