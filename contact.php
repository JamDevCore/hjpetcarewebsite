<?php

require('header.php');

?>

<div id="pagewrap">


<section id="contact">
	<div class="container-fluid">
		<div id="contactMe">
			<div id="contactMeInfo">
				</div>
					<div id="contactForm">
						<h2 id="indexpagetitle">Book Your Meet and Greet or Request a Quote</h2>
						<h3 class="callnow">Call me on 07807070044 or use the Contact Form below</h3>
						<div class = "info">
							<p class="sectiontext">Don't hesitate to get in touch if you have any questions regarding your booking. If there are services not listed on this website, or you have specific requirements, please let me know in your message and I will let you know how I can accommodate. I firmly believe that every pet has unique needs and so any information you provide will help me to cater for their individual needs.</p><p class ="sectiontext"> Please note there will be a 20% non-refundable deposit for any pet sittings that are booked for a whole week or more.</p>
						</div>
						<div id="contactForm">
							<form id="i-recaptcha" action = "thankyou.php" method="POST">
								<br>
								<input  class="forminput" type="text" name="name" required="required" placeholder ="Your name"/><br><br>
								<input   class="forminput" type="text" name="email" required="required" placeholder="Email Address"/><br><br>
								<input  type="text" name="subject" class="forminput" required="required" placeholder="Subject"/><br><br>
								<textarea   class = "forminput" rows="5" required="required" placeholder="Your message" name = "message"/></textarea><br><br>
								<button class="g-recaptcha formButton" data-sitekey="6LfJzzgUAAAAAPqgM74OD_X4yJxoi88zjhfJ2Euw" data-callback="onSubmit" id ="myBtn">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>



<div id="pagewrap">

<footer class="mainFooter"><div class ="ieFix"><div id="footer"><a href="https://www.facebook.com/hjpetcare/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><p id="footertext">Copyright © HJPetcare 2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Another website by <a id="myWeb" href="http://www.jamesvitaly.com">JamesVitaly</a></p><div></div>

</footer>
</div>

</body>
</html>
