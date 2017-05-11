function getSlideInAnimation() {

    var transition = window.transitionElementStart;


    var tlTransitionWrapper = new TimelineLite();

    tlTransitionWrapper.to(transition, 0, { 'z-index': '1002'});
    tlTransitionWrapper.to(transition, 1, { ease: Power2.easeIn, opacity: 1, x: '0%'});
    tlTransitionWrapper.from(transition, 2, { ease: Power2.easeOut, delay:0.2 }, "-=1");

    tlTransitionWrapper.timeScale(2);
    tlTransitionWrapper.progress(1);

    return tlTransitionWrapper;
}