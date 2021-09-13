$(function(){

  function showHeader() {
    $('.top-bar').css({
        'opacity': '1',
        'visibility': 'visible'
      });
    $('.top-bar__content').css({
        'opacity': '1',
        'visibility': 'visible'
      });
    $('.bottom-bar').css({
        'opacity': '1',
        'visibility': 'visible',
        'margin-top': '30px',
        'color': '#fff'
      });
    // $('.bottom-bar').css({
    //     'opacity': '1',
    //     'visibility': 'visible',
    //   });
  };
  showHeader();

});