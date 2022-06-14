const url = "https://invirtual.mx/brieflogo/";

const movPag = document.getElementById("movPag");
const btnSig = document.querySelectorAll(".btnSig");
const btnAnt = document.querySelectorAll(".btnAnt");
const btnEnviarBrief = document.getElementById("btnEnviarBrief");
const modalFinal = document.getElementById("modalFinal");
const btnCerrarModal = document.getElementById("btnCerrarModal");
const pasoLogos = document.getElementById("pasoLogos");
var paso = 1;

// ------------------------------------------------------------------- Eventos para los Botones
for (const btn of btnSig) {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    toggleLogos(false);
    switch(paso){
      case 1:
        if(validarPasoUno()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 2:
        if(validarPasoDos()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 3:
        if(validarPasoTres()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 4:
        if(validarPasoCuatro()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 5:
        if(validarPasoCinco()){
          toggleLogos(true);
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 6:
        if(validarPasoSeis()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 7:
        if(validarPasoSiete()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 8:
        if(validarPasoOcho()){
          desplazarDerecha();
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
        break;
      case 9:
      break;
    }
  });
}

for (const btn of btnAnt) {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    toggleLogos(false);
    if(paso == 7){
      toggleLogos(true);
    }
    desplazarIzquierda();
  });
}

btnEnviarBrief.addEventListener('click',(e)=>{
  e.preventDefault();
  if(validarPasoNueve()){
    let data = new FormData();
    let datos = {};
    // ---------------------------- Recolecci贸n de datos para enviarlos
    /* Datos de contacto */
    datos.nombreCliente = nombreCliente.value;
    datos.correoCliente = correoCliente.value;
    datos.telefonoCliente = telefonoCliente.value;
  
    /* Datos de empresa */
    datos.nombreEmpresa = nombreEmpresa.value;
    datos.razonEmpresa = razonEmpresa.value;
    datos.correoEmpresa = correoEmpresa.value;
    datos.telefonoEmpresa = telefonoEmpresa.value;
    datos.direccionEmpresa =direccionEmpresa.value;
    datos.coloniaEmpresa = coloniaEmpresa.value;
    datos.municipioEmpresa = municipioEmpresa.value;
    datos.estadoEmpresa = estadoEmpresa.value;
    datos.cpostalEmpresa = cpostalEmpresa.value;
    datos.paisEmpresa = paisEmpresa.value;
    
    /* Info Logotipo */
    datos.historiaEmpresa = historiaEmpresa.value;
    datos.significadoNombre = significadoNombre.value;
    datos.actividadEmpresa = actividadEmpresa.value;
    datos.diferenciadorEmpresa = diferenciadorEmpresa.value;
    datos.competidoresEmpresa = competidoresEmpresa.value;
    datos.objetivoEmpresa = objetivoEmpresa.value;
    datos.mercadoMeta = mercadoMeta.value;

    checksTipoLogo = document.getElementsByName('checkTipoLogo');
    for (let checkTipoLogo of checksTipoLogo){
      if(checkTipoLogo.checked){
        datos.checkTipoLogo = checkTipoLogo.value;
      }
    }

    datos.ideaLogotipo = ideaLogotipo.value;
    datos.coloresLogotipo = coloresLogotipo.value;
    datos.mensajeLogotipo = mensajeLogotipo.value;
    datos.conSlogan = conSlogan.value;
    datos.ideaSlogan = ideaSlogan.value;
    datos.evitarDiseno = evitarDiseno.value;
    datos.evitarColores = evitarColores.value;

    /* Papeleria */
    checksManual = document.getElementsByName('checkManual');
    for (let checkManual of checksManual){
      if(checkManual.checked){
        datos.checkManual = checkManual.value;
      }
    }

    let papeleriaNecesitadas = document.getElementsByName('papeleriaNecesitada');
    let papeleriaNecesitada = [];
    for (let papeleria of papeleriaNecesitadas) {
      if(papeleria.checked || (papeleria.type == 'textarea' && papeleria.value != '')){
        papeleriaNecesitada.push(papeleria.value);
      }
    }
    //papeleriaNecesitada = JSON.stringify(papeleriaNecesitada);
    datos.papeleriaNecesitada = papeleriaNecesitada;

    let appsNecesitadas = document.getElementsByName('aplicacionesNecesitadas');
    let aplicacionesNecesitadas = [];
    for (let aplicacion of appsNecesitadas) {
      if(aplicacion.checked || (aplicacion.type == 'textarea' && aplicacion.value != '')){
        aplicacionesNecesitadas.push(aplicacion.value);
      }
    }
    //aplicacionesNecesitadas = JSON.stringify(aplicacionesNecesitadas);
    datos.aplicacionesNecesitadas = aplicacionesNecesitadas;
  
    // Hacer append del objeto datos (SOLO PARA EL ENVIO POR CORREO)
    data.append('datos',JSON.stringify(datos));
    
    fetch(url+'back/procForm.php',{
      method: 'POST',
      body: data
    }).then(res => res.text()).then((r) => {
      if(r == 'true'){
        mostrarModal('Se ha enviado el brief correctamente!', '#2ca02c');
      }else{
        mostrarModal('Ha ocurrido un error, favor de intentarlo mas tarde!', '#c83737');
      }
    });
  }
});

btnCerrarModal.addEventListener('click',(e)=>{
  e.preventDefault();
  window.location.reload();
});
// ------------------------------------------------------------------- Funciones para el Desplazamiento

const desplazarDerecha = () => {
  if (movPag.style.marginLeft == "") {
    movPag.style.marginLeft = "-10%";
  } else if (movPag.style.marginLeft != "") {
    let porcentaje = movPag.style.marginLeft;
    porcentaje = porcentaje.replace('-','');
    porcentaje = porcentaje.replace('%','');
    movPag.style.marginLeft = `-${parseInt(porcentaje,10) + 10}%`;
  }
  paso++;
}

const desplazarIzquierda = () => {
  if (movPag.style.marginLeft != "0%") {
    let porcentaje = movPag.style.marginLeft;
    porcentaje = porcentaje.replace('-','');
    porcentaje = porcentaje.replace('%','');
    movPag.style.marginLeft = `-${parseInt(porcentaje,10) - 10}%`;
    paso--;
  } else {
    return;
  }
}

const toggleLogos = (khe) => {
  if(khe){
    pasoLogos.classList.remove('hidden');
  }else{
    pasoLogos.classList.add('hidden');
  }
}
// ------------------------------------------------------------------- Funciones para validar Campos
const validarPasoUno = () => {
  if (validarCampoTexto('nombreCliente') && validarCampoTexto('correoCliente') && validarCampoTexto('telefonoCliente')){
    return true;
  }else{
    return false;
  }
}

const validarPasoDos = () => {
  if (validarCampoTexto('nombreEmpresa') && validarCampoTexto('razonEmpresa') && validarCampoTexto('correoEmpresa') && validarCampoTexto('telefonoEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoTres = () => {
  if (validarCampoTexto('direccionEmpresa') && validarCampoTexto('coloniaEmpresa') && validarCampoTexto('municipioEmpresa') && validarCampoTexto('estadoEmpresa') && validarCampoTexto('cpostalEmpresa') && validarCampoTexto('paisEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoCuatro = () => {
  if (validarCampoTexto('historiaEmpresa') && validarCampoTexto('significadoNombre') && validarCampoTexto('actividadEmpresa') && validarCampoTexto('diferenciadorEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoCinco = () => {
  if (validarCampoTexto('competidoresEmpresa') && validarCampoTexto('objetivoEmpresa') && validarCampoTexto('mercadoMeta')){
    return true;
  }else{
    return false;
  }
}

const validarPasoSeis = () => {
  if (validarCampoRadio('checkTipoLogo')){
    return true;
  }else{
    return false;
  }
}

const validarPasoSiete = () => {
  if (validarCampoTexto('ideaLogotipo') && validarCampoTexto('coloresLogotipo') && validarCampoTexto('mensajeLogotipo') && validarCampoTexto('conSlogan') && validarCampoTexto('conSlogan')){
    return true;
  }else{
    return false;
  }
}

const validarPasoOcho = () => {
  return true;
}

const validarPasoNueve = () => {
  if (validarCampoRadio('checkManual')){
    return true;
  }else{
    return false;
  }
}

const validarCampoTexto = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value == ''){
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
  }else{
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }
}

const validarCampoRadio = (nombreCampo) => {
  var inputs = document.getElementsByName(nombreCampo);
  let label = document.querySelector(`label[for=${nombreCampo}] span`);
  for (let input of inputs){
    if(input.checked){
      label.classList.add('hidden');
      return true;
    }
  }
  label.classList.remove('hidden');
  return false;
}

// ------------------------------------------------------------------- Funcion para el resultado asincrono
const mostrarModal = (mensaje, color) => {
  document.getElementById('mensajeModal').textContent = mensaje;
  document.getElementById('contIcono').style.background = color;
  document.getElementById('svgIco').src = (color == '#2ca02c') ? './img/check.svg' : './img/xmark.svg';
  modalFinal.classList.remove('hidden');
}
