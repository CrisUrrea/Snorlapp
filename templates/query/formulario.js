//Cambio revisar
function revisar(){
    var password = document.fmpassword.password.value;
    var confirmacion = document.fmpassword.validacion.value;

    if(password==confirmacion){
        window.alert("El cambio ha sido exitoso");
        document.getElementById('impresion').value=password;
    } else{
        window.alert("Los datos ingresados son incorrectos");
    }
}

//Seguridad Mensaje
function buscar(){
    var usuario=document.fmBuscar.usuario.value;
    if(usuario=="cristhian.urreaat"){
      window.alert("Usuario encontrado");
      document.getElementById('rolSelect').style.display="inline";
    } else{
      if(usuario=="valentina.alvarezmu"){
        window.alert("Usuario encontrado");
        document.getElementById('rolSelect').style.display="inline";
      } else {
        if(usuario=="diego.zuluagaye"){
          window.alert("Usuario encontrado");
          document.getElementById('rolSelect').style.display="inline";
        } else{
          if(usuario=="maria.bohorquezme"){
            window.alert("Usuario encontrado");
            document.getElementById('rolSelect').style.display="inline";
          } else{
            window.alert("El usuario no se encuentra");
            document.getElementById('rolSelect').style.display="none";
          }
        }
      }
    }
  }

function texto(){
    if(document.getElementById('select').value=="#"){
        document.getElementById('mensajerol').innerHTML="Seleccione una opcion por favor";
        document.getElementById('confirmacion').style.display="none";
    } else{
        document.getElementById('confirmacion').style.display="inline";
        document.getElementById('mensajerol').innerHTML="";
    }
}

//Validar personal
function confirmacion(){
    var firma=document.fmBuscar.firma.value;

    if(firma=="Diego Zuluaga"){
        document.getElementById('enviar').style.display="inline";
    } else{
        document.getElementById('enviar').style.display="none";
        window.alert("La información es incorrecta o no tienes los permisos necearios");
    }
}

function enviar(){
  window.alert("El cambio ha sido exitoso");
}

function qr(){
  window.location("qrO.html");
}