  jQuery(document).ready(function($) {

    if (sessionStorage.getItem('advertOnce') !== 'true') {
      $('#container_popup').show();
    } else {
      $('#container_popup').hide();
      $('.overlay-verify').hide();
    };

    $('.btn_oui').click(function() {
      sessionStorage.setItem('advertOnce', 'true');
      $('#container_popup').hide();
      $('.overlay-verify').hide();
    });

    $('.btn_non').click(function() {
      window.location.href = 'https://www.google.com';

    });
  });