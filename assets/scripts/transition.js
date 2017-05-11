/**
 * Custom barba JS slide transition 
 */
var SlideTransition = Barba.BaseTransition.extend({
  start: function() {
  
    Promise
      .all([this.newContainerLoading, this.slideOut()])
      .then(this.slideIn.bind(this));
  },
  slideOut: function() {
    return getSlideInAnimation().promise();
  },
  slideIn: function() {
      var _this = this;
      var $el = $(this.newContainer);
      var transition = $el.find(".transition").first();

      window.transitionElementEnd = transition;
      document.body.scrollTop = 0;

      $(this.oldContainer).hide();
       $el.css({ visibility : 'visible', opacity : 1 })
      .promise()
      .done(function() {

          getSlideOutAnimation().promise().then(function(){
             window.transitionElementStart = window.transitionElementEnd;
             bindTransitionLink();
             bindAnimations();
            _this.done();
          });
      });
  }
});


/**
 * Next step, you have to tell Barba to use the new Transition
 */
Barba.Pjax.getTransition = function() {
  return SlideTransition;
};

Barba.Pjax.start();


/**
 * Catch each link to set to refresh the transitionElement
 */
function bindTransitionLink() {
  jQuery("a:not(.no-barba)").click(function(){

    var linkElement = $(this).closest("section");
    var transitionElement = $(this).parents("section").first().find(".transition");

    if(transitionElement[0] == undefined) {
        transitionElement = $("section").first().find(".transition");
    }

    window.transitionElementStart = transitionElement;

  });

}

bindTransitionLink();


