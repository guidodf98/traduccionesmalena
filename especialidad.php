<?php
$title = 'title';
include_once './includes/header.php';
include_once './includes/next_esp.php';
?>



<div style="height:45px"></div>
<?php include_once './templates/navbar.php' ?>
<div class="container-m esp-header h-<?php echo $_GET['esp'] ?>">
</div>
<div class="container-m esp-titulo">
  <div class="esp-titulo-content">
    <h1 class="text-center"><?php echo $lang[$_GET['esp']]['title'] ?></h1>
    <hr class="hr-titulo">
  </div>
</div>
<div class="container-s esp-content">
  <div class="esp-content-col1 col">
    <p><?php echo $lang[$_GET['esp']]['content_p1'] ?></p>
    <p><?php echo $lang[$_GET['esp']]['content_p2'] ?></p>
    <p><?php echo $lang[$_GET['esp']]['content_p3'] ?></p>
    <h3><?php echo $lang[$_GET['esp']]['help_title'] ?></h3>
    <ul>
      <li><?php echo $lang[$_GET['esp']]['help_i1'] ?></li>
      <li><?php echo $lang[$_GET['esp']]['help_i2'] ?></li>
      <li><?php echo $lang[$_GET['esp']]['help_i3'] ?></li>
      <li><?php echo $lang[$_GET['esp']]['help_i4'] ?></li>
      <li><?php echo $lang[$_GET['esp']]['help_i5'] ?></li>
      <li><?php echo $lang[$_GET['esp']]['help_i6'] ?></li>
    </ul>
  </div>
  <div class="esp-content-col2 col imagen-esp-<?php echo $_GET['esp'] ?>">
  </div>
</div>
<div class="container-m esp-otros">
  <h1 class="titulo-seccion"><?php echo $lang[$_GET['esp']]['other_title'] ?></h1>
  <hr class="hr-subtitulo">
  <div class="col-otros">
    <a href="<?php echo $dominio ?>/especialidad.php?esp=<?php echo $array_esp[0] ?>" class="col-otros-link">
      <img width="100" height="100" src="<?php echo $dominio ?>/images/<?php echo $array_esp[0] ?>/<?php echo $array_esp[0] ?>-n.svg" />
      <h2 class="esp-link text-center"><?php echo $lang[$array_esp[0]]['title'] ?></h2>
    </a>
  </div>
  <div class="col-otros">
    <a href="<?php echo $dominio ?>/especialidad.php?esp=<?php echo $array_esp[1] ?>" class="col-otros-link">
      <img width="100" height="100" src="<?php echo $dominio ?>/images/<?php echo $array_esp[1] ?>/<?php echo $array_esp[1] ?>-n.svg" />
      <h2 class="esp-link text-center"><?php echo $lang[$array_esp[1]]['title'] ?></h2>
    </a>
  </div>
</div>

<?php include_once './templates/contact_button.php' ?>
<?php include_once './templates/footer.php' ?>
<?php include_once './includes/footer.php' ?>