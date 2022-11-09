document.addEventListener('DOMContentLoaded', () => {
  burger();
  dropDown();
  fade();
  slick();
  pageFade();
  map();
});

const burger = () => {
  const burger = document.querySelector('.header__burger'),
        burgerMenu = document.querySelector('.header__nav-mobile');

  burger.addEventListener('click', () => {
  burger.classList.toggle('active');
  burgerMenu.classList.toggle('active');
  });
}

const dropDown = () => {
  const toggleBtn = document.querySelector('.header__dropdown-toggle');
  const dropdownMenu = document.querySelector('.header__dropdown-menu');
  
  function removeClass() {
      dropdownMenu.classList.remove('active');
      toggleBtn.classList.remove('active');
  }
  
  toggleBtn.addEventListener('click', () => {
      dropdownMenu.classList.toggle('active');
      toggleBtn.classList.toggle('active');
  });

  document.addEventListener('click', e => {
      if (e.target !== toggleBtn) {
          removeClass();
      }
  });

  document.addEventListener('keydown', e => {
      if (e.key === 'Escape' || e.key === 'Tab') {
          removeClass();
      }
  });
}

const fade = () => {
  const promoWrapper = document.querySelector('.promo__title'),
        promoBtn = document.querySelector('.promo__btn');

  setTimeout(() => {
      promoWrapper.classList.add('active');
  }, 500);
  
  setTimeout(() => {
      promoBtn.classList.add('active');
  }, 1000);
}

const slick = () => {
  $('.services__slider ').slick({
    centerMode: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    dots: true,
    arrows: true,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
  });
}

const pageFade = () => {
  $("body").css("opacity", "1");
}

const map = () => {
  const btn1 = document.querySelector('.toggler1'),
        btn2 = document.querySelector('.toggler2'),
        map1 = document.querySelector('.map_1'),
        map2 = document.querySelector('.map_2');

  
  btn1.addEventListener('click', () => {
    map1.classList.add('active');
    map2.classList.remove('active');

    function e() {
      let map = new ymaps.Map('map1', {
        center: [59.911087, 30.288371],
        zoom: 16,
      });


      let placemark = new ymaps.Placemark([59.911087, 30.288371], {}, {});


      map.controls.remove('geolocationControl'); // удаляем геолокацию
      map.controls.remove('searchControl'); // удаляем поиск
      map.controls.remove('trafficControl'); // удаляем контроль трафика
      map.controls.remove('typeSelector'); // удаляем тип
      map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
      map.controls.remove('zoomControl'); // удаляем контрол зуммирования
      map.controls.remove('rulerControl'); // удаляем контрол правил
      map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
      map.geoObjects.add(placemark);
    }
    ymaps.ready(e);

    
  });

  btn2.addEventListener('click', () => {
    map2.classList.add('active');
    map1.classList.remove('active');

    function init() {
      let map = new ymaps.Map('map2', {
        center: [59.859122, 30.199482],
        zoom: 16,
      });


      let placemark = new ymaps.Placemark([59.859122, 30.199482], {}, {});



      map.controls.remove('geolocationControl'); // удаляем геолокацию
      map.controls.remove('searchControl'); // удаляем поиск
      map.controls.remove('trafficControl'); // удаляем контроль трафика
      map.controls.remove('typeSelector'); // удаляем тип
      map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
      map.controls.remove('zoomControl'); // удаляем контрол зуммирования
      map.controls.remove('rulerControl'); // удаляем контрол правил
      map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
      map.geoObjects.add(placemark);
    }
    ymaps.ready(init);
  });

  btn1.click();
}