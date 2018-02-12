<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Uzduotys</title>
</head>
<body>
<p id="pastraipa1">Sveiki esu Arturas, man 27 metai.</p>
<button onclick="funkcija1()">Click me!!!</button>
<p id="pastraipa2" onmousedown="onMouseDown()" onmouseup="onMouseUp()">Mokausi programuoti!!!</p>

<img src="asmenine.jpg" onmouseenter="bigImg(this)" onmouseleave="normallImg(this)" width="32px" height="32px"><hr>

Enter your name: <input type="text" id="pastraipa3" onblur="formosBlur()"><hr>

<p>Prasome pasirinkti is saraso</p>
<select id="mySelect" onchange="formosOnChange()">
	<option>JAVA</option>
	<option>PHP</option>
	<option>C#</option>
</select>
<p id="pastraipa4">Jus pasirinkote:</p><hr>

Prasome ivesti: <input type="text" id="pastraipa5" onfocus="formosOnFocus(this)">

<form onsubmit="formosOnSubmit()">
	Enter you name: <input type="text" name="fname">
	<input type="submit" name="Submit">
</form>
<script>
	function funkcija1(){
		document.getElementById("pastraipa1").style.fontSize = "64px";
	}
	function onMouseDown(){
		document.getElementById("pastraipa2").style.color = "green";
	}
	function onMouseUp(){
		document.getElementById("pastraipa2").style.color = "red";
	}
	function bigImg(x){
		x.style.height = "64px";
		x.style.width = "64px";

	}
	function normallImg(x){
		x.style.height = "32px";
		x.style.width = "32px";
	}
	function formosBlur(){
		var x = document.getElementById("pastraipa3");
		x.value = x.value.toUpperCase();
	}
	function formosOnChange(){
		var x = document.getElementById("mySelect").value;
		document.getElementById("pastraipa4").innerHTML = "Jus pasirinkote: " +x;
	}
	function formosOnFocus(x){
		x.style.background = "red";
	}
	function formosOnSubmit(){
		alert("The form was submitted");
	}
</script>
</body>
</html>