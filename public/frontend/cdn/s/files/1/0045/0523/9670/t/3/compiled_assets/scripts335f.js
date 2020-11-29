(function() {
  var __sections__ = {};
  (function() {
    for(var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
      __sections__[s[i]] = true;
  })();
  (function() {
  if (!__sections__["brands"] && !window.DesignMode) return;
  try {
    
$(document).ready(function(){
var brand_logos = $("#client-car");
brand_logos.owlCarousel({
items:6,
loop:false,      
dots: true, 
//nav:true,
//navContainer:".nav_brand_type",
//navText: ['<a class="prev btn"><i class="fa fa-angle-left" aria-hidden="true"></i></a>','<a class="next btn"><i class="fa fa-angle-right" aria-hidden="true"></i></a>'],
autoplay: true,
autoplayTimeout: 3000,
responsive:{
0:{
items: 1
},
600:{
items:2
},
700:{
items:4
},

1000:{
items: 6
}
}
});
});

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["footer"]) return;
  try {
    
 if (jQuery.cookie('footerPanel') == 'closed') {
        jQuery('.footer-newsletter').fadeOut();
      }

      jQuery('.footer-newsletter a.close').bind('click',function(){
        jQuery('.footer-newsletter').fadeOut();
        jQuery.cookie('footerPanel', 'closed', {expires:-1, path:'/'});
      });  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["home-sidebar-deals"]) return;
  try {
    
 $(document).ready(function(){
     var homeSidedeals = $(".sidebar-deal-products");
      homeSidedeals.owlCarousel({
      items: 1,
         loop:true,              
         dots: false,
         navContainer: ".home_sidebar--deal-nav",
         navText: [' <a class="prev active btn"><i class="icon-arrow-left icons"></i></a>','<a class="next btn"><i class="icon-arrow-right icons"></i></a>']
        
  			});
        });

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-category"]) return;
  try {
    
$(document).ready(function(){
  $(".dt-menu-expand").click(function(event){
    event.preventDefault();
    if( $(this).hasClass("dt-mean-clicked") ){
   $(this).html('<i class="fa fa-plus"></i>');
      if( $(this).prev('ul').length ) {
        $(this).prev('ul').slideUp(400);
      } else {
        $(this).prev('.megamenu-child-container').find('ul:first').slideUp(600);
      }
    } else {
     $(this).html('<i class="fa fa-minus"></i>');
      if( $(this).prev('ul').length ) {
        $(this).prev('ul').slideDown(400);
      } else{
        $(this).prev('.megamenu-child-container').find('ul:first').slideDown(2000);
      }
    }

    $(this).toggleClass("dt-mean-clicked");
    return false;
  });

});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["slideshow"] && !window.DesignMode) return;
  try {
    
function process_slick_event(evt) {
var _slick = $( "#" +evt.target.id + " .home-slideshow .variable-width");
if( _slick.length )
{
switch ( evt.originalEvent.type ) {
case "shopify:section:load" : 
console.log('Load ' + _slick.attr("id"));
_slick.slick (
{
dots: true,
slidesToScroll: 1,

autoplay: _slick.data('slick').autoplay,
autoplaySpeed: _slick.data('slick').autoplaySpeed
}
);
break; 
case "shopify:section:unload" :
console.log('Unload ' + _slick.attr("id"));
_slick.slick('unslick');
break;

} 
}
}

$(document)
.on( 'shopify:section:load', process_slick_event )
.on( 'shopify:section:unload', process_slick_event )
;


  } catch(e) { console.error(e); }
})();

})();
