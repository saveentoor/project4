  jQuery(document).ready(function( $ ) {
    let $seachInput = $('.main-navigation .search-field');
    $seachInput.hide();
    console.log(123);
  
    $('.main-navigation .search-submit').on('click', function(evt) {
      evt.preventDefault();
      $seachInput.show('slow');
      $seachInput.focus();
  
      $(document).on('keypress', function(event) {
        if ($seachInput.val() !== '') {
        if (event.which == 13) {
           $('.search-form').submit();
          }
        }
      });
    });
    $seachInput.on('blur', function() {
      $seachInput.hide(500);
    });
  });