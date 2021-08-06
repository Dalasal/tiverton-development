document.addEventListener("DOMContentLoaded", function (event) {
    //Menu scroll
    window.onscroll = function () {myFunction()};

    var headerWraper = document.querySelector(".nav-header");
    var header = document.querySelector(".nav-menu-footer");
    var headerPadding = document.querySelector(".header-wrapper");

    var sticky = header.offsetTop;

    function myFunction()
    {
        if (window.pageYOffset >= sticky + 38) {
            headerWraper.classList.add("fixed-css");
            headerPadding.classList.add("padding-top");
        } else if (window.pageYOffset <= sticky + 38) {
            headerWraper.classList.remove("fixed-css");
            headerPadding.classList.remove("padding-top");
        }
    }
});

document.addEventListener("DOMContentLoaded", function (event) {
    //Mobile burger menu toggle
    var burgerBtn = document.querySelector('.mobile-menu');
    var navMenu = document.querySelector('.site-header');
    var navMenuMobile = document.querySelector('.nav-list-header');
    var bodyEl = document.getElementsByTagName("BODY")[0];
    burgerBtn.onclick = () => {
        navMenu.classList.toggle('open');
        bodyEl.classList.toggle('no-scroll');
        navMenuMobile.classList.toggle('nav-mobile-item');
    }

});
document.addEventListener("DOMContentLoaded", function (event) {
    var footerManuTitle = document.querySelectorAll('.menu-footer__title-mobile');

    footerManuTitle.forEach((el, i) => {
        el.addEventListener('click', function () {
            console.log(111);
            var nextBlock = this.nextElementSibling;
            nextBlock.classList.toggle('active');
        });
    });


});