
//AUTHOR BY ONABANJI ABIOLA 
// function for ACCUEIL
(function(){
	var ul=$("#navs"),li=$("#navs li"),i=li.length,n=i-1,r=270;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(-r*Math.cos(90/n*a*(Math.PI/180))),
					'top':(r*Math.sin(90/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);
	


//function for ACTIVITES ECOLE
(function(){
	var ul=$("#ac"),li=$("#ac li"),i=li.length,n=i-1,r=280;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(r*Math.sin(90/n*a*(Math.PI/180))),
					'top':(-r*Math.cos(90/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);
	




//function for BUREAUX & PARTENAIRES
(function(){
	var ul=$("#bp"),li=$("#bp li"),i=li.length,n=i-1,r=279;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(-r*Math.sin(180/n*a*(Math.PI/180))),
					'top':(r*Math.cos(180/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);




//function for INFORMATIONS
(function(){
	var ul=$("#inf"),li=$("#inf li"),i=li.length,n=i-1,r=220;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(r*Math.sin(90/n*a*(Math.PI/180))),
					'top':(-r*Math.cos(90/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);
	




//function for STRUCTURE PEDAGOGIQUE
(function(){
	var ul=$("#sp"),li=$("#sp li"),i=li.length,n=i-1,r=280.5;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(r*Math.sin(90/n*a*(Math.PI/180))),
					'top':(r*Math.cos(90/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);





// Function for Sliding image


var image1=new Image()
image1.src="assets/img/logo.PNG"
	
var image2=new Image()
image2.src="assets/img/schoolFront.PNG"
	
var image3=new Image()
image3.src="assets/img/drawing.jpg"

var image4=new Image()
image4.src="assets/img/eating.jpg"

var image5=new Image()
image5.src="assets/img/happy.jpeg"

var image6=new Image()
image6.src="assets/img/learning.jpeg"

var step=1
function slideit() {
	document.images.slide.src=eval("image"+step+".src")
	if (step<6)
		step++
		else
			step=1
			setTimeout("slideit()",2500)
}
slideit()

	

// Function for the Google map

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 48.118, lng: -1.643};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
	

