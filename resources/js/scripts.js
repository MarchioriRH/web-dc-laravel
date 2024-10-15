/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/

//
// Scripts
//

document.addEventListener('DOMContentLoaded', () => {

    // Navbar shrink function
    document.addEventListener('scroll', () => {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        const navLinkStyle = document.body.querySelectorAll('.nav-link');
        const scrollUp = document.body.querySelector('.scrollup');

        if (!navbarCollapsible) {
            return;
        }

        if (window.scrollY === 0)  {
            navbarCollapsible.classList.remove('navbar-shrink');
            scrollUp.classList.remove('show-back-to-top');
            navLinkStyle.forEach(element => {
                element.style.color = 'black';
            });
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            scrollUp.classList.add('show-back-to-top');
            navLinkStyle.forEach(element => {
                element.style.color = 'white';
            });
        }
    });


    // Change navbar link color when toggler is clicked
    if (document.body.querySelector('.navbar-toggler')) {
        document.querySelector('.navbar-toggler').addEventListener('click', event => {
            const navLinkStyle = document.body.querySelectorAll('.nav-link');
            navLinkStyle.forEach(element => {
                element.style.color = 'white';
            });
        });

        //  Activate Bootstrap scrollspy on the main nav element
        const mainNav = document.body.querySelector('#mainNav');
        if (mainNav) {
            new bootstrap.ScrollSpy(document.body, {
                target: '#mainNav',
                rootMargin: '0px 0px -40%',
            });
        };
    }

    // Collapse responsive navbar when toggler is visible
    if (document.body.querySelector('.navbar-toggler')){
        const navbarToggler = document.body.querySelector('.navbar-toggler');
        const responsiveNavItems = [].slice.call(
            document.querySelectorAll('#navbarResponsive .nav-link')
        );
        responsiveNavItems.map(function (responsiveNavItem) {
            responsiveNavItem.addEventListener('click', () => {
                if (window.getComputedStyle(navbarToggler).display !== 'none') {
                    navbarToggler.click();
                }
            });
        });
    }


    // Carousel
    if (document.body.querySelector('#adviceCarousel')) {
        let myCarouselElement = document.querySelector('#adviceCarousel');
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 3000,
            touch: false
        });
    }


});
