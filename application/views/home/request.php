<section>
	<div class="container">
		<h4 class="center">Request a Quote</h4>
		<h4 class='orange-text'>
			<?php
			echo  $this->session->flashdata('email_sent');

			?>
		</h4>
		<div class="row">
			<div class="col l12 m12 s12">
				<center>
					Do you think you need a solution? We can help! We are waiting to help you because thats our goal which give us money. Tell us a bit about what you are looking for. 

					Please fill the form out, So we can understand what you need exactly.
				</center>
				

				<div class="row" style="border:1px solid gray; margin-top: 20px; padding: 20px;">
					<?= form_open('home/request_quote'); ?>
					<div class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input id="first_name" name="first_name" type="text" class="validate">
								<label for="first_name">First Name</label>
							</div>
							<div class="input-field col s6">
								<input id="last_name" name="last_name" type="text" class="validate">
								<label for="last_name">Last Name</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<input id="email" name="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
							<div class="input-field col s6">
								<input id="bname" name="bname" type="text" class="validate">
								<label for="bname">Business Name</label>
							</div>
						</div>

						<div class="row">
							<h6>Are you interested in:</h6>
							<div class="input-field col s6">
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="PWA From Scratch" />
										<span>PWA From Scratch</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="Migration To PWA" />
										<span>Migration To PWA</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="PWA Optimization" />
										<span>PWA Optimization</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="PWA SEO" />
										<span>PWA SEO</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="PWA Maintenance" />
										<span>PWA Maintenance</span>
									</label>
								</p>
							</div>
							<div class="input-field col s6">
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="Website Design" />
										<span>Website Design</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="Website Development" />
										<span>Website Development</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="Software Development" />
										<span>Software Development</span>
									</label>
								</p>
								<p>
									<label>
										<input type="checkbox" name="interested[]" class="filled-in" value="Graphic Design (Only4web)" />
										<span>Graphic Design (Only4web)</span>
									</label>
								</p>
								
							</div>
						</div>

						<div class="row">
							<h6>What is your business all about:</h6>
							<div class="input-field col s12">
								<textarea id="textarea1" name="texta" class="materialize-textarea texta" style="border: 1px solid gray; padding: 5px; height: 150px;"></textarea>
								<label for="textarea1">Write here ....</label>
							</div>
						</div>
						<div class="row">
							<h6>This is an inline input field:</h6>
							<div class="col s12">
								
								

								<p>
									<label>
										<input class="with-gap" value="Google Search" name="group3[]" type="radio" />
										<span>Google Search</span>
									</label>
								</p>

								<p>
									<label>
										<input class="with-gap" value="Social Media" name="group3[]" type="radio" />
										<span>Social Media</span>
									</label>
								</p>

								<p>
									<label>
										<input class="with-gap" value="Bing Search" name="group3[]" type="radio" />
										<span>Bing Search</span>
									</label>
								</p>

								<p>
									<label>
										<input class="with-gap" value="LinkedIn" name="group3[]" type="radio" />
										<span>LinkedIn</span>
									</label>
								</p>

								<p>
									<label>
										<input class="with-gap" value="Referral" name="group3[]" type="radio" />
										<span>Referral</span>
									</label>
								</p>

								<p>
									<label>
										<input class="with-gap" value="Other" name="group3[]" type="radio" />
										<span>Other</span>
									</label>
								</p>




								
							</div>
							<p class="orange-text"><b>NOTE:</b> The information you share on this form is used to prepare your quote and contact you regarding our services. We will not share your information with outside parties.</p>
						</div>
						<button type="submit" class="btn">Send Request</button>
					</div>

					<?= form_close(); ?>
				</div>
				
			</div>
		</div>
	</div>
</div>
</section>