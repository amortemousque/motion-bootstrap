/* Using jQuery */

function bindAnimations() {

    var ctrl = new ScrollMagic.Controller();

    $(".js-block-animate, .js-panel-animate").each(function(){
        var component = this;
        var $component = $(component);
        var section = $component.parents("section").first()[0];

        if($component.hasClass("js-block-animate")) {
            var animation = getBlockAnimation(component);
        } else if ($component.hasClass("js-panel-animate")) {
            var animation = getPanelAnimation(component);
        }
        animation.reverse().restart();
        var scene = new ScrollMagic.Scene({
            triggerElement: section
        })
        .setTween(animation)
        .addTo(ctrl);

    });

}



$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    
    // $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
    TweenLite.to(window, 1.5, { ease: Power2.easeInOut,  scrollTo:{y:$(this.hash).offset().top}});

});

bindAnimations();



