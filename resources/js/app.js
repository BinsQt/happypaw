import jQuery from 'jquery';
window.$ = jQuery;

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



$(document).ready(function(){
    $("button").click(function(){
      $("#ekg").addClass("ekg-above");
    });
  });

  $(document).ready(function(){
    $("button").click(function(){
      $("#bpm").addClass("ekg-above");
    });
  });

  $.get('/getSliderValue', function(data) {
    console.log(data);
    $('#myRange').val(data);
});










