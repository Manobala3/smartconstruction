


document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#spinner").style.visibility = "visible";
    } else {
        document.querySelector("#spinner").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};



$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});


jQuery(document).ready(function($) {
$('#testimonial_carousel').owlCarousel( {
        loop: true,
        center: true,
        items: 1,
        margin: 25,
        autoPlay: 3000,
        nav:true,
        autoplayTimeout: 6000,
        smartSpeed: 480,
      
        responsive: {
            425: {
                items: 1
            },
            767: {
                items: 2
            },
            1370: {
                items: 1
            }
        }
    });
});