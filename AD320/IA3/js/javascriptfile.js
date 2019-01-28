
window.onload = function() {

/***************DIV #1***************/
var uno = document.getElementById("uno");

uno.addEventListener("click", function() {
	alert("Hello, User!");
});

/***************DIV #2***************/
var dos = document.getElementById("dos");

window.addEventListener("resize", function(){
  dos.innerHTML = Math.random();
});

/***************DIV #3***************/
var tres = document.getElementById("tres");

tres.addEventListener('mouseover', function(){
       tres.style.backgroundColor = "red";
        tres.innerHTML = "Thanks!";
   });

 tres.addEventListener('mouseout', function(){
        tres.style.backgroundColor = "";
        tres.innerHTML = "Hover over me, to change me.";
   });

/***************DIV #4***************/
var cuatro = document.getElementById("cuatro");

cuatro.addEventListener("mouseover", function(){
  cuatro.innerHTML += "Moused over!<br>"
});

cuatro.addEventListener("mouseout", function(){
  cuatro.innerHTML += "Moused out!<br>"
});

/***************DIV #5***************/
var myImage = document.getElementById("myImage");

myImage.addEventListener("mousedown", function(){
  myImage.src = "images/bulbon.gif";
});

myImage.addEventListener("mouseup", function(){
  myImage.src = "images/bulboff.gif";
});
}
