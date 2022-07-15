<?php 
for($a=1; $a<=37; $a++)
echo $a ;
?>

<div class="scroll-btn">
	<i class="fas fa-arrow" id="mybtn" onclick="myScroll()"></i>
</div>




<script>
	function myScroll() {
	   document.body.myScroll=0;
 	   document.documentElement.myScroll=0;
 	}

 	myButton = document.getElementById('mybtn');

 	window.onsroll = function() {
 		scrollFunction()
 	};

 	function scrollFunction() {
 		if document.body.myScroll > 20 || document.documentElement.myScroll > 20 {
 			myButton.style.display = "block";
 		}
 		else{
 			myButton.style.display = "none";
 		}
 	}




window.sr = ScrollReveal();
       sr.reveal('.class' ,{
       	origin : 'bottom',
       	distance : '50px',
       	duration  : 3000,
       	easing : 'ease'

       })
</script>