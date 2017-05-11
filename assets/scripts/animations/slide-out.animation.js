
function getSlideOutAnimation() {

    var transition = window.transitionElementEnd;

    var image = document.getElementsByClassName("transition-image"); 
    var painting = document.getElementsByClassName("painting-wrapper"); 

    var menuLeft = document.getElementsByClassName("js-navbar-animate-left");
    var menuRight = document.getElementsByClassName("js-navbar-animate-right");

    var quote = document.querySelector(".js-quote-animate blockquote") || [];
    var quoteAuthor = document.querySelector(".js-quote-animate .blockquote-author") || [];
    var quoteButton = document.querySelector(".js-quote-animate .btn") || [];



    var x = '-50%';
    var opacity = '0.6';

    if(transition.hasClass("transition-out")) {
      x = '-100%'
      opacity = '1'
    }

    var tlTransitionWrapper = new TimelineLite();

    tlTransitionWrapper.to(transition, 0, { ease: Power2.easeOut, 'z-index': '2', opacity:'1', x: "0%" });
    tlTransitionWrapper.to(transition, 2, { ease: Power2.easeOut, opacity:opacity, x: x, 'z-index': '2' });
    tlTransitionWrapper.from(painting, 2, { scale: 2 }, 0);


    var tlTransitionMenu = new TimelineLite();
    //animation menu
    tlTransitionMenu.from(menuLeft, 2, { ease: Power2.easeOut, autoAlpha:0, x: '-30%' }, 0);
    tlTransitionMenu.from(menuRight, 2, { ease: Power2.easeOut, autoAlpha:0, x: '30%' }, 0);



    var tlTransitionQuote = new TimelineLite();
    //animation quote
    tlTransitionQuote.from(quote, 2, { ease: Power2.easeIn, autoAlpha:0 }, 0);
    tlTransitionQuote.from(quoteAuthor, 1.5, { ease: Power2.easeIn, autoAlpha:0, x: '30%' }, 0);
    tlTransitionQuote.from(quoteButton, 2, { ease: Power2.easeIn, autoAlpha:0}, 0);



    var masterTransition = new TimelineLite();

    masterTransition.add(tlTransitionWrapper);
    masterTransition.add(tlTransitionMenu, 0);
    masterTransition.add(tlTransitionQuote, 0);

    masterTransition.progress(1);
    masterTransition.timeScale(2);

    return masterTransition;
}