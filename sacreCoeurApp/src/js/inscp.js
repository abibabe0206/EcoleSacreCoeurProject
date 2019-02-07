
//AUTHOR BY ONABANJI ABIOLA 
// Function for Sliding image


var image1=new Image()
image1.src="../assets/img/cl1.PNG"
	
var image2=new Image()
image2.src="../assets/img/cl2.PNG"
	
var image3=new Image()
image3.src="../assets/img/cl3.PNG"

var image4=new Image()
image4.src="../assets/img/cl4.PNG"


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
