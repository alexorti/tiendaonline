
if(navigator.serviceWorker){
  navigator.serviceWorker.register('sw.js')
}



/* Permite ejecutarse cuando todo el documento ya este completamente cargada en la pagina */
window.addEventListener('DOMContentLoaded',function() {
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 20,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});
});


