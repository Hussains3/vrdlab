var toggleBtn = document.getElementById("toggle_btn");
var mobileMenu = document.getElementById("mobileMenu");
function toggleMenu() {
    if (mobileMenu.style.display == "block") {
        mobileMenu.style.display = "none";
    } else {
        mobileMenu.style.display = "block";
    }
}

var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".postSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        "@1.00": {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        "@1.50": {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".recharchSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    keyboard: {
        enabled: false,
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        "@1.50": {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },

    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// ===================Active=============
const currlocation = window.location.href;
const menuItem = document.querySelectorAll(".active_menu ul a");
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currlocation) {
        menuItem[i].className = "active";
    }
}
// ============Limit charset========
$("div, p").each(function () {
    var textMaxChar = $(this).attr("data-max-characters");

    length = $(this).text().length;
    if (length > textMaxChar) {
        $(this).text($(this).text().substr(0, textMaxChar) + "");
    }
});

// ===========================
