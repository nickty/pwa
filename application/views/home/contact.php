<section class="container">
	<h2 class='orange'>
		<h4 class='orange-text'>
			<?php
			echo  $this->session->flashdata('email_sent');

			?>
		</h4>
		<div style="margin: 25px;">
			<center>
				<img class="activator" src="<?= base_url('images/mizan.jpg'); ?>" width=250>
				<h4><a href="https://www.linkedin.com/in/mizanur-rahman-a808082a/?lipi=urn%3Ali%3Apage%3Ad_flagship3_notifications%3BPy%2BQksbVQEGa1bLReLB9rg%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_notifications-nav.settings_view_profile" target="_blank">Mizan</a></h4>
				<h5>Waiting to connect</h5>
			</center>

		</div>
		<div class="row">
			<div class="col l6 m6 s12">
				<h3 class="mkdf-st-title"> Now Is The Time To Craft Brilliance Together</h3>
				<p class="mkdf-st-text" style="font-size: 20px;line-height: 31px;margin-top: 16px"> So let`s get in touch and turn your app idea into a brilliant mobile app solution. Go ahead &amp; fill the form</p>
				<div class="row">
					<div class="col s6 mkdf-st-text">
						<h4>Working Hours</h4>
						<p>SUNDAY TO FRIDAY: 9AM TO 8PM</p>

						<h4>Email</h4>
						<p>rangpurdev@gmail.com</p>
					</div>
					<div class="col s6 mkdf-st-text">
						<h4>Address</h4>
						<p>SUNDAY TO FRIDAY: 9AM TO 8PM</p>

						<h4>Contact Phone</h4>
						<p>+8801717914839</p>
					</div>
				</div>
			</div>

			<div class="col l6 m6 s12" style="border:1px solid grey; margin: 20px 0; box-sizing: border-box;">
				<h3 class="mkdf-st-title"> Let’s have a conversation</h3>

				<div class="row">
					<div class="col s12">

						<?= form_open('home/email'); ?>

						<div class="row">
							<div class="input-field col s12">
								<input placeholder="Name" id="name" name="name" type="text" class="validate">
								<label for="first_name">Name</label>
							</div>

						</div>


						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" name="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>


						<div class="row">
							<div class="input-field col s12">
								<textarea id="message" name="message" class="materialize-textarea"></textarea>
								<label for="message">Textarea</label>
							</div>
						</div>
						<button type="submit" class="btn">Send</button>
						<?= form_close(); ?>
					</div>
				</div>

			</div>


		</div>
	</section>