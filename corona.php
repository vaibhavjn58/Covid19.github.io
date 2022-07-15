<!DOCTYPE html>
<html>
<head>
	<title>
		COVID-19
	</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	 <link rel="stylesheet" type="text/css" href="style.css">      <!-- css file link -->
	 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> <!--google fonts -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--bootstrap links -->
    


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>  <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">   <!--gitgub animation-->
     <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>  <!-- animation links -->
  
  <style>
  	.color{color: green;}
  </style>   
</head>

<body onload="fetch();">

<script>
	function fetch(){
$.get("https://api.covid19api.com/summary",

	function(data) {
		//	console.log(data['Countries'].length);
            var tbval =document.getElementById('tbval');
            
            for(var i=1; i<(data['Countries'].length); i++) {
            	var x = tbval.insertRow();
            	
            	x.insertCell(0);
            	tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            	tbval.rows[i].cells[0].style.color = '#7a4a91';
            	tbval.rows[i].cells[0].style.background ='#fff';


            	x.insertCell(1);
            	tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            	tbval.rows[i].cells[1].style.background = '#4bb7d8';



            	x.insertCell(2);
            	tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            	tbval.rows[i].cells[2].style.background = '#4bb7d8';


            	x.insertCell(3);
            	tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            	tbval.rows[i].cells[3].style.background = '#f36e23';



            	x.insertCell(4);
            	tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            	tbval.rows[i].cells[4].style.background = '#4bb7d8';



            	x.insertCell(5);
            	tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            	tbval.rows[i].cells[5].style.background = '#9cc850';



            	x.insertCell(6);
            	tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
            	tbval.rows[i].cells[6].style.background = '#f36e23';
            } 

		}
	);
}


<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$coronadata = json_decode($data,true);
?>
</script>	
	

                                    
                                 <!-- navigation starts -->
<div class="heado">
<nav id="navigation-bar" class="navbar navbar-expand-lg navbar-dark">
	    <div class="container text-uppercase p-2">
                
                
                    <a class="navbar-brand"><img src="images/corona-nav.png">
                                
			         <span class="navbar-text"><h1>COVID-<span>19</span></h1></span></a>			  
                 
			        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
			   	     <span class="navbar-toggler-icon"></span>
			        </button>
                
                 <div class="collapse navbar-collapse" id="navbarid">
			        <ul class="navbar-nav ml-auto">
				         <li class="nav-item">
					        <a href="index.php" class="nav-link">Home</a>
				          </li>

				       <li class="nav-item">
			        		<a href="#second-header" class="nav-link">Symptoms</a>
			        	</li>

				       <li class="nav-item">
			        		<a href="#third-header" class="nav-link">Contagion</a>
			        	</li>


			        	<li class="nav-item">
			        		<a href="corona.php" class="nav-link">IndiaCoronaLive</a>
			        	</li>



				       <li class="nav-item">
			        		<a href="#scrollToContact" class="nav-link">Contact Us</a>
			        	</li>
			        </ul>
		         </div>


		</div>
</nav>

            <!--***********navigation ends*******-->

<div>
	<h2 class="count">5000</h2>
</div>





        <!--***********live updates starts*******-->
        <div class="mb-3">
		<h3 class="text-center text-uppercase">covid-19 world updates</h3>
	    </div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover text-center" id="tbval">
			<tr>
				<th>Sno.</th>
				<th>Country</th>
				<th>Total Confirmed</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				<th>New Confirmed</th>
				<th>New Recovered</th>
				<th>New Deaths</th>
			</tr>
			

		</table>
		
	</div><!--***********live updates ends*******-->

<!--***********live updates starts*******-->

<form action="#" onsubmit="return validation()">
   <div class="container">
	   <div class="row contact-row">
		  <div class="col-lg-8 offset-lg-2 col-12">

                <div class="heading">
                	<h1>*kindly fill the form regarding any health issue*</h1>
                </div>


                 <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="n1" placeholder="Enter your Name" autocomplete="off" 
                             id="name" onkeyup="checkname(this.value);"> 
                      <span id="username" class="text-danger font-weight-bold"></span>         
                 </div>

                 <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="e1" placeholder="Enter your Email" autocomplete="off" 
                             id="email" onkeyup="checkemail(this.value);">
                       <span id="emailid" class="text-danger font-weight-bold"></span>
                 </div>

                 <div class="form-group">
  	                  <label>Mobile no.</label>
                      <input type="text" class="form-control" name="m1" placeholder="Enter your Mobile no." 
                             id="mobile" autocomplete="off" onkeyup="checkmobile(this.value);">
                      <span id="mobno" class="text-danger font-weight-bold"></span>
                 </div>

                 


                 <div class="form-group">
  	                  <label for="exampleFormControlTextarea1">Your Message</label>
  	                  <textarea placeholder="Type your message here..." class="form-control" rows="3" name="msg" 
  	                            id="exampleFormControlTextarea1" onkeyup="checkmessage(this.value);"></textarea>
  	                  <span id="message" class="text-danger font-weight-bold"></span>  
                 </div>

                       <input type="submit" id="submit" class="btn btn-success" value="Submit" name="btn">
                       <span id="submitted" class="text-success font-weight-bold"></span>
            </div>
   

     </div>
  </div>
</form>
<br><br>
<br><br>
<br><br>



<section>
	<div><h2>Corona total cases</h2>
		<h3 class="counter">10000</h3>
	</div>
	<table class="table table-bordered">
		<tr>
            <td>Ative cases</td>
            <td>confirmed cases</td>
            <td>total cases</td>
		</tr>
		<tr>
			<td class="counter">50000</td>
            <td class="counter">60000</td>
            <td class="counter">70000</td>
		</tr>
	</table>
</section>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>



<div class="container">
		<div class="row">
		  
			<div class="col-lg-4 col-md-4 col-sm-6 col-12 animate-symptoms">
				<div class=" row-content2 animate-disease">
            			<img src="images/fever.png">
            			<h2>fever</h2>            		
            	</div>
			</div>


			<div class="col-lg-4 col-md-4 col-sm-6 col-12 animate-symptoms">
				<div class=" row-content2 animate-disease">
            			<img src="images/fatigue.png">
            			<h2>fatigue</h2>		
             	</div>
			</div>




			<div class="col-lg-4 col-md-4 col-sm-6 col-12 animate-symptoms">
				<div class=" row-content2 animate-disease">		
            			<img src="images/sneeze.png">		
            			<h2>coughing & sneezing</h2>           		
            	</div>
			</div>
        
      

        
        
			<div class="col-lg-4 col-md-4 col-sm-6 col-12 animate-symptoms">
				<div class=" row-content2 animate-disease">            		
            			<img src="images/headaches.png">            		            		
            			<h2>aches & pains</h2>            		
            	</div>
			</div>



			<div class="col-lg-4 col-md-4 col-sm-6 col-12 animate-symptoms">
				<div class=" row-content2 animate-disease">            		
            			<img src="images/breath.png">            		
            			<h2>difficulty in breathing</h2>            		
            	</div>
			</div>



			<div class="col-lg-4 col-md-4 col-sm-6 col-12 animate-symptoms">
				<div class=" row-content2 animate-disease">            		
            			<img src="images/sore-throat.png">            		            		
            			<h2>sore throat</h2>            		
            	</div>
			</div>


		</div>
	</div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>



<script>
jQuery(document).ready(function($) {
$('.counter').counterUp({
	delay:10,
	time:1000,
	triggerOnce:true
});
});







		
				


/* 
// Check if a new cache is available on page load.
window.addEventListener('load', function(e) {

  window.applicationCache.addEventListener('updateready', function(e) {
    if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
      // Browser downloaded a new app cache.
      if (confirm('A new version of this site is available. Load it?')) {
        window.location.reload();
      }
    } else {
      // Manifest didn't changed. Nothing new to server.
    }
  }, false);

}, false); */


// validations
function validation() {

	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var mobile = document.getElementById('mobile').value;
	var message =document.getElementById('exampleFormControlTextarea1').value;
	var status=false;
    


	if (name == "") {
		document.getElementById('username').innerHTML=" **Please fill the Name** ";
		status = false;
		return false;
	}
	 else if ((name.length <=2) || (name.length > 25)) {
		document.getElementById('username').innerHTML=" **Name must be in 3 to 25 characters** ";
		status = false;
		return false;
	}
	else if (!isNaN(name)) {
		document.getElementById('username').innerHTML=" **Name must be in characters** ";
		status = false;
		return false;
	}
	
	else{document.getElementById('username').innerHTML="<span class='color'>&#10004</span> ";
		status = true;}
		





	if (email == "") {
		document.getElementById('emailid').innerHTML=" **Please fill the email id** ";
		status = false;
		return false;
	}

	else if (email.indexOf('@') <=0) {
		document.getElementById('emailid').innerHTML=" **Invalid email** ";
		status = false;
		return false;
	}
	else if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) {
		document.getElementById('emailid').innerHTML=" **Invalid email** ";
		status = false;
		return false;
	}
	
	else{document.getElementById('emailid').innerHTML="<span class='color'>&#10004</span> ";
		status = true;}
		




    if (mobile == "") {
		document.getElementById('mobno').innerHTML=" **Please fill the Mob no.** ";
		status = false;
		return false;
	}

	else if (isNaN(mobile)) {
		document.getElementById('mobno').innerHTML=" **Invalid mob no.** ";
		status = false;
		return false;
	}
	else if (mobile.length!=10) {
		document.getElementById('mobno').innerHTML=" **Mob no. must be only 10 digits long** ";
		status = false;
		return false;
	}
	else{document.getElementById('mobno').innerHTML="<span class='color'>&#10004</span> ";
		status = true;}
		


    
    if (message == "") {
		document.getElementById('message').innerHTML=" **Please fill the message** ";
		status = false;
		return false;
	}
	 else if ((message.length <=4) || (message.length > 50)) {
		document.getElementById('message').innerHTML=" **Message must be of minimum 2 words or maximum 10 words** ";
		status = false;
		return false;
	}

	else if(message==true){document.getElementById('message').innerHTML="<span class='color'>&#10004</span> ";
		status = true;}

		else{ alert('Data Send Successfully');}

	return status;
}










	function checkname(name) {
	

	if (name == "") {
		document.getElementById('username').innerHTML=" **Please fill the Name** ";
		return false;
	}
	 else if ((name.length <=2) || (name.length > 25)) {
		document.getElementById('username').innerHTML=" **Name must be in 3 to 25 characters** ";
		return false;
	}
	else if (!isNaN(name)) {
		document.getElementById('username').innerHTML=" **Name must be in characters** ";
		return false;
	}
	
	else{document.getElementById('username').innerHTML="<span class='color'>&#10004</span> ";
		return false;}

		
}




function checkemail(email) {
if (email == "") {
		document.getElementById('emailid').innerHTML=" **Please fill the email id** ";
		return false;
	}

	else if (email.indexOf('@') <=0) {
		document.getElementById('emailid').innerHTML=" ";
		return false;
	}
	else if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) {
		document.getElementById('emailid').innerHTML=" ";
		return false;
	}
	
	else{document.getElementById('emailid').innerHTML="<span class='color'>&#10004</span> ";
		return false;}
    

}



function checkmobile(mobile) {
	if (mobile == "") {
		document.getElementById('mobno').innerHTML=" **Please fill the Mob no.** ";
		return false;
	}

	else if (isNaN(mobile)) {
		document.getElementById('mobno').innerHTML=" **Invalid mob no.** ";
		return false;
	}
	else if (mobile.length!=10) {
		document.getElementById('mobno').innerHTML=" **Mob no. must be only 10 digits long** ";
		return false;
	}
	else{document.getElementById('mobno').innerHTML="<span class='color'>&#10004</span> ";
		return false;
	    }
		
}



function checkmessage(message) {
	if (message == "") {
		document.getElementById('message').innerHTML=" **Please fill the message** ";
		return false;
	}
	 else if ((message.length <=4) || (message.length > 50)) {
		document.getElementById('message').innerHTML=" **Message must be of minimum 2 words or maximum 10 words** ";
		return false;
	}

	else{document.getElementById('message').innerHTML="<span class='color'>&#10004</span> ";
		return false;
	}

}


</script>

</body>
</html>