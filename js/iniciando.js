var FormularioLogins = document.getElementsByClassName('FormularioLogins')[0];
var Creando = document.getElementsByClassName('Creando')[0];
var Logins = document.querySelector('#Logins');

Logins.addEventListener('click',function(Evento){
    let CrearCuenta = document.getElementsByClassName('CrearCuenta')[0];
    let Iniciar = document.getElementsByClassName('Iniciar')[0];
    if(Evento.target== CrearCuenta ||Evento.target== Iniciar){
        if(Evento.target== CrearCuenta){
            if(FormularioLogins.classList.contains('Ocultando')){
                FormularioLogins.classList.remove('Ocultando');
            }else{
                Creando.classList.remove('Ocultando');
                FormularioLogins.classList.add('Ocultando');
                
            }
        }else{
            if(Creando.classList.contains('Ocultando')){
                Creando.classList.remove('Ocultando');
            }else{
                FormularioLogins.classList.remove('Ocultando');
                Creando.classList.add('Ocultando');
                
            }
        }
    }
})