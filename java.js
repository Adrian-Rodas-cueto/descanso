
// variables necesarias del dom
let menu = document.getElementById("bt_menu");
let menu2 = document.getElementById("bt_menu2");
let sesion = document.getElementById("desconectar");
let sesion2 = document.getElementById("desconectar2");
let iniciar = document.getElementById("iniciar");
let registrar = document.getElementById("registrar");
let cerrar = document.getElementById("cerrar");
let h2_registrar = document.getElementById("h2_registrar");
let h2_iniciar = document.getElementById("h2_iniciar");
let boton = document.getElementById("boton");
let boton2 = document.getElementById("boton2");


//funciones

//mostrar menu plegable
function mostrar_menu() {
    document.getElementById("menu").classList.remove("hide");
    menu.classList.add("oculto");
    menu2.classList.remove("oculto");
}

function ocultar_menu() {
    document.getElementById("menu").classList.add("hide");
    menu2.classList.add("oculto");
    menu.classList.remove("oculto");
}
//opciones para iniciar sesion
function mostrar() {
    document.getElementById("registro").classList.remove("sesionoculta");
    sesion.classList.add("oculto");
    sesion2.classList.remove("oculto");
}

function ocultar() {
    console.log("lol")
    document.getElementById("registro").classList.add("sesionoculta");
    sesion2.classList.add("oculto");
    sesion.classList.remove("oculto");
}
//mostrar ventana para iniciar sesion
function iniciarSesion() {
    h2_iniciar.classList.add("active");
    h2_iniciar.classList.remove("inactive");
    document.getElementById("inisiarSesion").classList.remove("oculto");
    document.getElementById("registrarUsuario").classList.add("oculto");
    document.getElementById("para_recuperar_pass").classList.remove("oculto");
    document.getElementById("para_registrarme").classList.remove("oculto");
    document.getElementById("para_iniciar").classList.add("oculto");
    h2_registrar.classList.remove("active");
    h2_registrar.classList.add("inactive");
}

function cerrarSesion(){
    window.location="cerrar.php";
}

function registrarUsuario() {
    h2_iniciar.classList.remove("active");
    h2_iniciar.classList.add("inactive");
    document.getElementById("inisiarSesion").classList.add("oculto");
    document.getElementById("registrarUsuario").classList.remove("oculto");
    document.getElementById("para_recuperar_pass").classList.add("oculto");
    document.getElementById("para_registrarme").classList.add("oculto");
    document.getElementById("para_iniciar").classList.remove("oculto");
    h2_registrar.classList.add("active");
    h2_registrar.classList.remove("inactive");
}

function iniciarSesion1() {
    h2_iniciar.classList.add("active");
    h2_iniciar.classList.remove("inactive");
    document.getElementById("inisiarSesion").classList.remove("oculto");
    document.getElementById("registrarUsuario").classList.add("oculto");
    document.getElementById("para_recuperar_pass").classList.remove("oculto");
    document.getElementById("para_registrarme").classList.remove("oculto");
    document.getElementById("para_iniciar").classList.add("oculto");
    document.getElementById("form").classList.remove("oculto");
    document.getElementById("main").classList.add("oculto");
    h2_registrar.classList.remove("active");
    h2_registrar.classList.add("inactive");
}

function registrarUsuario1() {
    h2_iniciar.classList.remove("active");
    h2_iniciar.classList.add("inactive");
    document.getElementById("inisiarSesion").classList.add("oculto");
    document.getElementById("registrarUsuario").classList.remove("oculto");
    document.getElementById("para_recuperar_pass").classList.add("oculto");
    document.getElementById("para_registrarme").classList.add("oculto");
    document.getElementById("para_iniciar").classList.remove("oculto");
    document.getElementById("form").classList.remove("oculto");
    document.getElementById("main").classList.add("oculto");
    h2_registrar.classList.add("active");
    h2_registrar.classList.remove("inactive");
}

function ocultar_main() {
    document.getElementById("form").classList.add("oculto");
    document.getElementById("main").classList.remove("oculto");

}

function mostrar_main() {
    document.getElementById("form").classList.add("oculto");
    document.getElementById("main").classList.remove("oculto");
}

//llamadas de las funciones

//mostrar menu
menu.addEventListener("click", mostrar_menu);
menu2.addEventListener("click", ocultar_menu);

//mostrar opciones de inicio de sesion
sesion.addEventListener("click", mostrar);
sesion2.addEventListener("click", ocultar);

//intercambiar entre inicio de sesion o registrarse
h2_iniciar.addEventListener("click", iniciarSesion);
h2_registrar.addEventListener("click", registrarUsuario);

// mostrar el formulario de inicio o de registro
if(iniciar!=null){
    iniciar.addEventListener("click", iniciarSesion1);
    registrar.addEventListener("click", registrarUsuario1);
}else{
    cerrar.addEventListener("click", cerrarSesion);
}
//comprobar si el usuario exite para iniciar


//boton.addEventListener("click", acceder);
//boton2.addEventListener("click", registrarse);

//ordenar la BD 
//BD = MergeSort(BD);

var bucle = setInterval(function(){
    $.ajax({
        url: "try.php", //url del server al cual le queres hacer la peticion
        type : "GET", // post, get, merge .. tipos de peticiones http
        beforeSend: function(){
            $('#res').show();
        },
        success: function(data){
            $('#res').html(data);
        }, 
        error: function(){
           console.log("EROR");
        } 
    });
    console.log("uno")
},9000);
