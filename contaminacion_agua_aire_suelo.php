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

<h1 data-i18n="p2.17">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p2.1">Contaminación del agua, del aire y del suelo</h2>

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

fetch('traductor_contaminacion_agua_aire_suelo.json')
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

<div style="padding: 20px; max-width: 800px; margin: auto; background-color: #ffffff; border-radius: 15px;">

      <h3 data-i18n="p2.2">Contaminación del agua: causas y consecuencias</h3>
        <label for="sitio">

        <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/contaminacion_del_agua_aire_suelo.jpg" width="600"></div>

        
      <p data-i18n="p2.3">La contaminación ambiental crece de manera vertiginosa, en paralelo, al desarrollo industrial y al aumento de la población, en especial, a lo largo del último siglo y medio. Ambos factores contribuyen a establecer un desequilibrio en el medioambiente y en los ecosistemas ante la presencia de contaminantes de distinta clave, como los agentes químicos (abonos sintéticos, derivados del plástico, disolventes, ácidos, pesticidas,…), biológicos (los desperdicios de numerosas fábricas, desagües que vierten líquidos tóxicos a la hidrosfera, serrín de la industria forestal,…) o físicos (radioactividad, energía electromagnética, ruido,…).</p>
      <p data-i18n="p2.4">La acción combinada a lo largo del tiempo de todos estos elementos provoca la contaminación del agua, y en consecuencia la contaminación del mar y los ríos, del aire y del suelo. En el caso del agua, el principal efecto palpable es que su composición se altera y deja de poseer las condiciones óptimas para, por ejemplo, su consumo.</p>
      <p data-i18n="p2.5">Los vertidos de aguas negras (consecuencia de los desechos líquidos de ciudades y de plantas de producción que no la tratan de la manera adecuada), los derrames de petróleo (en perforaciones petroleras en los que ocurre algún accidente o en el transporte del ‘oro negro’ por vías marítimas) o el uso indiscriminado y abusivo de productos fitosanitarios (en los campos, por cuestiones agrícolas, pero que la tierra, posteriormente, filtra y alcanzan las aguas subterráneas) son algunos de los procesos y acciones que explican por qué el agua se contamina.</p>
                  <label for="sitio">

                   <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/alteracion_del_agua.jpg" width="600"></div>


            <p data-i18n="p2.6">La contaminación por los plásticos que se vierten al mar está también repercutiendo muy negativamente en la calidad del agua y de los ecosistemas marinos.</p>
      <p data-i18n="p2.7">A estos hay que sumar, además, dos factores más que, de manera indirecta, influyen de un modo decisivo en la calidad del agua: por un lado, el aumento de la temperatura como consecuencia del cambio climático, que altera su composición ya que, entre otros efectos, provoca que disminuya la presencia de oxígeno; por el otro, la tala indiscriminada de árboles y la deforestación ocasiona que se desarrollen colonias de bacterias en la tierra que, a largo plazo, se filtran y contaminan el agua subterránea.</p>
            <h3 data-i18n="p2.8">Contaminación del aire y del suelo: impacto en la salud y el entorno</h3>
         <label for="sitio">

         <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/contaminacion_del_suelo.jpg" width="600"></div>


      <p data-i18n="p2.9">En cuanto a la contaminación del aire, también, el principal problema es que se altera su composición, de modo que lo que respiramos deja de ser, en esencia, lo más saludable para mantener el óptimo estado de nuestro cuerpo.</p>  <p data-i18n="p2.10">Los principales detonantes son la extracción de hidrocarburos fósiles (sobre todo, petróleo, gas natural y carbón), la posterior combustión de estos combustibles en los medios de transporte y en las industrias, la quema de los bosques (en especial, los tropicales) y el auge del sector ganadero, que provoca una cría indiscriminada de ganado bovino cuyo proceso digestivo provoca la degradación del aire.</p>
          <label for="sitio">

           <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cuidado_del_medio_ambiente.jpg" width="600"></div>


      <p data-i18n="p2.11">En general, la alteración del aire significa que sus partículas sólidas y los gases varían su peso como consecuencia del denominado efecto invernadero (que es el proceso por el que determinados gases, que son componentes de la atmósfera planetaria, retienen parte de la energía que el suelo emite por haber sido calentado por la radiación solar).</p>
            <p data-i18n="p2.12">Al romperse el equilibrio natural de gases y de elementos químicos en la atmósfera, la temperatura aumenta, provocando un calentamiento global que tiene una incidencia directa para la supervivencia de muchas especies animales y vegetales.</p>
      <p data-i18n="p2.13">La emisión de sustancias químicas a la atmósfera como el monóxido de carbono, el dióxido de azufre, los CFCs (clorofluorocarbonos) y ciertos óxidos de nitrógeno es la principal causa del empeoramiento general del aire que respiramos. </p>
                   <label for="sitio">

                     <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/fabricas.jpg" width="600"></div>


            <p data-i18n="p2.14">Una exposición prolongada a las partículas contaminantes del aire es factor determinante de infartos de miocardio, ictus isquémicos, insuficiencias cardíacas, problemas dermatológicos, alergias cutáneas y oculares, y, también, del aumento de linfomas.</p>
      <p data-i18n="p2.15">Por su parte, la contaminación del suelo crece como consecuencia del aumento de compuestos químicos y de basuras derivadas de las actividades del ser humano. El uso abusivo de pesticidas (con sus correspondientes agentes químicos) o el almacenamiento subterráneo (que contiene líquidos y gases derivados del petróleo que terminan por filtrarse al suelo) son sus principales detonantes desde el punto de vista industrial.</p>
            <p data-i18n="p2.16">Pero el propio desarrollo de las ciudades, a través de la generación de basura que no es tratada de la manera adecuada se ha convertido en el primer catalizador de la degradación del suelo, a lo que se suma que algunos vertidos, de carácter tóxico, tardan muchos años en descomponerse, con lo que su efecto nocivo se deja sentir durante bastante tiempo.</p>
            
<iframe width="560" height="315" src="https://www.youtube.com/embed/jjMAOV1XeOY?si=ebHfSfJ38eXZx4Ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</body>
      <footer>  

<h1 >CBT Dr. Eduardo Suarez A., Texcoco</h1>  
<h2>  Gonzalez Hernandez Amairani Quetzal</h2>
</footer>  
      