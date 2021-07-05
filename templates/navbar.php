<?php
include_once './includes/variables.php';
include_once './lang/languajeSelector.php';
?>
<nav class="container-m">
  <div class="container-m nav">
    <div class="nav-logo">
      <a href="<?php echo $dominio ?>/index.php<?php echo $lang['lang_url'] ?>">
        <img src="<?php echo $dominio ?>/images/logo-texto-derecha.png" alt="logo Traducciones malena">
      </a>
    </div>
    <div class="nav-menu">
      <ul>
        <li><a href="<?php echo $dominio ?>/index.php<?php echo $lang['lang_url'] ?>#sobre-mi"><?php echo $lang['about_me'] ?></a></li>
        <li><a href="<?php echo $dominio ?>/contacto.php<?php echo $lang['lang_url'] ?>"><?php echo $lang['contact'] ?></a></li>
        <li><a href="<?php echo $dominio ?>/index.php<?php echo $lang['lang_url'] ?>#servicios"><?php echo $lang['services'] ?></a></li>
        <li><a href="<?php echo $dominio ?>/index.php<?php echo $lang['lang_url'] ?>#especializaciones"><?php echo $lang['especializations'] ?></a></li>
        <select name="languaje" id="languaje" class="selector-nav" onchange="languajeChange(value)">
          <option value=""><?php echo $lang['languaje'] ?></option>
          <option value="es">ES</option>
          <option value="en">EN</option>
          <option value="pr">PR</option>
        </select>
      </ul>
    </div>
  </div>
</nav>
