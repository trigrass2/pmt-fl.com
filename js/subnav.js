$(document).ready(function(){
  $("#nav > li > a").on("click", function(e){
    //if($(this).parent().has("ul")) {
      //e.preventDefault();
    //}
	
    if(!$(this).attr('href')) {
      e.preventDefault();
    }
    
    if(!$(this).hasClass("open")) {
      // hide any open menus and remove all other classes
      $("#nav li ul").slideUp(350);
      $("#nav li a").removeClass("open");
	  $("#nav li a img").attr('src', '/images/all/more-right.png');
      
      // open our new menu and add the open class
      $(this).next("ul").slideDown(350);
      $(this).addClass("open");
	  $(this).find('img').first().attr('src', '/images/all/more-down.png');
    }
    
    else if($(this).hasClass("open")) {
      $(this).removeClass("open");
      $(this).next("ul").slideUp(350);
	  $(this).find('img').first().attr('src', '/images/all/more-right.png');
    }
  });
});