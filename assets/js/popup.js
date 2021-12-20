$(function(){

  // PAGE IMAGE BRUTAL LIGHTBOX
  $('.content img').on('click', function(e) {
    e.stopPropagation();
    console.log('yes');
    $(this).toggleClass("img-zoom");
    $('html').toggleClass("zoom");
    $('body').toggleClass("overflow");
  });

  // Close image if click outside
  $(document).on('click', function (e) {
      $('.content img').removeClass('img-zoom');
      $('html').removeClass("zoom");
      $('body').removeClass("overflow");
  });
  // #######################

});
