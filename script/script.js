$(function(){

  function showShapes() {
    $('.bg_shape1').css({
        'opacity': '1',
        'visibility': 'visible',
        'transition-duration': '0.2s'
      });
    $('.top-bar').css({
        'opacity': '1',
        'visibility': 'visible',
        'transition-duration': '0.3s'
      });
  };
  showShapes();

  setTimeout(function() {
    $('.bg_shape2').css({
        'opacity': '1',
        'visibility': 'visible',
        'transition-duration': '0.2s'
      });
  }, 200);

  setTimeout(function() {
    $('.top-bar__content').css({
        'opacity': '1',
        'visibility': 'visible',
        'transition-duration': '0.3s'
      });
    $('.ab-me').css({
        'opacity': '1',
        'visibility': 'visible',
        'transition-duration': '0.3s'
      });
  }, 400);


  window.onscroll = function() {scrollFunction()};

  if (document.documentElement.clientWidth > 650) {
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          $('.adv').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
          $('.reviews').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
        if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
          $('.test').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
          $('.price').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
        if (document.body.scrollTop > 1020 || document.documentElement.scrollTop > 1020) {
          $('.contacts').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
          $('.bottom-bar').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
      }
    }

    if (document.documentElement.clientWidth <= 650) {
      function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
          $('.adv').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
          $('.reviews').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
        if (document.body.scrollTop > 1180 || document.documentElement.scrollTop > 1180) {
          $('.test').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
          $('.price').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
        if (document.body.scrollTop > 1720 || document.documentElement.scrollTop > 1720) {
          $('.contacts').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
          $('.bottom-bar').css({
          'opacity': '1',
          'visibility': 'visible',
          'transition-duration': '0.3s'});
        }
      }
    }
});