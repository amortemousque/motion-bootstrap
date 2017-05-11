function getBlockAnimation(component) {
    var $component = $(component);
    var text =  $component.find(".block-text");
    var separator =  $component.find(".block-separator");
    var title =  $component.find(".block-title");

    var tlTransitionWrapper = new TimelineMax();

    tlTransitionWrapper.from(text, 2, { opacity: 0,  y: '-40%'}, 0);
    tlTransitionWrapper.from(separator, 0.8, { ease: Power2.easeIn, width:'0px'}, 0);
    tlTransitionWrapper.from(title, 2, { ease: Power2.easeOut, opacity: 0, y: '40%' }, 0);

    tlTransitionWrapper.timeScale(2);
    tlTransitionWrapper.progress(1);

    return tlTransitionWrapper;
}