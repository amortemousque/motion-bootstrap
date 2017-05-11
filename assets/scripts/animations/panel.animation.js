function getPanelAnimation(component) {
    var $component = $(component);
    var header =  $component.find(".panel-header");
    var title =  $component.find(".panel-title");
    var text =  $component.find(".panel-content p");

    var tlTransitionWrapper = new TimelineMax();

    tlTransitionWrapper.from(header, 2, { opacity: 0,  y: '-40%'}, 0);
    tlTransitionWrapper.from(title, 2, { opacity: 0,  x: '-40%'}, 0);
    tlTransitionWrapper.from(text, 2, { opacity: 0 }, 0);

  //  tlTransitionWrapper.from(separator, 0.8, { ease: Power2.easeIn, width:'0px'}, 0);
   // tlTransitionWrapper.from(title, 2, { ease: Power2.easeOut, opacity: 0, y: '40%' }, 0);

    tlTransitionWrapper.timeScale(2);
    tlTransitionWrapper.progress(1);

    return tlTransitionWrapper;
}
