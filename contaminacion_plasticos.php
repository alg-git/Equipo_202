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

<h1 data-i18n="p3.37">Cuidado del medio ambiente</h1>  
<h2 data-i18n="p3.1">Contaminación por plásticos y microplásticos</h2>

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

fetch('traductor_contaminacion_plasticos.json')
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


</select>
                    <div style="padding: 20px; max-width: 800px; margin: auto; background-color: #ffffff; border-radius: 15px;">
                          <h3 data-i18n="p3.38"> La contaminacion por plasticos</h3>

        <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/contaminacion_de_plasticos.jpg" width="600"></div>

  <p data-i18n="p3.2"> 
La contaminación por plásticos se ha convertido en uno de los problemas medioambientales más apremiantes, ya que el rápido aumento de la producción de productos de plástico desechables sobrepasa la capacidad que tiene el mundo para hacerse cargo de ellos.  </p>
  <p data-i18n="p3.3"> Este problema es más visible en los países en desarrollo de Asia y África, donde los sistemas de recolección de basuras son a menudo ineficaces o inexistentes. Pero el mundo desarrollado, especialmente en países con bajos índices de reciclaje, también tiene problemas para recoger adecuadamente los plásticos desechados. </p>
  <p data-i18n="p3.4"> La basura plástica se ha vuelto tan omnipresente que ha impulsado los esfuerzos para redactar un tratado mundial negociado por la Organización de las Naciones Unidas (ONU). </p>
  <h3 data-i18n="p3.5"> Cuándo y por qué se inventó el plástico </h3>
  <p data-i18n="p3.6"> Los plásticos fabricados a partir de combustibles fósiles tienen poco más de un siglo. La producción y el desarrollo de miles de nuevos productos de este materialse aceleraron tras la Segunda Guerra Mundial, transformando tanto la era moderna que la vida sin plásticos sería hoy irreconocible. </p>
  <p data-i18n="p3.7"> En el plástico, los inventores encontraron un material ligero y duradero que puede utilizarse en todo, desde el transporte hasta la medicina. </p>
                     
 <div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/historia_de_la_contaminacion_del_plastico.webp" width="600"></div>

  <p data-i18n="p3.8"> Los plásticos revolucionaron la medicina con dispositivos que salvan vidas, hicieron posible los viajes espaciales, aligeraron coches y aviones (ahorrando combustible y contaminación) y salvaron vidas con cascos, incubadoras y equipos para obtener agua potable limpia. </p>
  <p data-i18n="p3.9"> Sin embargo, las comodidades que ofrecen los plásticos han dado lugar a una cultura del usar y tirar que revela el lado oscuro de este material: hoy en día, los plásticos de un solo uso representan el 40% del total que se produce cada año. </p>
  <p data-i18n="p3.10"> Muchos de estos productos, como las bolsas y los envoltorios de alimentos, tienen una vida útil de apenas unos minutos u horas, pero pueden persistir en el medio ambiente durante cientos de años. </p>
  <h3 data-i18n="p3.11"> La contaminación de plásticos en cifras </h3>
  <h3 data-i18n="p3.12"> Algunos datos clave: </h3>
  <p data-i18n="p3.13"> La mitad de todos los plásticos fabricados se han hecho en los últimos 20 años. </p>
  <p data-i18n="p3.14"> La producción ha aumentado exponencialmente de 2.3 millones de toneladas en 1950 a 448 millones de toneladas en 2015. Se espera que la producción se duplique para 2050. </p>
  <p data-i18n="p3.15"> Cada año, unos ocho millones de toneladas de residuos plásticos se escapan a los océanos desde las naciones costeras. Eso equivale a depositar cinco bolsas de basura llenas de desperdicios en cada metro de costa de todo el mundo. </p>
                       
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/La_contaminación_de_plásticos_en_cifras.jpeg" width="600"></div>

  <p data-i18n="p3.16"> Los plásticos suelen contener aditivos que los hacen más resistentes, flexibles y duraderos. Pero muchos de estos aditivos pueden alargar la vida de los productos si se convierten en basura, con algunas estimaciones que van hasta los 400 años como mínimo para descomponerse. </p>
  <h3 data-i18n="p3.17"> Cómo se mueven los plásticos por el mundo </h3>
  <p data-i18n="p3.18"> La mayor parte de la basura plástica de los océanos, el último sumidero de la Tierra, circula desde la tierra. La basura también es transportada al mar por los grandes ríos, que actúan como cintas transportadoras, recogiendo más y más a medida que se desplazan río abajo.  </p>
  <p data-i18n="p3.19"> Una vez en el mar, gran parte de la basura plástica permanece en las aguas costeras. Pero una vez atrapada por las corrientes oceánicas, puede ser transportada por todo el mundo.</p>
  <p data-i18n="p3.20"> En la isla Henderson, un atolón deshabitado del Grupo de Pitcairn aislado a medio camino entre Chile y Nueva Zelanda, los científicos encontraron artículos de plástico procedentes de Rusia, Estados Unidos, Europa, Sudamérica, Japón y China. Fueron transportados al Pacífico Sur por el giro del Pacífico Sur, una corriente oceánica circular.</p>
  <h3 data-i18n="p3.21"> Microplásticos: una nueva amenaza para la salud</h3>
                        
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cómo_se_mueven_los_plásticos_por_elmundo.jpeg" width="600"></div>

  <p data-i18n="p3.22"> Una vez en el mar, la luz solar, el viento y la acción de las olas descomponen los residuos plásticos en pequeñas partículas, a menudo de menos de medio centímetro de diámetro. </p>
 <p data-i18n="p3.23"> Estos microplásticos se esparcen por toda la columna de agua y se han encontrado en todos los rincones del planeta, desde el Everest, el pico más alto, hasta la Fosa de las Marianas, la depresión más profunda.</p>
   <p data-i18n="p3.24">  Se descomponen en trozos cada vez más pequeños. Se han encontrado microfibras de plástico en los sistemas municipales de agua potable y en el aire.</p>
     <p data-i18n="p3.25"> No es de extrañar que los científicos hayan encontrado microplásticos en las personas. Las diminutas partículas están en nuestra sangre, pulmones e incluso en las heces. La cantidad exacta que puede dañar la salud humana es una pregunta a la que los científicos intentan responder urgentemente. </p>
  <h3 data-i18n="p3.26"> Cómo afecta el plástico a la fauna </h3>
  <p data-i18n="p3.27"> Millones de animales mueren cada año a causa de los plásticos, desde aves hasta peces y otros organismos marinos. Se sabe que casi 700 especies, incluidas algunas en peligro de extinción, se han visto afectadas por los plásticos. Casi todas las especies de aves marinas comen este material.</p>
  <p data-i18n="p3.28"> La mayoría de las muertes de animales se producen por enredo o inanición. Focas, ballenas, tortugas y otros animales son estrangulados por aparejos de pesca abandonados o anillas de seis latas desechadas. Se han encontrado microplásticos en más de 100 especies acuáticas, incluidos peces, gambas y mejillones destinados a nuestros platos.</p>
                          
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cómo_afecta_el_plástico_a_la_fauna.webp" width="600"></div>

  <p data-i18n="p3.29"> En muchos casos, estos diminutos trozos atraviesan el sistema digestivo y son expulsados sin consecuencias. Pero también se ha descubierto que los plásticos han bloqueado tractos digestivos o perforado órganos, causando la muerte. Los estómagos tan repletos de plásticos reducen las ganas de comer, provocando inanición.</p>
  <p data-i18n="p3.30"> Animales terrestres, como elefantes, hienas, cebras, tigres, camellos, ganado y otros grandes mamíferos, han consumido plásticos, causándoles la muerte en algunos casos.</p>
  <p data-i18n="p3.31"> Las pruebas también han confirmado daños hepáticos y celulares y alteraciones de los sistemas reproductivos, lo que ha provocado que algunas especies, como las ostras, produzcan menos huevos. </p>
  <p data-i18n="p3.32"> Nuevas investigaciones demuestran que las larvas de peces ingieren nanofibras en sus primeros días de vida, lo que plantea nuevos interrogantes sobre los efectos de los plásticos en las poblaciones de peces.</p>
                          
<div style="text-align:center; margin: 2px 0;">
    <img class="img"src="Imagenes/Cómo_afecta_el_plástico_a_la_fauna_con_animales_terrestres.webp" width="600"></div>

  <h3 data-i18n="p3.33"> Cómo detener la contaminación por plásticos</h3>
  <p data-i18n="p3.34"> Una vez en el océano, es difícil (sino imposible) recuperar los residuos plásticos. Los sistemas mecánicos, como Mr. Trash Wheel, un interceptor de basura en el puerto de Baltimore, en Maryland, pueden ser eficaces para recoger grandes trozos de plástico, como vasos de espuma y envases de comida, de aguas interiores.</p>
  <p data-i18n="p3.35"> Pero una vez que se descomponen en microplásticos y van a la deriva por la columna de agua en mar abierto, son prácticamente imposibles de recuperar.</p>
  <p data-i18n="p3.36"> Según muchos científicos y conservacionistas, entre ellos la National Geographic Society, la solución es evitar que los residuos plásticos lleguen a los ríos y mares. Esto podría lograrse con mejores sistemas de gestión de residuos y reciclaje, un mejor diseño de los productos que tenga en cuenta la corta vida de los envases desechables y una reducción de la fabricación de plásticos innecesarios de un solo uso. </p>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/RTRxZvVcjfM?si=SmB8Q081xyI5Rgxw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>

</body>
   <footer>  

<h1 >CBT Dr. Eduardo Suarez A., Texcoco</h1>  
<h2>  Gonzalez Hernandez Amairani Quetzal</h2>
</footer>  
     