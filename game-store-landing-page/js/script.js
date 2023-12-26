var swiper = new Swiper(".slide-content",{
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    centerSlide: true,
    fade: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});

let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
  
    if (pos > 100) {
      scrollProgress.style.display = "grid";
    } else {
      scrollProgress.style.display = "none";
    }
  
    scrollProgress.addEventListener("click", () => {
      document.documentElement.scrollTop = 0;
    });
  
    scrollProgress.style.background = `conic-gradient(#4472C4 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
  };
  
  window.onscroll = calcScrollValue;
  window.onload = calcScrollValue;


// hamburger

