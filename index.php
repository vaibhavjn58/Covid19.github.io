<!DOCTYPE html>
<html>
<head>
	<title>
		COVID-19 Tracker
	</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta http-equiv="expires" content="Mon, 01 June 2020 5:00:00 GMT"/>
     <meta http-equiv="pragma" content="no-cache"/>
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	 <link rel="stylesheet" type="text/css" href="style.css">      <!-- css file link -->
	 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> <!--google fonts -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!--bootstrap links -->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>  <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">   <!--gitgub animation-->
     <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>  <!-- animation links -->
    
    <?php
header('Expires: Mon, 01 June 2020 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

?> 
</head>

<body onload="myFunction()">


	<div id="loading"></div>
<script>
	var preloader = document.getElementById('loading');
        function myFunction(){
        	preloader.style.display='none';
        }


       
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
					        <a href="#home" class="nav-link">Home</a>
				          </li>


				          <li class="nav-item">
			        		<a href="#live-updates" class="nav-link">Corona Live Updates</a>
			        	</li>


				       <li class="nav-item">
			        		<a href="#contagion" class="nav-link">Contagion</a>
			        	</li>			        	


				       <li class="nav-item">
			        		<a href="#symptoms" class="nav-link">Symptoms</a>
			        	</li>

				       <li class="nav-item">
			        		<a href="#contact us" class="nav-link">Contact Us</a>
			        	</li>
			        </ul>
		         </div>


		</div>
</nav>

            <!--***********navigation ends*******-->

<section id="home" class="main-header">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-center main-row-content">
			
			<div class="col-lg-4 col-md-4 col-12">
				<div class="left-side-content w-100 h-100">
					
		<?php
		$idata = file_get_contents('https://api.covid19india.org/data.json');
		 $coronalive = json_decode($idata, true); ?>
		    <h1>Covid-19 Tracker</h1>
			<h3>Total Confirmed Corona Cases in India</h3>
			<h2 class="count"> <?php echo $coronalive['statewise'][0]['confirmed'] ?></h2>
		
	

	<ul class="list-icon">
		<li class="cases">Active cases <span class="cases-no count" style="float: right;"><?php echo $coronalive['statewise'][0]['active'] ?></span></li>

		<li class="cases">Recovered <span class="cases-no count" style="float: right;"><?php echo $coronalive['statewise'][0]['recovered'] ?></span></li>

		<li class="cases">Deaths <span class="cases-no count" style="float: right;"><?php echo $coronalive['statewise'][0]['deaths'] ?></span></li>
	</ul>
				</div>
			</div>


			<div class="col-lg-8 col-md-8 col-12 main-png">
				<div class="row align-items-center justify-content-center">
            		<div class="col-lg-5 col-5 soldier">
            			<img src="images/soldier.png" class="animated fadeInDown delay-2s slower">
            		</div>
				    <div class="col-lg-7 col-7 corona-gif w-100 h-100">
					     <img src="images/coronavirusb.png">
				    </div>
				</div>
			</div>
		

		</div>
	</div>
</section>
</div>






<!-- ***********corona India update********* -->
<section id="live-updates" class="container-fluid">
  
  <div class="tab d-flex align-items-center justify-content-center">
  <button class="tablinks" onclick="openCity(event, 'menu1')" id="defaultOpen"><h4 class="text-capitalize">state-wise cases
  </h4></button>
  <button class="tablinks" onclick="openCity(event, 'menu2')"><h4 class="text-capitalize">global cases</h4></button>
  </div>

  


  
    <div id="menu1" class="tabcontent">
      <!-- ***********corona India update********* -->
      <div class="mt-5">
		<h3 class="text-center text-uppercase">covid-19 Live updates of india</h3>
	  </div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover text-center">
			<tr>
				
				<th class="text-capitalize">State</th>
				<th class="text-capitalize">confirmed</th>
				<th class="text-capitalize">active</th>
				<th class="text-capitalize">recovered</th>
				<th class="text-capitalize">deaths</th>				
			</tr>
		




<?php 

$idata = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($idata, true);




$statescount = count($coronalive['statewise']);

$i=1;
while($i < $statescount) {

	?>
 
	<tr>
		
        <td class="bg-secondary"> <?php echo $coronalive['statewise'][$i]['state'] ?> </td>
        <td class="bg-info"> <?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
        <td class="bg-warning"> <?php echo $coronalive['statewise'][$i]['active'] ?> </td>
        <td class="bg-success"> <?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
        <td class="bg-danger"> <?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>

	</tr>

	

<?php
	$i++;
	
}

?>

</table>
		
	</div>
	<!-- ***********corona India update ends********* -->
    </div>
    







    <div id="menu2" class="tabcontent">
        <!--***********live updates starts*******-->
        <div class="mt-5">
		<h3 class="text-center text-uppercase">covid-19 live global updates</h3>
	    </div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover text-center">
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
			<tbody id="country-wise"></tbody>
		</table>
		
	</div><!--***********live updates ends*******-->
    </div>
   
  
</section>
<!-- ***********corona India update ends********* -->





 
<section id="contagion" class="second-header">
<div class="container text-center heading1">
	<h1>how humans gets infected through virus</h1>
</div>
	<div class="container">
		<div class="row">
			

			<div class="col-lg-5 col-md-5 col-12">
				<div class="sick-gif w-100 h-100 justify-content-center align-items-center">
					<img src="images/second-header.png">
				</div>
			</div>
		

			<div class="col-lg-7 col-md-7 col-12">
				<div class="row row-content">
            		<div class="col-lg-3 col-3 virus-spread">
            			<img src="images/humans-contact.png">
            		</div>

            		<div class="col-lg-9 col-9 second-header-content">
            			<h2>human contact</h2>
            			<p>People can catch COVID-19 from others who have the virus. The disease spreads primarily from person to person through small droplets from the nose or mouth.</p>
            		</div>
            	</div>



            	<div class="row row-content">
            		<div class="col-lg-3 col-3 virus-spread">
            			<img src="images/transmission.png">
            		</div>

            		<div class="col-lg-9 col-9 second-header-content">
            			<h2>air transmission</h2>
            			<p>one who infected by covid-19, his or her droplets when sneezes or speaks travel in the air which can infected to other when in contact.</p>
            		</div>
            	</div>



            	<div class="row row-content">
            		<div class="col-lg-3 col-3 virus-spread">
            			<img src="images/contaminated.png">
            		</div>

            		<div class="col-lg-9 col-9 second-header-content">
            			<h2>contaminated objects</h2>
            			<p>People can become infected by touching the objects such as doorknobs, tables and even by exchanging currency.</p>
            		</div>
            	</div>
			</div>


		</div>
	</div>
</section>




<!--********** Third Header starts*********** -->
<section id="symptoms" class="third-header">
	<div class="container text-center heading2">
		<h1>covid-19 symptoms</h1>
	</div>

	
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
</section>
<!--********** Third Header ends*********** -->









<!--********** Fourth Header starts*********** -->

<section class="fourth-header">
	<div class="container avengers-heading">
		<h1>here are the real life</h1> 
		<h2>avengers</h2> 
	    <h1>of our country</h1>
	</div>



<div class="avengersurl"></div>
     
     <div class="container">
     	<div class="row justify-content-center align-items-center whole-row">
     		<div class="col-lg-6 col-md-6 col-12 avenger-text">
     			<p>Doctors, Police and other Health Workers are to protect us. Please cooperate them. </p>
     		</div>


     		<div class="col-lg-6 col-md-6 col-12 avenger-text">
     			<p>Dont treated them as enemies. They also have their families but they are here to save other's life.</p>
     		</div>

     	</div>
     </div>

</section>

<!--********** Fourth Header ends*********** -->




<!-- form parts starts -->
<section id="contact us" class="contact-header">
<form action="connection.php" method="POST" onsubmit="return validation()">
   <div class="container">
	   <div class="row contact-row">
		  <div class="col-lg-8 offset-lg-2 col-12">

                <div class="heading">
                	<h1>*kindly fill the form regarding any health issue or any feedback*</h1>
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
                 	<label>Select Symptoms</label> <br>

                 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                 		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="fever">
                 		<label class="custom-control-label" for="customcheckbox1">Fever</label>                		
                 	</div>

                 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                 		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" 
                 		      value="coughing & sneezing">
                 		<label class="custom-control-label" for="customcheckbox2">Coughing & Sneezing</label>                		
                 	</div>

                 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                 		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" 
                 		       value="difficulty in breathing">
                 		<label class="custom-control-label" for="customcheckbox3">Difficulty in Breathing</label>                		
                 	</div>


                 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                 		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="sore throat">
                 		<label class="custom-control-label" for="customcheckbox4">Sore Throat</label>                		
                 	</div>


                 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                 		<input type="checkbox" class="custom-control-input" id="customcheckbox5" name="coronasym[]" value="none">
                 		<label class="custom-control-label" for="customcheckbox5">None</label>                		
                 	</div>

                 </div>


                 <div class="form-group">
  	                  <label for="exampleFormControlTextarea1">Your Message</label>
  	                  <textarea class="form-control" rows="3" name="msg" placeholder="Type your message..."
  	                            id="exampleFormControlTextarea1" onkeyup="checkmessage(this.value);"></textarea>
  	                  <span id="message" class="text-danger font-weight-bold"></span>  
                 </div>

                       <input type="submit" id="submit" class="btn btn-success" value="Submit" name="btn">

            </div>
   

     </div>
  </div>
</form>
</section>
<!-- form parts ends -->





<footer class="mt-5 footer-main">
<div class="footer-top">	
	<div class="container">
		<div class="row footer-row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 footer-links all-footer">
				<h4>Useful Links</h4>
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#live-updates">Corona Live Updates</a></li>
						<li><a href="#contagion">Contagion</a></li>
						<li><a href="#symptoms">Symptoms</a></li>
						<li><a href="#contact us">Contact Us</a></li>
					</ul>
			</div>


			<div class="col-lg-6 col-md-6 col-sm-6 col-12 footer-sm-links all-footer">
				<h4>Contact via</h4>
					<a href="https://www.facebook.com/profile.php?id=100007366201001" target="_blank" class="facebook">
						    <i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/vaibhavjain_vj/" target="_blank" class="instagram">
						    <i class="fa fa-instagram"></i></a>
					<a href="https://bit.ly/3fa20Sg" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
			</div>

		</div>
	</div>
</div>



	<div class="container-fluid footer-style text-white text-center">
		<p>&copy; 2020 VaibhavJain</p>
	</div>



	<div class="scrolltop float-right">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
</footer>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput-jquery.min.js" integrity="sha256-EfJSwi/WrHIzumjUmRZ25gVg2GRTTVpqkps8CNtcnLI=" crossorigin="anonymous"></script> <!-- 429error cdn -->
<script src="main.js"></script>


<script>
	jQuery(document).ready(function($) {
$('.count').counterUp({
	delay:10,
	time:2000,
	triggerOnce:true
});
});





jQuery("#teephnumber").intlTelInput({
        allowExtensions: true,
        defaultCountry: "auto",
        setNumber: "Telephone number",
        geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
            });
          },
        nationalMode: false,
        utilsScript: "/wp-content/themes/imc/js/utils.js"
    });
</script>





</body>
</html>