

    $.ajax({
	url : "https://api.covid19api.com/summary",
	type : "GET",
	dataType : "JSON",
	success : function(data) {
		console.log(data);
		console.log(data.Countries);

      
        var sno =1;
		$.each(data.Countries,function(key,value) {
			$("#country-wise").append("<tr>" +
				                      "<td bgcolor='#f8f9fa'>" + sno + "</td>" +
				                      "<td bgcolor='#6c757d'>" + value.Country + "</td>" +
				                      "<td bgcolor='#17a2b8'>" + value.TotalConfirmed + "</td>" +
				                      "<td bgcolor='#28a745'>" + value.TotalRecovered + "</td>" +
				                      "<td bgcolor='#dc3545'>" + value.TotalDeaths + "</td>" +
				                      "<td bgcolor='#17a2b8'>" + value.NewConfirmed + "</td>" +
				                      "<td bgcolor='#28a745'>" + value.NewRecovered + "</td>" +
				                      "<td bgcolor='#dc3545'>" + value.NewDeaths + "</td>" + 
				                      "</tr>");
			sno++;

		});
	

	}
});		



//get the button:
	mybutton=document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		}

		else{
			mybutton.style.display = "none"; 
		}
	} 

// When th user clicks on button , scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; //For safari
	document.documentElement.scrollTop = 0; //For chrome, Firefox, IE and opera

}


window.sr = ScrollReveal();
		sr.reveal('.animate-symptoms',{
		duration:3000,
		origin:'bottom',
		distance:'70px',
		easing:'ease'
	});






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










function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


