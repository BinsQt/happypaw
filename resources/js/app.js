import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import jQuery from 'jquery';
window.$ = jQuery;

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
