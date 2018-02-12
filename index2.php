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
</script>
</body>
</html>