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
    // if (document.body.querySelector('#adviceCarousel')) {
    //     let myCarouselElement = document.querySelector('#adviceCarousel');
    //     const carousel = new bootstrap.Carousel(myCarouselElement, {
    //         interval: 3000,
    //         touch: false
    //     });
    // }

    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 3
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })


    const carousel = new bootstrap.Carousel(document.querySelector('#recipeCarousel'));

    document.querySelectorAll('.advice-link').forEach(link => {
        link.addEventListener('click', (event) => {
            carousel.pause();
            const adviceModal = document.querySelector('#adviceModal');
            const adviceModalLabel = adviceModal.querySelector('.modal-title');
            const adviceModalImage = adviceModal.querySelector('#adviceModalImage');

            const heading = event.currentTarget.getAttribute('data-heading');
            const subheading = event.currentTarget.getAttribute('data-subheading');
            const image = event.currentTarget.getAttribute('data-image');

            console.log(heading, " ", subheading, " ", image);

            adviceModalLabel.textContent = heading;
            adviceModalImage.src = image;
        });
    });

    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', () => {
            carousel.cycle();
        });
    });


});
