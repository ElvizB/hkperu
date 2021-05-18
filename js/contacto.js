var db_contact = firebase.firestore();

// Primera
const formulario_contact = document.getElementById("formulario__contact"),
  modalenviado2 = document.getElementById("modalenviado__contact"),
  respuesta2 = document.getElementById("respuestaContact");

formulario_contact.addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();
  $(".bg-alerta").remove();
  $(".bg-advertencia").remove();
  const emailc = getInputVal("emailC"),
    celular = getInputVal("celularC"),
    dni = getInputVal("dniC"),
    empresa = getInputVal("empresaC"),
    mensaje = getInputVal("mensajeC"),
    recaptchaValidate = getInputVal("g-recaptcha-error");

  if (emailc == "" || emailc == null) {
    cambiarColor2("emailC");
    mostrarAlert2("¿Cuál es tu email?");
    return false;
  } else {
    const expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!expresion.test(emailc)) {
      cambiarColor2("emailC");
      showAdvert2("Email inválido");
      return false;
    }
  }

  if (celular == "" || celular == null) {
    cambiarColor2("celularC");
    mostrarAlert2("¿Cuál es tu celular?");
    return false;
  } else {
    const expresion = /^[0-9]{9}$/;
    if (!expresion.test(celular)) {
      cambiarColor2("celularC");
      showAdvert2("Número de celular inválido");
      return false;
    }
  }

  if (dni == "" || dni == null) {
    cambiarColor2("dniC");
    mostrarAlert2("¿Cuál es tu RUC O DNI?");
    return false;
  } else {
    const expresion = /^([0-9])*$/;
    if (!expresion.test(dni)) {
      cambiarColor2("dniC");
      showAdvert2("Número de RUC o DNI inválido");
      return false;
    }
  }

  if (empresa == "" || empresa == null) {
    cambiarColor2("empresaC");
    mostrarAlert2("¿Cuál es tu empresa?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(empresa)) {
      cambiarColor2("empresaC");
      showAdvert2("Empresa inválido");
      return false;
    }
  }

  if (mensaje == "" || mensaje == null) {
    //cambiarColor2("mensaje");
    mostrarAlert2("Escriba su mensaje por favor");
    return false;
  } else {
    const expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(mensaje)) {
      formulario_contact.mensaje.focus();
      cambiarColor2("mensajeC");
      showAdvert2("Mensaje inválido");
      return false;
    }
  }

  const response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById("g-recaptcha-error").innerHTML =
      '<div class="bg-alerta z-depth-2 animated bounceIn fast mt-2">Marque la opción</div>';
    return false;
  } else {
    document.getElementById("g-recaptcha-error").innerHTML = "";
  }

  var contacto = new FormData(formulario_contact);
  fetch("app/contacto.php", {
    method: "POST",
    body: contacto,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });

  //document.querySelector(".alertaenviado").style.display = "block";
  showEnviado2("Datos Enviados");
  guardar_contact();
  /*  setTimeout(function() {
      desaparecerenviado();
    }, 3000);*/
  document.getElementById("formulario__contact").reset();
  grecaptcha.reset();
  //$("form").submit();
  return true;
}

// Agregar documentos
function guardar_contact() {
  var email = document.getElementById("emailC").value;
  var celular = document.getElementById("celularC").value;
  var dni = document.getElementById("dniC").value;
  var empresa = document.getElementById("empresaC").value;
  var mensaje = document.getElementById("mensajeC").value;

  db_contact.collection("Contactos").add({
    email: email,
    celular: celular,
    dni: dni,
    empresa: empresa,
    mensaje: mensaje,
    fecha: firebase.firestore.Timestamp.fromDate(new Date()),
  });
  //db.collection("contactos").orderBy("fecha", "desc");
}
// leer documentos
/*var verdatos = document.getElementById("registros");
  db.collection("contactos").onSnapshot(querySnapshot => {
    verdatos.innerHTML = "";
    querySnapshot.forEach(doc => {
      //console.log(`${doc.id} => ${doc.data()}`);
      verdatos.innerHTML += `
                            <tr>
                                <td></td>
                                <td>${doc.data().nombre}</td>
                                <td>${doc.data().email}</td>
                                <td>${doc.data().celular}</td>
                                <td>${doc.data().asunto}</td>
                                <td>${doc.data().mensaje}</td>
                            </tr>
                          `;
    });
  });*/

$("input").focus(function () {
  $(".bg-alerta").remove();
  colorDefault2("emailC");
  colorDefault2("celularC");
  colorDefault2("dniC");
  colorDefault2("empresaC");
});

$("textarea").focus(function () {
  $(".bg-alerta").remove();
  colorDefault2("mensajeC");
});

function getInputVal(id) {
  return document.getElementById(id).value;
}

function colorDefault2(dato) {
  return document
    .getElementById(dato)
    .setAttribute("style", "border-bottom: 1px solid #ced4da");
}

function cambiarColor2(dato) {
  return document
    .getElementById(dato)
    .setAttribute(
      "style",
      "border-bottom: 1px solid #ced4da !important;box-shadow: 0 1px 0 0 #ced4da !important;"
    );
}

function mostrarAlert2(texto) {
  respuesta2.innerHTML =
    '<div class="bg-alerta z-depth-2 animated bounceIn fast small"> ' +
    texto +
    "</div>";
}

function showAdvert2(texto) {
  respuesta2.innerHTML =
    '<div class="bg-advertencia z-depth-2 animated bounceIn fast small">' +
    texto +
    "</div>";
}

function showEnviado2(texto) {
  var mensajemodal2 = `<div class="modal-wrap" id="modalenviado__contact">
                                <div class="mensaje-modal-content z-depth-3 animated bounceIn fast">
                                    <div class="mensaje-modal-header ">
                                        <p class="heading lead text-center">Mensaje Enviado</p>
                                        <button type="button" class="close" id="btnremove">
                                          <span aria-hidden="true" class="white-text">×</span>
                                        </button>
                                    </div>
                                    <div class="mensaje-modal-body">
                                        <div class="text-center">
                                            <i class="fas fa-check fa-3x green-text mb-3 animated rotateIn"></i>
                                            <p>${texto}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                       
                                    </div>
                                </div>
                              </div>
                              `;
  $("body").append(mensajemodal2);
  //cerrando modal
  $("#btnremove").click(function () {
    $(".modal-wrap").remove();
  });
}

/*function desaparecerenviado() {
    respuesta
      .querySelector(".bg-enviando")
      .setAttribute("style", "display: none");
  }*/
