function validacionForm() {
  event.preventDefault();
  let c1 = document.forms["form-contacto"]["nombre"];
  let c2 = document.forms["form-contacto"]["apellido"];
  let c3 = document.forms["form-contacto"]["email"];
  let c5 = document.forms["form-contacto"]["consulta"];
  let campos = [c1, c2, c3, c5];


  if (validarVacio(campos) && validarCantidad() && validarMail(c3) && validarFecha()) {
    alert("Mail enviado");
    formReset()
  }
}

function documentosOnchange() {
  if (document.forms["form-contacto"]["tieneDocumentos"].value == "Si") {
    let campo = document.forms["form-contacto"]["documentos"];
    campo.classList.remove("hide");
    const br = document.createElement('br');
    campo.appendChild(br);
  } else {
    document.forms["form-contacto"]["documentos"].classList.add("hide");
  }
}

function reunionOnchange() {
  if (document.forms["form-contacto"]["quiereReunion"].value == "Si") {
    var campo = document.forms["form-contacto"]["fechaReunion"];
    campo.classList.remove("hide");
    const br = document.createElement('br');
    campo.appendChild(br);
  } else {
    document.forms["form-contacto"]["fechaReunion"].classList.add("hide");
  }
}

function validarFecha() {
  let exito = true;
  let e = document.getElementById("fechaReunion");
  let fecha = e.value;
  let fechaDividida = fecha.split("-");
  let dd = fechaDividida[2];
  let mm = fechaDividida[1];
  let yyyy = fechaDividida[0];

  let today = new Date();
  let ddA = String(today.getDate()).padStart(2, '0');
  let mmA = String(today.getMonth() + 1).padStart(2, '0');
  let yyyyA = today.getFullYear();

  if (document.forms["form-contacto"]["quiereReunion"].value == "Si") {
    if (fecha != '' && yyyy > yyyyA) {
      e.classList.remove("invalido");
    } else if (yyyy == yyyyA) {
      if (mm > mmA) {
        e.classList.remove("invalido");
      } else if (mm == mmA) {
        if (dd > ddA) {
          e.classList.remove("invalido");
        } else {
          e.classList.add("invalido");
          exito = false;
        }
      } else {
        e.classList.add("invalido");
        exito = false;
      }
    } else {
      e.classList.add("invalido");
      exito = false;
    }
  }
  return exito;
}

function validarCantidad() {
  let exito = true;
  let e = document.getElementById("documentos");
  let num = e.value;
  if (document.forms["form-contacto"]["tieneDocumentos"].value == "Si") {
    if (num != '' && num >= 1) {
      e.classList.remove("invalido");
    } else {
      e.classList.add("invalido");
      exito = false;
    }
  }
  return exito;
}

function validarMail(c3) {
  let exito = true;
  let regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gmi;
  let valor = c3.value;
  if (regex.test(valor)) {
    c3.classList.remove("invalido");
  } else {
    c3.classList.add("invalido");
    exito = false;
  }
  return exito;
}

function validarVacio(campos) {
  let exito = true;
  campos.forEach(campo => {
    let e = document.getElementById(campo.name);
    if (campo.value.trim() == "") {
      e.classList.add("invalido");
      exito = false;
    } else {
      e.classList.remove("invalido");
    }
  });

  exito = validarVacioDocumentos(exito);
  exito = validarVacioFecha(exito);

  return exito;
}

function validarVacioDocumentos(exito) {
  let doc = document.getElementById("documentos");
  if (document.forms["form-contacto"]["tieneDocumentos"].value == "Si") {
    if (doc.value.trim() == "") {
      doc.classList.add("invalido");
      exito = false;
    } else {
      doc.classList.remove("invalido");
    }
  } else {
    doc.classList.remove("invalido");
  }
  return exito;
}

function validarVacioFecha(exito) {
  let reu = document.getElementById("fechaReunion");
  if (document.forms["form-contacto"]["quiereReunion"].value == "Si") {
    if (reu.value.trim() == "") {
      reu.classList.add("invalido");
      exito = false;
    } else {
      reu.classList.remove("invalido");
    }
  } else {
    reu.classList.remove("invalido");
  }
  return exito;
}

function formReset() {
  document.getElementById("form-contacto").reset();
  document.forms["form-contacto"]["fechaReunion"].classList.add("hide");
  document.forms["form-contacto"]["documentos"].classList.add("hide");
}