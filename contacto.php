<?php 
$title= 'title_contact';
include_once './includes/header.php';
?>

<div style="height:45px"></div>
<?php include_once './templates/navbar.php' ?>

<div class="container-m contacto">
  <h1 class="titulo-seccion"><?php echo $lang['contact_title'] ?></h1>
  <hr class="hr-subtitulo">
  <div class="container-s contacto-content">
    <div class="col col-1">
      <h2><?php echo $lang['contact_subtitle'] ?></h2><br><br>
      <p><?php echo $lang['contact_text'] ?></p>
      <h3><?php echo $lang['contact_phone'] ?></h3>
      <h3><?php echo $lang['contact_mail'] ?></h3>
    </div>
    <div class="col col-2">
      <div class="formulario">
        <p class="obligatorio"><b><?php echo $lang['contact_form_required'] ?></b></p>
        <form name="form-contacto" id="form-contacto" onsubmit=validacionForm()>
          <input class="form-field" type="text" id="nombre" name="nombre" placeholder="<?php echo $lang['contact_form_name'] ?>"><br>

          <input class="form-field" type="text" id="apellido" name="apellido" placeholder="<?php echo $lang['contact_form_surname'] ?>"><br>

          <input class="form-field" type="email" id="email" name="email" placeholder="<?php echo $lang['contact_form_email'] ?>"><br>

          <select class="form-field" id="pais" name="pais">
            <option value=""><?php echo $lang['contact_form_coutry'] ?></option>
            <option value="argentina"><?php echo $lang['contact_form_coutry_op1'] ?></option>
            <option value="australia"><?php echo $lang['contact_form_coutry_op2'] ?></option>
            <option value="canada"><?php echo $lang['contact_form_coutry_op3'] ?></option>
            <option value="chile"><?php echo $lang['contact_form_coutry_op4'] ?></option>
            <option value="estados uidos"><?php echo $lang['contact_form_coutry_op5'] ?></option>
            <option value="nueva zelanda"><?php echo $lang['contact_form_coutry_op6'] ?></option>
            <option value="uruguay"><?php echo $lang['contact_form_coutry_op7'] ?></option>
            <option value="otro"><?php echo $lang['contact_form_coutry_op8'] ?></option>
          </select><br>

          <div class="form-field">
            <label><?php echo $lang['contact_form_documents'] ?></label><br><br>
            <label for="doc-si"><?php echo $lang['contact_form_yes'] ?></label><br>
            <input type="radio" onclick=documentosOnchange() id="doc-si" name="tieneDocumentos" value="Si">
            <label for="doc-no"><?php echo $lang['contact_form_no'] ?></label><br>
            <input type="radio" onclick=documentosOnchange() id="doc-no" name="tieneDocumentos" value="No">
          </div>

          <input class="form-field hide" type="number" id="documentos" name="documentos" placeholder="<?php echo $lang['contact_form_documents_count'] ?>">

          <div class="form-field">
            <label><?php echo $lang['contact_form_meeting'] ?></label><br><br>
            <label for="reunion-si"><?php echo $lang['contact_form_yes'] ?></label><br>
            <input type="radio" onclick=reunionOnchange() id="reunion-si" name="quiereReunion" value="Si">
            <label for="reunion-no"><?php echo $lang['contact_form_no'] ?></label><br>
            <input type="radio" onclick=reunionOnchange() id="reunion-no" name="quiereReunion" value="No">
          </div>

          <input class="form-field hide" type="date" id="fechaReunion" name="fechaReunion">

          <textarea class="form-field" id="consulta" name="consulta" placeholder="<?php echo $lang['contact_form_question'] ?>" style="height:200px"></textarea><br>

          <input class="btn btn-rosa" type="submit" value="<?php echo $lang['contact_form_btn'] ?>">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once './templates/footer.php' ?>

<?php include_once './includes/footer.php' ?>