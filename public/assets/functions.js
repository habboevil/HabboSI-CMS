

var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

(function() {

  document.addEventListener("mousemove", parallax);
  const elem = document.querySelector(".particles__content");

  function parallax(e) {
      let _w = window.innerWidth/2;
      let _h = window.innerHeight/2;
      let _mouseX = e.clientX;
      let _mouseY = e.clientY;
      let _depth1 = `${50 - (_mouseX - _w) * 0.03}px, ${50 - (_mouseY - _h) * 0.03}px`;
      let x = `${_depth1}`;
      elem.style.transform = "translate(" + x +")";
  }
})();


}

var swiper = new Swiper(".multiple-slide-carousel", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    autoplay: { 
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        990: {
            slidesPerView: 2,
            spaceBetween: 0
        },
        576: { 
            slidesPerView: 1,
            spaceBetween: 0
        },
        0: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});