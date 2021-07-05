<?php
$title = 'title_home';
include_once './includes/header.php'
?>

<div style="height:45px"></div>

<?php include_once './templates/navbar.php' ?>
<header class="container-m hero">
  <video src="<?php echo $dominio ?>/images/video-fondo.mp4" autoplay loop muted></video>
  <div class="container-s hero-content">
    <div class="hero-text-1">
      <h1><?php echo $lang['hero_text1'] ?></h1>
      <h1><?php echo $lang['hero_text2'] ?></h1>
    </div>
    <div class="hero-text-2">
      <h2><?php echo $lang['hero_text3'] ?></h2>
      <h2><?php echo $lang['hero_text4'] ?></h2>
    </div>
  </div>
</header>
<div class="container-m about-me" id="sobre-mi">
  <div class="container-s about-me-content">
    <div class="col col-1">
      <img id="about-me-logo" src="<?php echo $dominio ?>/images/logo-texto-derecha.png" alt="logo Traducciones malena">
      <img id="about-me-foto-perfil" src="<?php echo $dominio ?>/images/foto-perfil.jpg" alt="logo Traducciones malena">
    </div>
    <div class="col col-2">
      <div class="col-2-content">
        <div class="col-2-content-title">
          <h2><?php echo $lang['about_me_title'] ?></h2>
          <hr class="hr-subtitulo">
          <h5><?php echo $lang['about_me_subtitle'] ?></h5>
        </div>
        <p><?php echo $lang['about_me_p1'] ?></p><br>
        <p><?php echo $lang['about_me_p2'] ?></p><br>
        <p><?php echo $lang['about_me_p3'] ?></p><br>
        <p><span id="trabajamos-juntos"><b><?php echo $lang['about_me_p4'] ?></b></span></p>
      </div>
    </div>
  </div>
</div>
<div class="container-m servicios" id="servicios">
  <h1 class="titulo-seccion"><?php echo $lang['services_title'] ?></h1>
  <hr class="hr-subtitulo">
  <div class="container-s servicios-etiquetas">
    <div class="servicios-etiquetas-etiqueta ">
      <div class="etiqueta-img">
        <img src="<?php echo $dominio ?>/images/servicios/traduccion.png">
      </div>
      <div class="etiqueta-titulo">
        <h3><?php echo $lang['services_serv1_title'] ?></h3>
      </div>
      <div class="etiqueta-texto">
        <p><?php echo $lang['services_serv1_p1'] ?></p>
        <p><?php echo $lang['services_serv1_p2'] ?></p>
      </div>
      <a href="<?php echo $dominio ?>/contacto.php" class="btn btn-rosa"><?php echo $lang['services_serv1_btn'] ?></a>
    </div>
    <div class="servicios-etiquetas-etiqueta">
      <div class="etiqueta-img">
        <img src="<?php echo $dominio ?>/images/servicios/revision.png">
      </div>
      <div class="etiqueta-titulo">
        <h3><?php echo $lang['services_serv2_title'] ?></h3>
      </div>
      <div class="etiqueta-texto">
        <p><?php echo $lang['services_serv2_p1'] ?></p>
        <p><?php echo $lang['services_serv2_p2'] ?></p>
      </div>
      <a href="<?php echo $dominio ?>/contacto.php" class="btn btn-rosa"><?php echo $lang['services_serv2_btn'] ?></a>
    </div>
    <div class="servicios-etiquetas-etiqueta">
      <div class="etiqueta-img">
        <img src="<?php echo $dominio ?>/images/servicios/subtitulado.png">
      </div>
      <div class="etiqueta-titulo">
        <h3><?php echo $lang['services_serv3_title'] ?></h3>
      </div>
      <div class="etiqueta-texto">
        <p><?php echo $lang['services_serv3_p1'] ?></p>
        <p><?php echo $lang['services_serv3_p2'] ?></p>
      </div>
      <a href="<?php echo $dominio ?>/contacto.php" class="btn btn-rosa"><?php echo $lang['services_serv3_btn'] ?></a>
    </div>
    <div class="servicios-etiquetas-etiqueta">
      <div class="etiqueta-img">
        <img src="<?php echo $dominio ?>/images/servicios/otros.png">
      </div>
      <div class="etiqueta-titulo">
        <h3><?php echo $lang['services_serv4_title'] ?></h3>
      </div>
      <div class="etiqueta-texto">
        <p><?php echo $lang['services_serv4_p1'] ?></p>
      </div>
      <a href="<?php echo $dominio ?>/contacto.php" class="btn btn-rosa"><?php echo $lang['services_serv4_btn'] ?></a>
    </div>
  </div>
</div>
<div class="container-m especializaciones" id="especializaciones">
  <h1 class="titulo-seccion"><?php echo $lang['especializations_title'] ?></h1>
  <hr class="hr-subtitulo">
  <div class="container-s especializaciones-etiquetas">
    <a href="<?php echo $dominio ?>/especialidad.php<?php echo $lang['lang_url'] ?>&esp=tg">
      <div class="especializaciones-etiqueta especializacion-1">
        <img src="<?php echo $dominio ?>/images/tg/tg-b.svg">
        <h4><?php echo $lang['especializations_esp1'] ?></h4>
      </div>
    </a>
    <a href="<?php echo $dominio ?>/especialidad.php<?php echo $lang['lang_url'] ?>&esp=tt">
      <div class="especializaciones-etiqueta especializacion-2">
        <img src="<?php echo $dominio ?>/images/tt/tt-b.svg">
        <h4><?php echo $lang['especializations_esp2'] ?></h4>
      </div>
    </a>
    <a href="<?php echo $dominio ?>/especialidad.php<?php echo $lang['lang_url'] ?>&esp=lt">
      <div class="especializaciones-etiqueta especializacion-3">
        <img src="<?php echo $dominio ?>/images/lt/lt-b.svg">
        <h4><?php echo $lang['especializations_esp3'] ?></h4>
      </div>
    </a>
  </div>
</div>
<div class="container-m testimonios">
  <i class="icon-me icon-left-open icon-testimonio" onclick=testimonioAnterior()>&#xe802;</i>
  <div class="testimonio">
    <div id="testimonio-1" class="etiqueta-testimonio ">
      <p class="etiqueta-testimonio-texto"><?php echo $lang['testimonials_test1_text'] ?></p><br>
      <p class="etiqueta-testimonio-nombre"><?php echo $lang['testimonials_test1_name'] ?></p>
      <p class="etiqueta-testimonio-ciudad"><?php echo $lang['testimonials_test1_business'] ?></p>
      <p class="etiqueta-testimonio-traducido"><?php echo $lang['testimonials_translated_to'] ?></p>
    </div>
    <div id="testimonio-2" class="etiqueta-testimonio hide">
      <p class="etiqueta-testimonio-texto"><?php echo $lang['testimonials_test2_text'] ?></p><br>
      <p class="etiqueta-testimonio-nombre"><?php echo $lang['testimonials_test2_name'] ?></p>
      <p class="etiqueta-testimonio-ciudad"><?php echo $lang['testimonials_test2_business'] ?></p>
      <p class="etiqueta-testimonio-traducido"><?php echo $lang['testimonials_translated_to'] ?></p>
    </div>
    <div id="testimonio-3" class="etiqueta-testimonio hide">
      <p class="etiqueta-testimonio-texto"><?php echo $lang['testimonials_test3_text'] ?></p><br>
      <p class="etiqueta-testimonio-nombre"><?php echo $lang['testimonials_test3_name'] ?></p>
      <p class="etiqueta-testimonio-ciudad"><?php echo $lang['testimonials_test3_business'] ?></p>
      <p class="etiqueta-testimonio-traducido"><?php echo $lang['testimonials_translated_to'] ?></p>
    </div>
  </div>
  <i class="icon-me right-open icon-testimonio" onclick=testimonioSiguiente()>&#xe803;</i>
</div>
<div style="height:45px"></div>

<?php include_once './templates/contact_button.php' ?>

<?php include_once './templates/footer.php' ?>


<?php include_once './includes/footer.php' ?>