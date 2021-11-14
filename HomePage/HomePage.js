/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString();
}


var imageArray = ["Images/1.webp","Images/2.jpg","Images/3.jpg","Images/4.jpg"];
	var x = 0;
	var time = 2000;
function changeImg(){
	document.slide.src = imageArray[x];
	if(x < imageArray.length -1){
		x = x + 1;
	}
	else{
		x = 0;
	}
	setTimeout("changeImg()",time);
}
window.onload = changeImg;



