<div class="site-content__section contact-form">
<div class="container gc contact-form-wrapper">
	<div class="contact-form-content">
	<div class="xs12">
<p class="contact-form-content-title">Want to discuss a Project</p>
<p class="contact-form-content-sub-title">Submit the form with your details, we'll get back to you</p>
<form class="contact-form" name='myform' onsubmit="contact(); return false;" novalidate>

<div class="input-wrapper"> 
<input type="text" class='input' name='name' id="name" placeholder="Name" />
<div class='validation'>Please enter Name</div>
<div class='validation'>Please enter a Valid Name</div>
</div>	

<div class="input-group list-block sm2">	
<div class="input-wrapper"> 
<input type="email" class='input' name='email' id="email" placeholder="Email" />
<div class='validation'>Please enter E-mail</div>
<div class='validation'>Please enter a Valid E-mail</div>
</div>
<div class="input-wrapper"> 
<input type="text" class='input' name='phonenumber' id="phonenumber" placeholder="Phone Number" />
<div class='validation'>Please enter the Number</div>
<div class='validation'>Please enter a Valid Number</div>
<div class='validation'>Phone Number required minimum 6 Nos</div>
</div>	
</div>

<div class="input-wrapper"> 
<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
<div id="validation" class='validation'>Please enter Message</div>
</div>	

<div class="btn-wrapper">
<button type='submit' class="btn btn1">Submit</button>	
<div class="loader"></div>  
</div>	

<div class="response-wrapper">
<div class="response"></div>					
</div>	
</form>
</div>
	</div>

</div>
</div>


<script>
function contact() {
	
// ------------------ validation for all inputs, if submit without filling ----------------------- // 

let inputs = document.getElementsByClassName('input');
for(i=0;i<inputs.length;i++) {
if(inputs[i].value===''){
inputs[i].nextElementSibling.classList.add('show');
}	
	else {
	inputs[i].nextElementSibling.classList.remove('show');
	}
}	
	
// ------------------ validation for Name ----------------------- //   
	
let name = document.getElementById('name');
let namevalue = name.value;
if (namevalue=='') {
    name.nextElementSibling.classList.add('show');
	name.nextElementSibling.nextElementSibling.classList.remove('show');
	document.myform.name.focus();
    return false;
  }
  else if (!isNaN(namevalue)) {
    name.nextElementSibling.nextElementSibling.classList.add('show');
    name.nextElementSibling.classList.remove('show');	
	document.myform.name.focus();
    return false;	
  }  
  else {
    name.nextElementSibling.nextElementSibling.classList.remove('show'); 
	name.nextElementSibling.classList.remove('show');	
  }

// ------------------ validation for email ----------------------- //    
	
let emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i // regexp to check email
let checkemail=emailfilter.test(document.myform.email.value); // setting the email field to validate

let email = document.getElementById('email');
let emailvalue = email.value;
if (emailvalue === "" ) {
email.nextElementSibling.classList.add('show');
email.nextElementSibling.nextElementSibling.classList.remove('show');
document.myform.email.focus();
return false;
}
else if(checkemail==false )
{
email.nextElementSibling.nextElementSibling.classList.add('show');
email.nextElementSibling.classList.remove('show');
document.myform.email.focus();
return false;
}	
else {
email.nextElementSibling.classList.remove('show');  
email.nextElementSibling.nextElementSibling.classList.remove('show');  
} 
	
// ------------------ validation for phone number ----------------------- //   	
	
let phonenumber = document.getElementById('phonenumber');
let phonenumbervalue = phonenumber.value;
if (phonenumbervalue=='') {
    phonenumber.nextElementSibling.classList.add('show');
				phonenumber.nextElementSibling.nextElementSibling.classList.remove('show');
				phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('show');	
				document.myform.phonenumber.focus();
    return false;
  }
  else if (isNaN(phonenumbervalue)) {
    phonenumber.nextElementSibling.nextElementSibling.classList.add('show');
  		phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('show');
    phonenumber.nextElementSibling.classList.remove('show');
				document.myform.phonenumber.focus();
			return false;
  }
  else if (phonenumbervalue.length<6) {
    phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.add('show');
    phonenumber.nextElementSibling.nextElementSibling.classList.remove('show');     phonenumber.nextElementSibling.classList.remove('show');		
				document.myform.phonenumber.focus();
				return false;
  }  
  else {
				phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('show');
    phonenumber.nextElementSibling.nextElementSibling.classList.remove('show'); 
				phonenumber.nextElementSibling.classList.remove('show');	
  }		
// ------------------ message ------------------ //
let message = document.getElementById('message');
let messagevalue = message.value;	
	
	
document.querySelector('.loader').style.display='block'; // Showing the Loader after submit

	
// ------------------ Ajax Request Starts ------------------ //
	
let xhr = new XMLHttpRequest();
xhr.open("POST", "<?php bloginfo('stylesheet_directory') ?>/mailer/contact-mailer.php", true);
let data = new FormData();	
	
data.append('name',namevalue);
data.append('email',emailvalue);
data.append('phonenumber',phonenumbervalue);
data.append('message',messagevalue);
		
xhr.onreadystatechange = function() {
if (this.readyState === 4 && this.status === 200) {
document.querySelector('.loader').style.display='none';// hiding the Loader after Success Result	
document.querySelector('.response').classList.add('show');// showing response of Success Result	
document.myform.reset() // resetting name field of form	
document.querySelector('.response').innerHTML = this.responseText; // showing result
setTimeout(function(){document.querySelector('.response').classList.remove('show')},20000); // hiding the Response after few seconds
}};
xhr.send(data);
	
}  
</script>