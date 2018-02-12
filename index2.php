<!DOCTYPE html>
<html>
<head>
	<title>Sachmatu lenta</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php  
echo '<table cellspacing="0">';
for($eilutes = 1; $eilutes<=8; $eilutes++){
	echo '<tr>';
	for($stulpeliai = 1; $stulpeliai<=8;$stulpeliai++){
		if ($eilutes %2 ==0) {
			if ($stulpeliai % 2 ==0) {
				echo '<td class="langelis" style="background-color:white"></td>';
			} else {
				echo '<td class="langelis" style="background-color:black"></td>';
			}
		} else {
			if ($stulpeliai%2 ==0) {
				echo '<td  class= "langelis" style="background-color:black"></td>';
			} else {
				echo '<td  class= "langelis" style="background-color:white"></td>';
			}
		}
	}
	echo '</tr>';
}
echo '</table>';

	
?>
<script>
	document.addEventListener('click', function(e) {
		e = e || window.event;
    	var target = e.target || e.srcElement;
        if(target.tagName == "TD"){
         	var a = document.getElementsByClassName('pazymetas');
         	console.log(a);
         	for (i = 0; i<a.length; i++) {
         		a[i].classList.remove('pazymetas');
         	}
         	target.className += " pazymetas";

         }
         console.log(target.tagName);
	}, false);
	document.addEventListener('keypress', function(c){
		c = c|| window.event;
		console.log(c.keyCode);
		if(c.keyCode == 97){
			alert("paspausta rodykle i kaire");
			document.getElementsByTagName("td").className = "pazymetas";
			var actualId = document.getAttribute("id");
			var count = document.getElementsByTagName("td").length;
			console.log(count)
			if(parseInt(actualId)+1 < count){
				document.getElementById(parseInt(actualId)+1);
			}
		} else if (c.keyCode == 119) {
			alert("paspausta rodykle i virsu");
		} else if (c.keyCode == 100) {
			
			alert("paspausta rodykle i desine");
		} else if (c.keyCode == 115){
			alert("paspausta rodykle i apacia");
		} else if (c.keyCode == 13){
			alert("Aktyvus langelis");
		}
	},false);
</script>
</body>
</html>