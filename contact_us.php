<?php
	include("header.php");
?>
		<div class="row page-title">
		 	<h2 class="white-text center-align">Contacts</h2> 
		</div>

		<div class="row chip-bar-container hide-on-small-only">
			<div class="col s12 m10 offset-m1 chips-bar">
				<div class="chip">
					<a href="#contacts">Contacts</a>
				</div>
				<div class="chip">
					<a href="#query">Query Form</a>
				</div>
			</div>
		</div>

		<div class="row block" id="contacts">	
			<div class="block-title col s12 valign-wrapper">
				<span class="valign leftline"></span>
				<p class="valign title">Contacts</p>
				<span class="valign rightline"></span>
			</div>
			<div class="col s12">
				<div class="col s10 offset-s1 l3 card-panel contact-card">
					<div class="col s4 m12 contact-image">
						<img class="responsive-img circle" src="images/iiita/shirshuvermacontact.jpg"> 
					</div>
					<div class="col s8 m12 contact-details">
						<p><big><b>Dr. Shirshu Verma</b></big></p>
						<p>
							Faculty Incharge, Training and Placements<br>tpo@iiita.ac.in, placements@iiita.ac.in<br>+91-9450965329
						</p>
					</div>
				</div>
				<div class="col s10 offset-s1 l3 card-panel contact-card">
					<div class="col s4 m12 contact-image">
						<img class="responsive-img circle" src="images/iiita/abhishek.jpg"> 
					</div>
					<div class="col s8 m12 contact-details">
						<p><big><b>Abhishek Nandan</b></big></p>
						<p>
							Student Coordinator,Training and Placements<br>placements@iiita.ac.in<br>+91-8789192031<br>+91-8603111470
						</p>
					</div>
				</div>
				<div class="col s10 offset-s1 l3 card-panel contact-card">
					<div class="col s4 m12 contact-image">
						<img class="responsive-img circle" src="images/iiita/himanshuvimalcontact.jpg"> 
					</div>
					<div class="col s8 m12 contact-details">
						<p><big><b>Swapnil Chavan</b></big></p>
						<p>
							Student Coordinator(PG)<br>placements@iiita.ac.in<br>+91-7506106906
						</p>				
					</div>
				</div>
			</div>
		</div>

		<div class="row block" id="query">
			<div class="block-title col s12 valign-wrapper">
				<span class="valign leftline"></span>
				<p class="valign title">Send us your query</p>
				<span class="valign rightline"></span>
			</div>
			<div class="col s10 offset-s1 body">
				<form class="col s10 offset-s1 center" id="queryform" action="php/send_email.php" method="post">
					<div class="input-field col s12">	
						<i class="material-icons prefix">email</i>
						<label for="email">Enter your email : </label>
						<input type="email" id="email" name="email" required>
					</div>
					<div class="input-field col s12">	
						<i class="material-icons prefix">phone</i>
						<label for="phoneno">Contact No. :  </label>
						<input type="number" min="0" id="phoneno" name="phoneno" required>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">question_answer</i>
						<textarea name='message' id="message" class="materialize-textarea" rows="100"></textarea>
						<label for="message">Your message : </label>
					</div>
					<button class="btn waves-effect waves-light center-align" type="submit" name="sendmessage">Send
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>

		<?php
			include 'footer.php';
		?>

		<!--Import jQuery before materialize.js-->
		<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
		<script type="text/javascript" src="js/jquery-1.12.2.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
