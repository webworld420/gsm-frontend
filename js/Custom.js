
  var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })








 // Bars icon click for mobile...

 $("#bars").on('click', function(){
    $(".Mobile-navItems").toggle(200)
 });
 $("#times").on('click', function(){
    $(".Mobile-navItems").toggle(200)
 });
 $(".Mobile-navItems").on('click', function(){
   this.toggle(200)
 })






  
// Sizes Button 

$(".sizeSelect button").click(function(){
 $('.sizeSelect button').addClass(".activeSize");
})




// Product view

$('#Image2').click(function(){
  $("#second-image").css('display',"block")
  $("#first-image").css('display',"none")
})
$('#Image1').click(function(){
  $("#second-image").css('display',"none")
  $("#first-image").css('display',"block")
})
