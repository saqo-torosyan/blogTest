require('./bootstrap');


$( document ).ready(function() {
    $('.order-by-date').on('change', function() {
        window.location.href = `/${this.value}`;
      });
});