<?php
/*Template Name: Contact Us*/
get_header('inner');
 ?>
	<section>
		<?php the_content(); ?>
	</section>

<section>
		<div class="block remove-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2387.765593111568!2d-0.5127811761545735!3d53.23997813566101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48784ff1ebd31a81%3A0x8ee9e6e8a1eb5d12!2sHunter%20Global%20Recruitment%20Ltd!5e0!3m2!1sen!2sin!4v1654925108171!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	




	<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Keep In Touch</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="contact-form">
				 			
				 			<form>
				 				<div class="row">
				 					
				 					<div class="col-lg-12">
				 						<span class="pf-title">Email</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter Email Id" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Position</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Position" />
				 						</div>
				 					</div>
									<div class="col-lg-12">
				 						<span class="pf-title">Full Name</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Enter Full Name" />
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Why do you want to join us</span>
				 						<div class="pf-field">
				 							<textarea placeholder="Write Comments"></textarea>
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<button type="submit">Send</button>
				 					</div>
				 				</div>
				 			</form>
				 		</div>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>