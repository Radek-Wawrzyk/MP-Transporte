
    // Left-menu animation
    $(document).ready(function() {
      $(".menu-btn").click(function() {
        $(".left-menu").toggleClass('visible');
        $("section").toggleClass('padd');
      });
    });

    // Active class for menu
    var active = '.left-menu li';
    $(active).on('click', function(){
      $(active).removeClass('active');
      $(this).addClass('active');
    });

    
