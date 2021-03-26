console.clear();

/* 메인 슬라이드 */
function Mainswiper__init() {
  var swiper = new Swiper('.main .swiper-container', {
    // Optional parameters
    loop: true,

    // Navigation arrows
    navigation: {
      nextEl: '.main .swiper-button-next',
      prevEl: '.main .swiper-button-prev',
    },

  });

}

Mainswiper__init();

function Noticeswiper__init() {
  const swiper = new Swiper('.notice > .swiper-container', {
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
}

Noticeswiper__init();


function highswiper__init() {
  const swiper = new Swiper('.highlights > .swiper-container', {
    slidesPerView: 5,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
}

highswiper__init();


function desigeswiper__init() {
  const swiper = new Swiper('.designers-swiper .swiper-container', {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 30,

    navigation: {
      nextEl: '.designers-swiper .swiper-button-next',
      prevEl: '.designers-swiper .swiper-button-prev',
    },

  });
}

desigeswiper__init();

// 메뉴// 
function ProdList__init() {
  var $pageBtn = $('.schedule_menu > span');

  $pageBtn.click(function () {
    var $this = $(this);
    var index = $this.index();

    ProdList__show(index);
  });
}

function ProdList__show(index) {
  var $selItem = $('.schedule_day').eq(index);

  var $siblings =
    $selItem.siblings('.active');
  $siblings.removeClass('active');
  $selItem.addClass('active');

  var $selPage = $('.schedule_menu > span').eq(index);
  $selPage.addClass('active');
  $selPage.siblings('.active').removeClass('active');
}
ProdList__init();

function socialswiper__init() {
  const swiper = new Swiper('.social .swiper-container', {
    loop: true,
    slidesPerView: 4,
    navigation: {
      nextEl: '.social .swiper-button-next',
      prevEl: '.social .swiper-button-prev',
    },

  });
}

socialswiper__init();