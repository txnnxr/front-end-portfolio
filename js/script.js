//sets up frequently used elements so only has to crawl once
var $barNav = $(".bar-nav");
var $navItem = $(".nav-item");
var $body = $("html body");
var $nav = $("nav");

$(document).ready(function(){
	//handles the scoll animation
  $("nav a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      if(hash == "#head"){
        $body.animate({
          scrollTop: 0
        }, 800, function(){
          window.location.hash = hash;
        });
      }else {
        $body.animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    }
  });
	//show hide the nav items
  $barNav.click(function(){
    $navItem.toggle();
    if($navItem.is(":visible")){
      $nav.css({
        "background-color" : "rgba(255, 255, 255, 0.95)"
      });
    }else{
      $nav.css({
        "background" : "none"
      });
      $navItem.css({
        "border" : "none"
      });
    }
  });
});
