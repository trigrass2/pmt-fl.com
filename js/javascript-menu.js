/*!
 * hoverIntent v1.8.0 // 2014.06.29 // jQuery v1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license. Basically that
 * means you are free to use hoverIntent as long as this header is left intact.
 * Copyright 2007, 2014 Brian Cherne
 */
(function($){$.fn.hoverIntent=function(handlerIn,handlerOut,selector){var cfg={interval:100,sensitivity:6,timeout:0};if(typeof handlerIn==="object"){cfg=$.extend(cfg,handlerIn)}else{if($.isFunction(handlerOut)){cfg=$.extend(cfg,{over:handlerIn,out:handlerOut,selector:selector})}else{cfg=$.extend(cfg,{over:handlerIn,out:handlerIn,selector:handlerOut})}}var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if(Math.sqrt((pX-cX)*(pX-cX)+(pY-cY)*(pY-cY))<cfg.sensitivity){$(ob).off("mousemove.hoverIntent",track);ob.hoverIntent_s=true;return cfg.over.apply(ob,[ev])}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=false;return cfg.out.apply(ob,[ev])};var handleHover=function(e){var ev=$.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t)}if(e.type==="mouseenter"){pX=ev.pageX;pY=ev.pageY;$(ob).on("mousemove.hoverIntent",track);if(!ob.hoverIntent_s){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}}else{$(ob).off("mousemove.hoverIntent",track);if(ob.hoverIntent_s){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob)},cfg.timeout)}}};return this.on({"mouseenter.hoverIntent":handleHover,"mouseleave.hoverIntent":handleHover},cfg.selector)}})(jQuery);


$(document).ready(function(){
  // console.log('nav');
  var $primaryNav = $("#primary-navigation"),
      $t1Dropdown = $primaryNav.find('.horizontal-nav-item > .vertical-nav'),
      $accordionAction = $primaryNav.find('.vertical-nav-heading'),
      t1DropdownPosition,
      t2DropdownPosition,
      $thisNavItem;

  // Set classes so active parents
  // have a state change when hovering over children
  $primaryNav.find('.vertical-nav-item').hover (
    function() {
      $(this).parent().parent().prev().addClass('active');
    },
    function() {
      $(this).parent().parent().prev().removeClass('active');
    }                                               
  );

  $t1Dropdown.find('.vertical-nav-item').hover (
    function() {
      $(this).parent().prev().addClass('active');
    },
    function() {
      $(this).parent().prev().removeClass('active');
    }                                               
  );

  // Level 1 Nav
  function menuDown () {
    $(this).find('> .vertical-nav').fadeIn(150);

    // Get bottom coordinate of first dropdown
    t1DropdownPosition = $t1Dropdown.offset().top + $t1Dropdown.height(); 
    // console.log(t1DropdownPosition);
  }
  function menuUp (e) {
    $(this).find('> .vertical-nav').fadeOut(150);
  }

  $primaryNav.find(".horizontal-nav-item").hoverIntent({
    over: menuDown,
    out: menuUp,
    sensitivity: 10, 
    interval: 50, 
    timeout: 50
  });

  // function getMenuOffset () {
  //   // Suppress JS error when hovering over .vertical-nav-heading
  //   if ($thisNavItem.offset() != null) {
  //     t2DropdownPosition = $thisNavItem.offset().top + $thisNavItem.height();  
  //   }
    
  //   // console.log(t2DropdownPosition);

  //   if (t2DropdownPosition >= t1DropdownPosition) {
  //     // console.log('too tall, reset position');
  //     $thisNavItem.parent().css({
  //       position: 'initial'
  //     });
  //     $thisNavItem.css({
  //       top: 'inherit',
  //       bottom: "-1px"
  //     });
  //   } else {
  //     // console.log('let it go');
  //     $thisNavItem.parent().removeAttr('style');
  //     t2DropdownPosition = '';
  //     // $thisNavItem.removeAttr('style');
  //   }
  // }

  // Accordion
  $accordionAction.on('click', function(el) {
    // Cache the accordion parent clicked on with
    // it's current state
    var $thisAccordion = $(this).parent(),
        accordionState = $thisAccordion.data('state');

    // Close all other accordions that may be open
    $primaryNav.find('.accordion').data('state', 'closed').attr('data-state', 'closed');

    // Toggle the state open/closed
    if (accordionState == 'closed') {
      $thisAccordion.data('state', 'open').attr('data-state', 'open');
    } else {
      $thisAccordion.data('state', 'closed').attr('data-state', 'closed');
    }

    // getMenuOffset();
  });

  // Level 2 Nav
  function menuOut () {
    $thisNavItem = $(this).find('> .vertical-nav');
    $thisNavItem.fadeIn(250);

    // getMenuOffset();
  }
  function menuIn (e) {
    $(this).find('> .vertical-nav').fadeOut(250);
  }

  $primaryNav.find('.vertical-nav-item').hoverIntent({
    over: menuOut,
    out: menuIn,
    sensitivity: 8, 
    interval: 150, 
    timeout: 200
  });
});