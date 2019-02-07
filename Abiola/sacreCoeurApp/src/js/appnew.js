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
	var ul=$("#ac"),li=$("#ac li"),i=li.length,n=i-1,r=200;
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
	var ul=$("#bp"),li=$("#bp li"),i=li.length,n=i-1,r=270;
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
	var ul=$("#sp"),li=$("#sp li"),i=li.length,n=i-1,r=240;
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


// function for CONTACTEZ NOUS
(function(){
	var ul=$("#cn"),li=$("#cn li"),i=li.length,n=i-1,r=240;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(r*Math.cos(90/n*a*(Math.PI/180))),
					'top':(r*Math.sin(90/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);
	



// Function for Sliding image

var image1=new Image()
image1.src="assets/img/drawing.jpg"

var image2=new Image()
image2.src="assets/img/eating.jpg"

var image3=new Image()
image3.src="assets/img/happy.jpeg"

var image4=new Image()
image4.src="assets/img/learning.jpeg"

var step=1
function slideit() {
	document.images.slide.src=eval("image"+step+".src")
	if (step<4)
		step++
		else
			step=1
			setTimeout("slideit()",2500)
}
slideit()

	
	
	
