
$(document).ready(function(){
    $('.reviews__items').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      infinite: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
      dots: true,
      centerMode: true,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        centerMode: false,
      }
    },
    
  ]
    });

        
      
    
  });


  $(document).ready( function() {

    $('.grid').isotope({
     itemSelector: '.grid-item',
    });
    
    // filter items on button click
    $('.materials__postschoice').on( 'click', '.materials__postschoice-item', function() {
     var filterValue = $(this).attr('data-filter');
     $('.grid').isotope({ filter: filterValue });``
     $('.materials__postschoice .materials__postschoice-item').removeClass('active');
     $(this).addClass('active');
    });
  })
  

  $(document).ready( function() {

    $('.grid').isotope({
     itemSelector: '.grid-item',
    });
    
    // filter items on button click
    $('.todownload__postschoice').on( 'click', '.todownload__postschoice-item', function() {
     var filterValue = $(this).attr('data-filter');
     $('.grid').isotope({ filter: filterValue });``
     $('.todownload__postschoice .todownload__postschoice-item').removeClass('active');
     $(this).addClass('active');
    });
  })
