//Navigation
jQuery(document).ready(function( $ ) {
	
    $('.mobile-open').click(function(e) {
        e.preventDefault();
        $('#site-navigation').css('top', 0);
    });
    
    $('.mobile-close').click(function(e) {
        e.preventDefault();
        $('#site-navigation').css('top', '-100vh');
    });
    
     $.fn.superslides.fx = $.extend({
        flip: function(orientation, complete) {
          
          var that = this,
                $children = that.$container.children(),
                $outgoing = $children.eq(orientation.outgoing_slide),
                $target = $children.eq(orientation.upcoming_slide);

            $target.css({
            left: this.width,
            opacity: 0,
            display: 'block'
            }).animate({
                opacity: 1
                },
                that.options.animation_speed,
                that.options.animation_easing
            );

            $target.animate({  borderSpacing: -7 }, {
                step: function(now,fx) {
                    var now = 1 - (now / 100);
                    $(this).css('transform','scale('+now+')');
                },
                duration: 7500
            },'linear');
            
            if (orientation.outgoing_slide >= 0) {
            $outgoing.animate({
                opacity: 0
            },
            that.options.animation_speed,
            that.options.animation_easing,
            function() {
                if (that.size() > 1) {
                $children.eq(orientation.upcoming_slide).css({
                    zIndex: 2
                });

                if (orientation.outgoing_slide >= 0) {
                    $children.eq(orientation.outgoing_slide).css({
                    opacity: 1,
                    display: 'none',
                    zIndex: 0
                    });
                }
                }

                complete();
            });
            } else {
            $target.css({
                zIndex: 2
            });
            complete();
            }         
        }
      }, $.fn.superslides.fx);
    
    $(document).on('init.slides', function() {
      $('.loading-div').animate({opacity: 0}, 1000, function() {
        $(this).remove();
      });
  });

  $('#slides').superslides({
    play: 5000, 
    hashchange: false,
    pagination: false,
    animation: 'flip'
  });

  document.ontouchmove = function(e) {
    e.preventDefault();
  };
  
  $('#scroll-down').click(function(e) {
      e.preventDefault();
      var height = $(window).height();
      
  $('html,body').animate({scrollTop:height}, 1000, null, null);});
   
  $(window).scroll(function() {
      var height = $(window).scrollTop();
      $('#slides').css("top", (-1 * (height / 5))); 
  });  
  
  
});
