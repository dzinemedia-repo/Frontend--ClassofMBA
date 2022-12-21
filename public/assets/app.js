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

    navText: ["<img src='../assets/icons/nextslide.svg'>", "<img src='../assets/icons/prevslide.svg'>"],
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