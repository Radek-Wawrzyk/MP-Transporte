

    //preloader
    $(document).ready(function() {
      $(window).load(function(){
        $(".preloader").delay(550).fadeOut('slow');

        $('a').click(function(e){
          redirect = $(this).attr('href');
          e.preventDefault();
          $('body').fadeOut("slow", function(){
            document.location.href = redirect
          });
        });
      });
    });

    // nav-menu animation
    $(document).ready(function() {
      $(".nav-menu-btn").click(function() {
        $(".nav-menu").toggleClass('open');
        $("section").toggleClass('nav-menu-open');
      });
    });

    //Nav user
    $(document).ready(function() {
      $(".nav-user-panel .dropdown").click(function() {
        var nav_user_width = $(".nav-user-panel").width();
        $(".nav-user-panel .dropdown-menu ").css('width', nav_user_width+2+"px");
      });
    });

    // Active class for menu
    var active = $('.nav-menu li');
    $(active).on('click', function(){
      $(active).removeClass('active');
      $(this).addClass('active');
    });

    var active_collapse = $(".nav-menu p");
    $(active_collapse).click(function() {
      $(active_collapse).removeClass('active');
      $(this).addClass('active');
    });

    //Lightbox
    $(document).ready(function() {
      $(".gallery-tile img").click(function() {

        var overlay = $("<div class='overlay'></div>");
        var image_src = $(this).attr("src");
        var close = $("<span><i class='fa fa-times' aria-hidden='true'></i></span>");

        $("body").append(overlay);
        $(overlay).append("<a target='_blank' href="+image_src+"><img src = "+image_src+"></a>", close).hide().fadeIn(600);

        $(overlay).click(function() {
          $(overlay).fadeOut('600', function() {
            $(this).remove();
          });
        });

        $(close).click(function() {
          $(overlay).fadeOut('600', function() {
            $(this).remove();
          });
        });
      });
    });
