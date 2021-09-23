// logo dark , light 
const transformLogo = document.querySelectorAll(".transform-logo");

const logoDark = document.querySelector('.header__logo-dark');
const logoLight = document.querySelector('.header__logo-light');
const headerElement = document.querySelector('.header');


const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {

            if (!entry.isIntersecting) {
                if (headerElement.classList.contains('change')) {
                    headerElement.classList.remove('change')
                }
                return
            }
            headerElement.classList.add('change')
        });
    },
    {
        rootMargin: "0px 0px -100% 0px", // viewport và element quan sát cách một khoảng M margin-bottom -100%
        threshold: 0
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
            console.log(animateName);
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
