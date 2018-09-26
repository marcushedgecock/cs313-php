function buttonClicked() {
	alert("Clicked!");
}

function changeColor() {
	var theNewColor = document.getElementById("colorInput").value;
	document.getElementById("firstDiv").style.backgroundColor = theNewColor;
}

$(document).ready(function(){
	$("#colorChanger2").click(function(){
		var theNewColor2 = document.getElementById("colorInput2").value;
		$("#firstDiv").css("background-color", theNewColor2);
		return false;
	});
});

$(document).ready(function() {
	$("#button2").click(function(){
		$("#thirdDiv").fadeToggle(600);
	});
});
