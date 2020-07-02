 /* DEfiniendo las variables para manejar el cache */

 const Cache_Static_Name = "Static_v1";
 const Cache_Dynamic_Name = "Dynamic_v1";
 const Cache_Inmutable_Name = "Inmutable_v1";
 const Cache_Dynamic_Limit = 50;

 /* Funcion para limpiar el cache viejo */

 function LimpiarCache(Cache_Name, Numero_Limitante) {
     caches.open(Cache_Name)
         .then(Cache => {
             Cache.keys() //Obtengo todas las peticiones almacenadas en ese cache
                 .then(Peti => { ///obtengo cada una de las peticiones
                     if (Peti.length > Numero_Limitante) {
                         Cache.delete(Peti[0])
                             .then(LimpiarCache(Cache_Name, Numero_Limitante));
                     }
                 })
         })
 }


 /* Evento que me permite almacenr todos los datos mediante cache*/

 self.addEventListener('install', function (Evento) {
     const AlmacenamientoCache = new Promise(function (resolve, reject) {
         caches.open(Cache_Static_Name)
             .then(Cache => {
                 Cache.addAll([
                     "/TiendaOnLine/",
                     "index.php",
                     "productos.php",
                     "register.php",
                     "login.php",
                     "categoria.php",
                     "cerrar_sesion.php",
                     "css/bootstrap.min.css",
                     "css/stylesheet.css",
                     "css/all.min.css",
                     "css/swiper.min.css",
                     "js/jquery-3.5.1.slim.min.js",
                     "js/popper.min.js",
                     "js/bootstrap.min.js",
                     "js/main.js",
                     "offline.html",
                     "manifest.json"
                 ])
             });
         caches.open(Cache_Inmutable_Name)
             .then(Cache => {
                 return Cache.addAll([
                     "js/swiper.min.js"
                 ])
             })
         resolve();
     });
     Evento.waitUntil(AlmacenamientoCache);
 });

/******Permite eliminar todos los cache antiguos */
self.addEventListener("activate", function (Evento) {
    const EliminarAnterior = caches.keys()
        .then(Key => { //Recibo un array con todos lo cache que tengo almacenados
            Key.forEach(element => {///Realizo un recorrido por todos los Caches almacenados
                if (element !== Cache_Static_Name && element.includes("Static")) {
                    return caches.delete(element);
                }
                if(element !== Cache_Dynamic_Name && element.includes("Dynamic")){
                    return caches.delete(element);
                }
            });
        });
    Evento.waitUntil(EliminarAnterior)
});


//  self.addEventListener("fetch",function(Evento) {
//      const Respuesta = caches.match(Evento.request)
//          .then(Res => {
//              if (Res) return Res;
//              //console.log("No esxiste en el cache");
//              return fetch(Evento.request)
//                  .then(NewRespuesta => {
//                      caches.open(Cache_Dynamic_Name)
//                          .then(Cache => {
//                              Cache.put(Evento.request, NewRespuesta);
//                          })
//                      return NewRespuesta.clone();
//                  })
//                  ///Se dispara cuando no tenemos conexion a internet
//                  .catch(Error => {
//                      if (Evento.request.headers.get('accept').includes('text/html')) {

//                          return caches.match("pages/offline.html");
//                      }
//                  })
//          })
//      Evento.respondWith(Respuesta)
//  })
 
/***********Interceptando todas las peticiones del servidor**************** */
/* Ultilizando la tercer estrategia que permite pedir al servidor sino busca en el cache */
self.addEventListener("fetch", function (Evento) {

    //3-Primero busca en la internet luego busca en el cache

    const ResServidor = fetch(Evento.request) //Realizo la peticion al servidor de todas las peticiones
        .then(Respuesta => {
            if(!Respuesta) return caches.match(Evento.request);
            //Realizo un clon de la respuesta para asi utilizar para al macenarla en el cache
            console.log("Respuesta del Fetch del servidor", Respuesta);
            caches.open(Cache_Dynamic_Name)
                .then(Cache => {
                    Cache.put(Evento.request, Respuesta);
                    LimpiarCache(Cache_Dynamic_Name, Cache_Dynamic_Limit);
                })

            return Respuesta.clone();///Envio un clon debido a que no se puede utilizar una respuesta por segunda ves
        })
        .catch(Error => {
            ///Permite ver si no hay comunicacion con el internet
            console.log(Error);
            return caches.match(Evento.request)
        })


    Evento.respondWith(ResServidor)

})