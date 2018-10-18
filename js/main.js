     
jQuery(document).ready( function($){

     // Page scroll
    $('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });
     $(window).scroll(function () {
        // set distance user needs to scroll before we fadeIn navbar
        if ($(this).scrollTop() > 50) {
        $('.navbar2').addClass('fixed-top');
        } else {
        $('.navbar2').removeClass('fixed-top');
        }
        }); 
       
        $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown(300);
        }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).slideUp(300);
        });
});

