$(".topbar-slider").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 10000,
  cssEase: "linear",
  arrows: false,
  dots: false,
  responsive: [
    {
      breakpoint: 1028,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".about-slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: $(".about-button-prev"),
  nextArrow: $(".about-button-next"),
  dots: false,
  autoplay: false,
  speed: 500,
  fade: true,
  cssEase: "linear",
});

$(".person-card-slider").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  autoplay: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 1610,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1028,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});


$(".profile-slider").slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  dots: false,
  autoplay: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 1610,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1028,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 510,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

const heartBtn = document.querySelectorAll(".heart-save-btn");

heartBtn.forEach((saveBtn) => {
  saveBtn.addEventListener("click", () => {
    const icon = saveBtn.querySelector("i");
    if (icon.classList.contains("fa-regular")) {
      icon.classList.replace("fa-regular", "fa-solid");
    } else {
      icon.classList.replace("fa-solid", "fa-regular");
    }
  });
});


$(document).ready(function () {
  $("#menu-btn").click(function () {
    $("#header-offcanva").toggleClass("active-sidebar", "2000");
  });
});

document.getElementById("menu-btn").addEventListener("click", function () {
  let icon = this.querySelector("i");
  if (icon.classList.contains("fa-bars")) {
    icon.classList.replace("fa-bars", "fa-xmark");
  } else {
    icon.classList.replace("fa-xmark", "fa-bars");
  }
});