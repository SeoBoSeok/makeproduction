/** ScrollMagic */
/** 해당요소가 화면에 보이는지 안보이는지 체크 가능한 라이브러리 */
const spyEls = document.querySelectorAll('.scroll-spy');
spyEls.forEach(function(spyEl) {
  new ScrollMagic.Scene({
    triggerElement: spyEl, // 보여짐 여부를 감시할 요소를 지정.
    triggerHook: .8, // Viewport 기준 80% 지점에서 해당 라이브러리 감시.
  })
  .setClassToggle(spyEl, 'show')
  .addTo(new ScrollMagic.Controller());
});

// to-top click시 스크롤 최상단.
// const toTopEl = document.querySelector('#to-top');
// toTopEl.addEventListener('click', function() {
//   gsap.to(window, .7, {
//     scrollTo: 0
//   });
// });

/** Badge */
// const badgeEl = document.querySelector('header .badges');
// window.addEventListener('scroll', _.throttle(function() { /** lodash libray, throttle, 0.3s 단위로 이벤트 발생 제한. */
//   if (window.scrollY > 500) {
//     // Badge hide
//     // gsap.to(요소, 지속시간, 옵션)
//     gsap.to(badgeEl, .6, {
//       opacity: 0,
//       display: 'none',
//     });
//     // to top show
//     gsap.to(toTopEl, .2, {
//       x: 0,
//     });
//   } else {
//     // Badge show
//     gsap.to(badgeEl, .6, {
//       opacity: 1,
//       display: 'block',
//     });
//     // to top hide
//     gsap.to(toTopEl, .2, {
//       x: 100,
//     });
//   }
// }, 300));
// _.throttle(함수, 시간)

// fade-in 기능.
// const fadeEls = document.querySelectorAll('.fade-in');
// fadeEls.forEach(function(fadeEl, index) {
//   gsap.to(fadeEl, 1, {
//     delay: (index+1) * .7, // 몇 초뒤에 animation이 실행될지.
//     opacity: 1,
//   });
// });

// Swiper Slide (Notice)
// new Swiper(선택자, 옵션)
// Notice Slide
// new Swiper('.notice-line .swiper-container', {
//   direction: 'vertical',
//   autoplay: true,
//   loop: true
// });
// Promotion Slide
// new Swiper('.promotion .swiper-container', {
//   slidesPerView: 3, // 한번에 보여줄 슬라이드 갯수.
//   spaceBetween: 10, // 슬라이드 사이 여백.
//   centeredSlides: true, // 1번 슬라이드가 가운데.
//   loop: true,
//   autoplay: {
//     delay: 5000, // 5초에 한번씩 자동 슬라이드.
//   },
//   pagination: {
//     el: '.promotion .swiper-pagination', // 페이지 번호 요소 선택자.
//     clickable: true,
//   },
//   navigation: {
//     prevEl: '.promotion .swiper-prev',
//     nextEl: '.promotion .swiper-next',
//   }
// });

// toggle promotion
// const promotionEl = document.querySelector('.promotion');
// const promotionToggleBtn = document.querySelector('.toggle-promotion');
// let isHidePromotion = false;
// promotionToggleBtn.addEventListener("click", function() {
//   isHidePromotion = !isHidePromotion;
//   if (isHidePromotion) {
//     // Hide
//     promotionEl.classList.add("hide");
//   } else {
//     // Show
//     promotionEl.classList.remove("hide");
//   }
// });

// 범위 랜덤 함수(소수점 2자리까지)
function random(min, max) {
  // `.toFixed()`를 통해 반환된 '문자 데이터'를,
  // `parseFloat()`을 통해 소수점을 가지는 '숫자 데이터'로 변환
  return parseFloat((Math.random() * (max - min) + min).toFixed(2))
}
function floatingObject(selector, delay, size) {
  gsap.to(selector, random(1.5, 2.5), {
    y: size,
    repeat: -1, // 무한 반복.
    yoyo: true, // 애니메이션 뒤로, 앞으로.
    ease: Power1.easeInOut,
    delay: random(0, delay),
  });
}
// floatingObject('.floating1', 1, 15);
// floatingObject('.floating2', .5, 15);
// floatingObject('.floating3', 1.5, 20);

/** REWARDS SLIDER */
// new Swiper('.awards .swiper-container', {
//   autoplay: true,
//   loop: true,
//   spaceBetween: 30,
//   slidesPerView: 5,
//   navigation: {
//     prevEl: '.awards .swiper-prev',
//     nextEl: '.awards .swiper-next',
//   }
// });
