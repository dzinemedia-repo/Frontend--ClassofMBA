function rotate() {
    let drops = document.getElementsByClassName("nav_drop");
    let nav_arrows = document.getElementsByClassName("nav_arrow");
    nav_arrows.classList.toggle('arrows_rotation');
}

var owl = $('.owl-carousel');
owl.owlCarousel({
    margin: 80,
    loop: true,
    nav: true,
    // autoplay: true,
    lazyLoad: true,
    dots: true,

    navText: ["<img src='../assets/icons/prevslide.svg'>", "<img src='../assets/icons/nextslide.svg'>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            center: true,
            items: 3
        }
    }
});
$('.owl-two').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    lazyLoad: true,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});


$('.owl-three').owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    autoplay: false,
    center: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
// toggle payment Method
let debitfomr = document.getElementById("paymentform");
let paymentformbtn = document.getElementById("paymentform_btn");

paymentformbtn.addEventListener('click', function() {
    debitfomr.classList.toggle("toggle_card");

});

let discountCode = document.getElementById("discount_code");
let discountInput = document.getElementById("discountInput");

discountCode.addEventListener('click', function() {
    discountInput.classList.toggle("d-none")
});



// password icon( show hide password)

function passwordshowhide() {
    // toggle the type attribute

    let togglePassword = document.querySelector(".togglePassword");
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    togglePassword.classList.toggle('bi-eye');
}
