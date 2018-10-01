


$(document).ready(function(){

var all =$('#all');

var pet = $('#pets');

var doc = $('#docs');

var petImage = $('.petimg');

var docsImage = $('.docsimg');

pet.click(function () {
    docsImage.fadeOut();
    petImage.fadeIn();

});


doc.click(function () {
    docsImage.fadeIn();
    petImage.fadeOut();

});

all.click(function () {
    docsImage.fadeIn();
    petImage.fadeIn();

});







}






	)
	
	
	


$(document).ready(function() {
  var currentIndex;

var imageUrls = Array();

$('img.galleryphoto').each(function(){
     imageUrls.push($(this).attr('src'));
});






   function next(direction){
    currentIndex = currentIndex + direction;
    if(currentIndex>=imageUrls.length){
      currentIndex = 0;
    }
    if(currentIndex<0){
      currentIndex = imageUrls.length-1;
    }
    $('.lightboxIMG').attr("src", imageUrls[currentIndex]);
  };

  $('.lightboxBG').hide();
  //changed this to img.galleryphoto so it's the same as imageUrls
  $('img.galleryphoto').click(function(){
  currentIndex = imageUrls.indexOf($(this).attr("src"));
    $('.lightboxBG').show();
    $('.lightboxIMG').attr("src",imageUrls[currentIndex]);
  });
  //here is the function which doesn't want to work.
  $('.fa-chevron-right').click(function(){
    next(1);
  });

  // here is the function which works nicely.
  $('.fa-chevron-left').click(function(){
    next(-1);
  });
  

  $('.fa-window-close').click(function(){    
    $('.lightboxBG').hide();
  });
  
  
$("body").keydown(function(e){

if(e.keyCode == 27){
    $('.lightboxBG').hide();
}    

else if(e.keyCode == 37){
    next(-1);
}
else if( e.keyCode ==39){
    next(1);
}


});
  
  
  
});