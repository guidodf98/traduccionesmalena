<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ES | Inicio | Traducciones Malena</title>
  <link rel="stylesheet" href="{{ asset('css/') }}/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.ico">
</head>

<body>
  <div style="height:45px"></div>
  <nav class="container-m">
    <div class="container-m nav">
      <div class="nav-logo">
        <a href="./index.html">
          <img src="./images/logo texto derecha.png" alt="logo Traducciones malena">
        </a>
      </div>
      <div class="nav-menu">
        <ul>
          <li><a href="#sobre-mi">@lang('home.navbar.about_me')</a></li>
          <li><a href="./es/contacto.html">@lang('home.navbar.contact')</a></li>
          <li><a href="#servicios">@lang('home.navbar.services')</a></li>
          <li><a href="#especializaciones">@lang('home.navbar.especializations')</a></li>
          <select class='selector-nav' name="Languaje" onchange="locateRedirect(value)">
            <option value="">@lang('home.navbar.languaje')&nbsp;</option>
            <option value="es">ES</option>
            <option value="en">EN</option>
            <option value="pr">PR</option>
          </select>
        </ul>
      </div>
    </div>
  </nav>
  <header class="container-m hero">
    <video src="images/video-fondo.mp4" autoplay loop muted></video>
    <div class="container-s hero-content">
      <div class="hero-text-1">
        <h1>@lang('home.hero.text1')</h1>
        <h1>@lang('home.hero.text2')</h1>
      </div>
      <div class="hero-text-2">
        <h2>@lang('home.hero.text3')</h2>
        <h2>@lang('home.hero.text4')</h2>
      </div>
    </div>
  </header>
  <div id="sobre-mi" class="container-m about-me">
    <div class="container-s about-me-content">
      <div class="col col-1">
        <img id="about-me-logo" src="images/logo texto derecha.png" alt="logo Traducciones malena">
        <img id="about-me-foto-perfil" src="images/foto-perfil.jpg" alt="logo Traducciones malena">
      </div>
      <div class="col col-2">
        <div class="col-2-content">
          <div class="col-2-content-title">
            <h2>@lang('home.')¡HOLA! <br>SOY MALENA</h2>
            <hr class="hr-subtitulo">
            <h5>@lang('home.')TRADUCTORA</h5>
          </div>
          <p>@lang('home.')Soy traductora inglés-español profesional. Emprendí este camino porque en la traducción encontré mi
            vocación: ayudar a personas como <b>TÚ</b>, que se animan a ir por <b>MÁS</b> y que creen que el idioma no
            es una limitación.</p>
          <br>
          <p>@lang('home.')¿Qué me diferencia del resto? Mi profesión me permite viajar, conocer gente, idiomas y culturas nuevas.
            Estas experiencias, sumado a mi formación académica y constante capacitación, me dan un sinfín de
            herramientas para brindarte un servicio lingüístico de calidad.</p>
          <br>
          <p>@lang('home.') Disfruto trabajar codo a codo con cada uno de mis clientes y lograr un resultado satisfactorio para
            ambos.</p>
          <br>
          <p>
            <span id="trabajamos-juntos"><b>@lang('home.')¿Trabajamos juntos?</b></span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="servicios" class="container-m servicios">
    <h1 class="titulo-seccion">@lang('home.')Servicios</h1>
    <hr class="hr-subtitulo">
    <div class="container-s servicios-etiquetas">
      <div class="servicios-etiquetas-etiqueta ">
        <div class="etiqueta-img">
          <img src="./images/servicios/traduccion.png" alt="">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.')Traducción</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.')
            Convierto tus textos al español o al inglés.
          </p>
          <p>@lang('home.')
            ¡Que tus palabras vuelen alto y lleguen lejos, muy lejos!
          </p>
        </div>
        <a href="./es/contacto.html" class="btn btn-rosa">@lang('home.')Traducir mis textos</a>
      </div>
      <div class="servicios-etiquetas-etiqueta">
        <div class="etiqueta-img">
          <img src="./images/servicios/revision.png" alt="">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.')Revisión y edición</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.')Me aseguro de que tu contenido sea impecable.
          </p>
          <p>@lang('home.')
            ¡Que ningún descuido, error o redundancia te impida lograr tu objetivo!
          </p>
        </div>
        <a href="./es/contacto.html" class="btn btn-rosa">@lang('home.')Obtener textos bien redactados</a>
      </div>
      <div class="servicios-etiquetas-etiqueta">
        <div class="etiqueta-img">
          <img src="./images/servicios/subtitulado.png" alt="">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.')Subtitulado</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.')
            Consigue que tu contenido audiovisual tenga un público internacional.
          </p>
          <p>@lang('home.')
            ¡Ponle PLAY a tus proyectos!
          </p>
        </div>
        <a href="./es/contacto.html" class="btn btn-rosa">@lang('home.')Subtitular mis videos</a>
      </div>
      <div class="servicios-etiquetas-etiqueta">
        <div class="etiqueta-img">
          <img src="./images/servicios/otros.png" alt="">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.')Otros servicios lingüísticos</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.')Armo tus glosarios, trancribo tus audios, redacto tus textos, ¡y más!</p>
        </div>
        <a href="./es/contacto.html" class="btn btn-rosa">@lang('home.')Necesito tu ayuda</a>
      </div>
    </div>
  </div>
  <div id="especializaciones" class="container-m especializaciones">
    <h1 class="titulo-seccion">@lang('home.')Especializaciones</h1>
    <hr class="hr-subtitulo">
    <div class="container-s especializaciones-etiquetas">
      <a href="./es/turismo-y-gastronomia.html">
        <div class="especializaciones-etiqueta especializacion-1">
          <img src="./images/Especializaciones/turismo y gastronomia.svg" alt="">
          <h4>@lang('home.')Turismo y Gastronomía</h4>
        </div>
      </a>
      <a href="./es/traducciones-tecnicas.html">
        <div class="especializaciones-etiqueta especializacion-2">
          <img src="./images/Especializaciones/traducciones tecnicas.svg" alt="">
          <h4>@lang('home.')Traducciones Técnicas</h4>
        </div>
      </a>
      <a href="./es/traducciones-legales.html">
        <div class="especializaciones-etiqueta especializacion-3">
          <img src="./images/Especializaciones/traducciones legales.svg" alt="">
          <h4>@lang('home.')Traducciones Legales</h4>
        </div>
      </a>
    </div>
  </div>
  <div class="container-m testimonios">
    <i class="icon-me icon-left-open icon-testimonio" onclick=testimonioAnterior()>&#xe802;</i>
    <div class="testimonio">
      <div id="testimonio-1" class="etiqueta-testimonio ">
        <p class="etiqueta-testimonio-texto">@lang('home.')Trabajar con Malena fue muy fácil, es increíblemente experta en lo que
          hace. Fue muy atenta, siempre completó
          sus tareas y aplicó las modificaciones y comentarios del cliente rápidamente. ¡Un placer trabajar con ella!
        </p>
        <br>
        <p class="etiqueta-testimonio-nombre">@lang('home.')CATALINA PIRE SCHMIDT</p>
        <p class="etiqueta-testimonio-ciudad">@lang('home.')Nearpod</p>
        <p class="etiqueta-testimonio-traducido">@lang('home.')(Traducido al español)</p>
      </div>
      <div id="testimonio-2" class="etiqueta-testimonio hide">
        <p class="etiqueta-testimonio-texto">@lang('home.')Trabajar junto a Malena fue estupendo. Todo fue sencillo e impecable, desde
          la cotización y el ejemplo de traducción que nos envió, hasta el producto final. Realmente se tomó el tiempo
          de entender a la audiencia receptora de su traducción. Además, cuando hubo dudas, nos brindó ejemplos y nos
          preguntó nuestras opiniones y luego decidió cuál era la mejor opción para nuestra comunidad. Para futuras
          traducciones de National Wire, definitivamente volveré a contratar a Malena.</p>
        <br>
        <p class="etiqueta-testimonio-nombre">@lang('home.')SOMMER BLAZEK
        </p>
        <p class="etiqueta-testimonio-ciudad">@lang('home.')National Wire
        </p>
        <p class="etiqueta-testimonio-traducido">@lang('home.')(Traducido al español)
        </p>
      </div>
      <div id="testimonio-3" class="etiqueta-testimonio hide">
        <p class="etiqueta-testimonio-texto">@lang('home.')Malena nos brindó un servicio rápido y con una muy buena relación
          precio-calidad sin ningún problema. No dudaremos en contratar sus servicios nuevamente en el futuro y la
          recomendaremos para cualquier otro trabajo de traducción.
        </p>
        <br>
        <p class="etiqueta-testimonio-nombre">@lang('home.')CAMERON PADFIELD
        </p>
        <p class="etiqueta-testimonio-ciudad">@lang('home.')Otipoti</p>
        <p class="etiqueta-testimonio-traducido">@lang('home.')(Traducido al español)
        </p>
      </div>
    </div>
    <i class="icon-me right-open icon-testimonio" onclick=testimonioSiguiente()>&#xe803;</i>
  </div>
  <div style="height:45px"></div>
  <div class="container-m contacto-home">
    <h1 class="titulo-seccion">@lang('home.')Contacto</h1>
    <hr class="hr-subtitulo">
    <div class="container-s contacto-home-content">
      <div class="contacto-home-content-texto">
        <h2>@lang('home.')¿Encontraste lo que estabas buscando?</h2>
        <br>
        <br>
        <p>@lang('home.')¡Entonces no esperes más! Llena el formulario o escríbeme a mi correo o teléfono celular y comencemos a
          trabajar en tu proyecto. Recibirás respuesta en menos de 24 hs.</p>
        <br>
        <h3>@lang('home.')+54 299 571 6905</h3>
        <h3>@lang('home.')hello@traduccionesmalena.com</h3>
      </div>
      <a href="./es/contacto.html">
        <div class="btn btn-rosa">
          <p>@lang('home.')Contactame</p>
        </div>
      </a>
    </div>
  </div>
  <footer class="container-m footer">
    <div class="container-s footer-content">
      <div class="col3 footer-content-col">
        <h4 class="footer-content-titulo">
          <span class="rosa">[</span>@lang('home.')
          &nbspSERVICIOS&nbsp
          <span class="rosa">]
          </span>
        </h4>
        <a href="#servicios">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Traducción</p>
        </a>
        <a href="#servicios">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Revisión y edición</p>
        </a>
        <a href="#servicios">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Subtitulado</p>
        </a>
        <a href="#servicios">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Otros servicios
            lingüísticos</p>
        </a>
      </div>
      <div class="col3 footer-content-col">
        <h4 class="footer-content-titulo">
          <span class="rosa">[</span>@lang('home.')
          &nbspESPECIALIDADES&nbsp
          <span class="rosa">]
          </span>
        </h4>
        <a href="./es/turismo-y-gastronomia.html">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Turismo y Gastronomía</p>
        </a>
        <a href="./es/traducciones-tecnicas.html">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Traducciones Técnicas</p>
        </a>
        <a href="./es/traducciones-legales.html">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Traducciones Legales</p>
        </a>
      </div>
      <div class="col3 footer-content-col">
        <h4 class="footer-content-titulo">
          <span class="rosa">[</span>@lang('home.')
          &nbspREDES SOCIALES&nbsp
          <span class="rosa">]</span>
        </h4>
        <a href="https://www.instagram.com/traducciones.malena/">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Instagram</p>
        </a>
        <a href="https://www.proz.com/translator/2753983">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') Proz</p>
        </a>
        <a href="https://www.linkedin.com/in/malena-traducciones/">
          <p><span class="rosa"><i class="icon-me right-open icon-footer">&#xe803;</i></span>@lang('home.') LinkedIn</p>
        </a>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/') }}/slider.js" defer></script>
  <script src="{{ asset('js/') }}/locateRedirect.js" defer></script>
</body>

</html>
