// import fullpage from './fullpage.js';
import slidesBlog from './slide.js';
slidesBlog();

// logo dark , light 

const transformLogo = document.querySelectorAll(".transform-logo");

const logoDark = document.querySelector('.header__logo-dark');
const logoLight = document.querySelector('.header__logo-light');
const headerElement = document.querySelector('.header');


const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                // console.log(true);
                headerElement.classList.add('change')
            } else {
                // console.log(false);
                headerElement.classList.remove('change')
            }
        });
    },
    {
        rootMargin: "0px 0px 0px 0px", // Margin sẽ được thêm vào root -100%
        threshold: 1 // element nằm đầy đủ trong màn hình
    }
);



const widthWindow = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

if (widthWindow >= 1024) {
    transformLogo.forEach(logo => {
        setTimeout(() => {
            observer.observe(logo);
        }, 0)
    });
}

// menu bar

const menuBarIcon = document.querySelector('.header__bars-icon');
const headerMenu = document.querySelector('.header__menu');
const buttonClose = document.querySelector('.button-close');


menuBarIcon.onclick = function () {
    headerMenu.classList.toggle('open-nav')
}

buttonClose.onclick = function () {
    headerMenu.classList.remove('open-nav')
}



//  Animate 

const animates = document.querySelectorAll('.animate');

const animateObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let target = entry.target;
            let animateName = target.getAttribute('data-animate-name');

            visibleAnimate(target, animateName);
        }
    },
        {
            rootMargin: "0px 0px 0px 0px",
            threshold: 0.75
        })
});


function visibleAnimate(elements, animationName) {
    Object.assign(elements.style, {
        visibility: 'visible',
        animationName: animationName,
    });
}


animates.forEach(element => {
    animateObserver.observe(element);
})



// smooth scroll 

var anchorLinks = document.querySelectorAll('.header__menu-nav > li > a');
const containerFullPage = document.querySelector('#fullPage');


if (widthWindow >= 1024) {
    anchorLinks.forEach((anchorLink) => {
        anchorLink.addEventListener('click', (e) => {
            // e.preventDefault();

            let target = e.target.getAttribute('href');
            target = target.replace('#', '');
            let targetId = document.querySelector('section[data-menuanchor="' + target + '"]');

            if (targetId) {
                let elementPageIndex = parseInt(targetId.getAttribute('data-pageindex'));

                Object.assign(containerFullPage.style, {
                    transform: 'translate3d(0,' + -(elementPageIndex - 1) * 100 + '%,0)'
                });
            }

        })
    })
} else {

    anchorLinks.forEach((anchorLink) => {
        anchorLink.addEventListener('click', (e) => {

            let target = e.target.getAttribute('href');
            target = target.replace('#', '');
            let targetId = document.querySelector('section[data-menuanchor="' + target + '"]');

            if (target && targetId) {
                e.preventDefault();

                headerMenu.classList.remove('open-nav');
                targetId.scrollIntoView(true);
            }
        })
    })
}

