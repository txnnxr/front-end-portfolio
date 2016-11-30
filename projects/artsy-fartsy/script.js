$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    $('.rightLowHill').css({
      'margin-top' : (wScroll*3) + "px"
    });
    $('.rightHighHill').css({
      'margin-top' : '-'+ (wScroll) + "px"
    })
    $('.leftLowHill').css({
      'margin-left' : (wScroll*2) + "px"
    });
    $('.leftHighHill').css({
      'margin-left' : "-" + (wScroll*2) + "px"
    });
    $('.grayKass, .yellowKass, .blueKass, .redKass').css({
      'transform': 'translateY('+(wScroll*1.1) + "px)"
    });
    $('.flowers').css({
      'margin-top' : (wScroll*2) - 180 + "px"
    });
    $('.container').css({
      'margin-top' : (wScroll*1.07) + "px"
    });
    $('.pinkSky').css({
      'margin-top' : "-" + (wScroll*1.01) + "px"
    });



    // var $el = $('.bird-box');
    // var bottom = $el.position().top + $el.outerHeight(true);
    // if(wScroll >= bottom){
    //   $barNav.css({
    //     'color': 'black'
    //   });
    // }else{
    //   $barNav.css({
    //     'color': 'white'
    //   });
    // }

    //clothes-pics container for whatever you want to land
  //   if (wScroll > $('.albums').offset().top - ($(window).height() * 0.2)) {
  //     $('.albums figure').each(function(i) {
  //       setTimeout(function() {
  //         $('.albums figure').eq(i).addClass('is-showing');
  //       }, 500 * (i+1));
  //     });
  //   }
  //   if (wScroll > $('.tour').offset().top - ($(window).height() * 0.2)) {
  //     $('.stop-info').each(function(i) {
  //       setTimeout(function() {
  //         $('.stop-info').eq(i).addClass('is-showing');
  //       }, 500 * (i+1));
  //     });
  //   }
  });
