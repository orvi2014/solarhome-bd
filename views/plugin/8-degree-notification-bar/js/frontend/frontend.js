(function ($) {
    $(function () {
        /* **** Slider Option **** */
        var duration = $('.notify_slider').data('slide-duration');
        var transition = $('.notify_slider').data('slide-transition');
        var controls =  $('.notify_slider').data('slide-controls');
        if(controls == 1){var control = true;}else{var control = false;}
        $('.notify_slider').bxSlider({
            auto: true,
			controls:control,
            pager:false,
            speed: duration,
            pause: transition,
            stopAuto: false,
            nextText:"<i class='fa fa-angle-right'></i>",
            prevText:"<i class='fa fa-angle-left'></i>"
        });// Slider Option End

        /* **** Ticker Option **** */
        var ticker_hover = $('.edn-ticker-slider').data('ticker-hover');
        //alert(ticker_hover);
        var ticker_speed = $('.edn-ticker-slider').data('ticker-speed');
        $('.edn-ticker').marquee({
        	speed: ticker_speed,
        	gap: 0,
        	delayBeforeStart: 0,
        	direction: 'left',
        	duplicated: true,
        	pauseOnHover: ticker_hover,
        });// Ticker Option End


           /* Notification bar show and hide */
            $('.edn-top-up-arrow').click(function(){
                $(this).hide();
                $(this).next().show();
                $(this).parent().parent().prev().slideUp();
                $('body').css('padding-top',0);
            });
            $('.edn-top-down-arrow').click(function(){
                $(this).hide();
                $(this).prev().show();
                $(this).parent().parent().prev().slideDown();
                var totalHeightt =  $(this).parent().parent().prev().find('.edn_container_wrapper').outerHeight();
                $('body').css('padding-top',totalHeightt);
            });
            $('.edn-bottom-down-arrow').click(function(){
                $(this).hide();
                $(this).next().show();
                $(this).parent().parent().prev().slideUp();
            });
            $('.edn-bottom-up-arrow').click(function(){
                $(this).hide();
                $(this).prev().show();
                $(this).parent().parent().prev().slideDown();
            });//End of Notification bar show and hide
        /* Notification bar Close */


      if(ajaxsubs.check_show_once == 1 && ajaxsubs.control_type != 1){
          //user if click on close not to display again.
           var Flag = 1;
           var controltype =ajaxsubs.control_type;

       }else{
            var Flag = 0;
            var controltype =ajaxsubs.control_type;

       }
        // close button for notificatio bar top
        $('.edn-controls-close').click(function(){
            //var vals = 'edn_close';
            if(controltype == 3){
             if(Flag == 1){
               edn_checkCookie(1);  //set cookie for 1 day
              }else{
                edn_delete_cookie('setcookie_time');
              }
              }else{
                edn_delete_cookie('setcookie_time');
              }
            $('.edn_close_section').hide('slow');
        });
        if(controltype != 3){
         edn_delete_cookie('setcookie_time');
        }
       function edn_delete_cookie(name) {
            document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }

        function edn_checkCookie(ndays) {
          var cookie = edn_getCookie("setcookie_time");
          if (cookie != "") {
          //cookie is set
          } else {
              cookie = 'set_cookie';
              if (cookie != "" && cookie != null) {
                  edn_setCookie("setcookie_time", cookie, ndays);
              }
          }
       }

        //set cookie for 1 day
            function edn_setCookie(cookieName,cookieValue,nDays) {
             var today = new Date();
             var expire = new Date();
             if (nDays==null || nDays==0) nDays=1;
             expire.setTime(today.getTime() + 3600000*24*nDays);
             document.cookie = cookieName+"="+escape(cookieValue)
                             + ";expires="+expire.toGMTString();
        }
        function edn_getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ')
                c = c.substring(1);
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }


        $('.edn-notify-bar').each(function(){
          if($(this).hasClass('edn-position-Top')){
            var totalHeight =  $(this).outerHeight();
            $('body').css('padding-top',totalHeight);
          }else{
             $('body').css('padding-top',0);
          }
        });

	});//$(function () end
}(jQuery));
