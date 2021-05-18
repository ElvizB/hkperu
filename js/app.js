//Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: "AIzaSyDxp7StIXd0UVXaXQSN3dwtJdNBTbxcCyQ",
  authDomain: "gatalel-contact.firebaseapp.com",
  projectId: "gatalel-contact",
});

var db = firebase.firestore();

// Primera
const formulario = document.getElementById("formulario"),
  modalenviado = document.getElementById("modalenviado"),
  respuesta = document.getElementById("respuesta");

formulario.addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();
  $(".bg-alerta").remove();
  $(".bg-advertencia").remove();
  const nombre = getInputVal("nombre"),
    apellidoP = getInputVal("apellidoP"),
    apellidoM = getInputVal("apellidoM"),
    email = getInputVal("email"),
    celular = getInputVal("celular"),
    dni = getInputVal("dni"),
    consultoria = getInputVal("consultoria"),
    empresa = getInputVal("empresa"),
    sector = getInputVal("sector"),
    mensaje = getInputVal("mensaje"),
    terminos = document.getElementById("defaultRegisterFormNewsletter").checked,
    recaptchaValidate = getInputVal("g-recaptcha-error");

  if (nombre == "" || nombre == null) {
    formulario.nombre.focus();
    cambiarColor("nombre");
    mostrarAlert("¿Cuál es tu nombre?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(nombre)) {
      formulario.nombre.focus();
      cambiarColor("nombre");
      showAdvert("Nombre inválido");
      return false;
    }
  }

  if (apellidoP == "" || apellidoP == null) {
    formulario.apellidoP.focus();
    cambiarColor("apellidoP");
    mostrarAlert("¿Cuál es tu Apellido Paterno?");
    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(apellidoP)) {
      formulario.apellidoP.focus();
      cambiarColor("apellidoP");
      showAdvert("Apellido Paterno inválido");
      return false;
    }
  }

  if (apellidoM == "" || apellidoM == null) {
    formulario.apellidoM.focus();
    cambiarColor("apellidoM");
    mostrarAlert("¿Cuál es tu Apellido Materno?");
    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(apellidoM)) {
      formulario.apellidoM.focus();
      cambiarColor("apellidoM");
      showAdvert("Apellido Materno inválido");
      return false;
    }
  }

  if (email == "" || email == null) {
    formulario.email.focus();
    cambiarColor("email");
    mostrarAlert("¿Cuál es tu email?");
    return false;
  } else {
    const expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!expresion.test(email)) {
      formulario.email.focus();
      cambiarColor("email");
      showAdvert("Email inválido");
      return false;
    }
  }

  if (celular == "" || celular == null) {
    formulario.celular.focus();
    cambiarColor("celular");
    mostrarAlert("¿Cuál es tu celular?");
    return false;
  } else {
    const expresion = /^[0-9]{9}$/;
    if (!expresion.test(celular)) {
      formulario.celular.focus();
      cambiarColor("celular");
      showAdvert("Número de celular inválido");
      return false;
    }
  }

  if (dni == "" || dni == null) {
    formulario.dni.focus();
    cambiarColor("dni");
    mostrarAlert("¿Cuál es tu RUC O DNI?");
    return false;
  } else {
    const expresion = /^([0-9])*$/;
    if (!expresion.test(dni)) {
      formulario.dni.focus();
      cambiarColor("dni");
      showAdvert("Número de RUC o DNI inválido");
      return false;
    }
  }

  if (consultoria == "" || consultoria == null) {
    formulario.consultoria.focus();
    //cambiarColor("email");
    mostrarAlert("Elige una Consultoría");
    return false;
  }

  if (empresa == "" || empresa == null) {
    formulario.empresa.focus();
    cambiarColor("empresa");
    mostrarAlert("¿Cuál es tu empresa?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(empresa)) {
      formulario.empresa.focus();
      cambiarColor("empresa");
      showAdvert("Empresa inválido");
      return false;
    }
  }

  if (sector == "" || sector == null) {
    formulario.sector.focus();
    //cambiarColor("email");
    mostrarAlert("Elige un Sector");
    return false;
  }

  if (mensaje == "" || mensaje == null) {
    formulario.mensaje.focus();
    //cambiarColor("mensaje");
    mostrarAlert("Escriba su mensaje por favor");
    return false;
  } else {
    const expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(mensaje)) {
      formulario.mensaje.focus();
      cambiarColor("mensaje");
      showAdvert("Mensaje inválido");
      return false;
    }
  }

  if (terminos == false) {
    mostrarAlert("Acepte los términos");
    return false;
  }

  const response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById("g-recaptcha-error").innerHTML =
      '<div class="bg-alerta z-depth-2 animated bounceIn fast mt-2">Marque la opción</div>';
    return false;
  } else {
    document.getElementById("g-recaptcha-error").innerHTML = "";
  }

  var datos = new FormData(formulario);
  fetch("app/form.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });

  //document.querySelector(".alertaenviado").style.display = "block";
  showEnviado("Datos Enviados");
  guardar();
  /*  setTimeout(function() {
    desaparecerenviado();
  }, 3000);*/
  document.getElementById("formulario").reset();
  grecaptcha.reset();
  //$("form").submit();
  return true;
}

// Agregar documentos
function guardar() {
  var nombre = document.getElementById("nombre").value;
  var apellidoP = document.getElementById("apellidoP").value;
  var apellidoM = document.getElementById("apellidoM").value;
  var email = document.getElementById("email").value;
  var celular = document.getElementById("celular").value;
  var dni = document.getElementById("dni").value;
  var consultoria = document.getElementById("consultoria").value;
  var empresa = document.getElementById("empresa").value;
  var sector = document.getElementById("sector").value;
  var mensaje = document.getElementById("mensaje").value;

  db.collection("Consultoria_formacion").add({
    nombre: nombre,
    apellidoP: apellidoP,
    apellidoM: apellidoM,
    email: email,
    celular: celular,
    dni: dni,
    consultoria: consultoria,
    empresa: empresa,
    sector: sector,
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
  colorDefault("nombre");
  colorDefault("apellidoP");
  colorDefault("apellidoM");
  colorDefault("email");
  colorDefault("celular");
  colorDefault("dni");
  colorDefault("empresa");
});

$("textarea").focus(function () {
  $(".bg-alerta").remove();
  colorDefault("mensaje");
});

function getInputVal(id) {
  return document.getElementById(id).value;
}

function colorDefault(dato) {
  return document
    .getElementById(dato)
    .setAttribute("style", "border-bottom: 1px solid #ced4da");
}

function cambiarColor(dato) {
  return document
    .getElementById(dato)
    .setAttribute(
      "style",
      "border-bottom: 1px solid #ced4da !important;box-shadow: 0 1px 0 0 #ced4da !important;"
    );
}

function mostrarAlert(texto) {
  respuesta.innerHTML =
    '<div class="bg-alerta z-depth-2 animated bounceIn fast mt-2"> ' +
    texto +
    "</div>";
}

function showAdvert(texto) {
  respuesta.innerHTML =
    '<div class="bg-advertencia z-depth-2 animated bounceIn fast mt-2">' +
    texto +
    "</div>";
}

function showEnviado(texto) {
  var mensajemodal = `<div class="modal-wrap" id="modalenviado">
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
  $("body").append(mensajemodal);
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
