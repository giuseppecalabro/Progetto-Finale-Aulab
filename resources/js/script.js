// SWIPER HOME ULTIMI ARTICOLI HOME / SISTEMATO NON TOCCARE NIENTE!!!! ---------------------------------
var swiper1 = new Swiper(".mySwiper1", {
        // slidesPerView: 4,
        autoplay: {delay:2000},
        // spaceBetween: 30,
        // slidesPerGroup: 1,
        loop: true,
        // loopFillGroupWithBlank: true,
        grabCursor: true,
        // centerInsufficientSlides: true,
        // freeMode: true,
        // watchSlidesProgress: true,
        keyboard: {
          enabled: true,
        },
        // pagination: {
        //   el: ".swiper-pagination",
        //   clickable: true,
        // },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
});
// END SWIPER HOME ULTIMI ARTICOLI HOME / SISTEMATO NON TOCCARE NIENTE!!!! ---------------------------------

// SWIPER DETTAGLIO ARTICOLO MAIN PAGE-----------------------------------
var swiper = new Swiper(".mySwiper", {
  slidesPerView: "4",
        // autoplay: {delay:2000},
        spaceBetween: 30,
        loop: true,
        grabCursor: true,
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
  
},
  loop: true,
  spaceBetween: 10,
  centerInsufficientSlides: true,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
//END SWIPER DETTAGLIO ARTICOLO--------------------------------


// SWIPER DETTAGLIO ARTICOLI SIMILI STESSA CATEGORIA / SISTEMATO NON TOCCARE NIENTE!!!! ---------------------------------
var swiper4 = new Swiper(".mySwiper4", {
  // slidesPerView: 4,
  autoplay: {delay:2000},
  spaceBetween: 30,
  // slidesPerGroup: 4,
  loop: true,
  // loopFillGroupWithBlank: true,
  grabCursor: true,
  centerInsufficientSlides: true,
  // freeMode: true,
  // watchSlidesProgress: true,
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
// SWIPER DETTAGLIO ARTICOLI SIMILI STESSA CATEGORIA / SISTEMATO NON TOCCARE NIENTE!!!! ---------------------------------




// END SWIPER CATEGORIE / SISTEMATO NON TOCCARE NIENTE!!!!----------------------------------------
var swiper3 = new Swiper(".mySwiper3", {
  // effect: "fade",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: false,
  grabCursor: false,
  keyboard: {
    enabled: true,
  }
});
// END SWIPER CATEGORIE / SISTEMATO NON TOCCARE NIENTE!!!!----------------------------------------



//CREA PROBLEMI CON ALTRI JS - DA RICONTROLLARE SE DA USARE - HOME NUMERI CRESCENTI----------------------------------------
// let firstNumber = document.querySelector('#firstNumber');
// let secondNumber = document.querySelector('#secondNumber');
// let thirdNumber = document.querySelector('#thirdNumber');

// let check = false;

// function createInterval(element, final, number){
//     let counter = 0;

//     let interval = setInterval( ()=>{
//         if(counter < final){
//             counter+=4;
//             element.innerHTML = counter;
//             setTimeout(() => {
//                 check = false;
//             }, 4000);
//         }else{
            
//             clearInterval(interval);
//         }

//     } , number )
// }

// IntersectionObserver(): Classe

// let observer = new IntersectionObserver((entries)=>{

//     entries.forEach((entry)=>{

//         if(entry.isIntersecting && check == false){
//             createInterval(firstNumber, 1500, 2);
//             createInterval(secondNumber, 300, 15);
//             createInterval(thirdNumber, 600, 7);
//             // test.style.transform = `scale(1.0)`;
//             check = true;
//         }

//     });

// });

// observer.observe(firstNumber);

//END NUMERI CRESCENTI
