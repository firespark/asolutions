const swiper = new Swiper(".swiper-container", {
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector('body');
    if (!body) return;

    const menuButton = document.querySelector('.menu-button');
    if (!menuButton) return;

    const catalogLinksArray = Array.from(document.querySelectorAll('.catalog-link'));
    const navLinksArray = Array.from(document.querySelectorAll('.nav__link'));
    const closeButtonsArray = Array.from(document.querySelectorAll('.close-icon'));
    const modalCatalog = document.querySelector('.modal-wrapper__catalog');
    const modalMenu = document.querySelector('.modal-wrapper__menu');
    const modalConfirm = document.querySelector('.modal-wrapper__confirm');
    const modalEmailInput = document.querySelector('.modal-wrapper__catalog input[type="email"]');

    if (!modalCatalog || !modalMenu || !modalConfirm || !modalEmailInput) return;

    const catalogId = document.querySelector("#catalogId");

    function closeDialogs() {
        body.style.overflow = 'auto';
        modalCatalog.style.display = 'none';
        modalMenu.style.display = 'none';
        modalConfirm.style.display = 'none';
        if (modalEmailInput) {
            modalEmailInput.value = '';
        }

        if (catalogId) {
            catalogId.value = '';
        }

        const catalogLinkBlock = document.querySelector('#catalogLinkBlock');
        if (catalogLinkBlock) {
            catalogLinkBlock.style.display = 'none';
        }
    }

    closeButtonsArray.forEach(button => {
        button.addEventListener('click', closeDialogs);
    });

    navLinksArray.forEach(button => {
        button.addEventListener('click', closeDialogs);
    });

    menuButton.addEventListener('click', () => {
        modalMenu.style.display = 'flex';
        body.style.overflow = 'hidden';
    });


    catalogLinksArray.forEach(link => link.addEventListener('click', () => {
        modalCatalog.style.display = 'flex';
        body.style.overflow = 'hidden';

        catalogId.value = link.getAttribute("data-id");
    }));

    window.addEventListener('click', function (e) {
        if (e.target.classList.contains('modal-wrapper')) {
            closeDialogs();
        }
    });

    let aWithHref = document.querySelectorAll('a[href*="#"]');
    aWithHref.forEach(function (el) {
        el.addEventListener("click", function (e) {
            e.preventDefault();
            if (el.hash) window.scrollTo({
                top: document.querySelector(el.hash).offsetTop
            });
        })
    });

    const formsArray = Array.from(document.querySelectorAll('form'));

    formsArray.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    });
});


