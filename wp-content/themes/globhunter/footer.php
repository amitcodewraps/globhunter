<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="index.html" title="">
										<img src="<?php echo ot_get_option('footer_logo'); ?>" alt="" /></a>
								</div>
								<span><?php echo ot_get_option('about_company'); ?></span>
								
								
								
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Navigations</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="<?php echo esc_url( get_page_link( 8 ) ); ?>" title="">Home </a>
										<a href="<?php echo esc_url( get_page_link( 29 ) ); ?>" title="">About Us</a>
										<a href="<?php echo esc_url( get_page_link( 27 ) ); ?>" title="">Job </a>
										<a href="<?php echo esc_url( get_page_link( 19 ) ); ?>" title="">Candidates </a>
										<a href="<?php echo esc_url( get_page_link( 17 ) ); ?>" title="">Blog </a>
										<a href="<?php echo esc_url( get_page_link( 15 ) ); ?>" title="">Contact US</a>
											
									</div>
									</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<h3 class="footer-title">Latest Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>	
										<a href="#" title="">Canada Jobs</a>	
										<a href="#" title="">UK Jobs</a>	
										<a href="#" title="">Emplois en Fnce</a>	
										<a href="#" title="">Jobs in Deuts</a>	
										<a href="#" title="">Vacatures China</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4">
                                <div class="footer-widget">
                                    <h4 class="footer-title">Contact Us</h4>
                                    <ul class="footer-menu">
                                          
                                      <li><a><i class="fas fa-map-marker" style="margin-right:5px;" aria-hidden="true"></i>
                                            <?php echo ot_get_option('address'); ?>
                                          </a>
                                      </li>

                                        <li><a href="mailto:<?php echo ot_get_option('email_id'); ?>"><i class="fa fa-envelope" style="margin-right: 5px;" aria-hidden="true"></i><?php echo ot_get_option('email_id'); ?></a></li>

                                         <li><a href="https://api.whatsapp.com/send/?phone=(84)855074568&text&app_absent=0" target="_blank"><i class="fab fa-whatsapp" style="margin-right:5px;font-size:medium; "aria-hidden="true" ></i><?php echo ot_get_option('phone_no'); ?></a></li>
                                      

                                    </ul>
                                    <div class="social">
									<a href="<?php echo ot_get_option('facebook'); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
									<a href="<?php echo ot_get_option('skype'); ?>" title=""><i class="fab fa-skype" target="_blank"></i></a>
									<a href="<?php echo ot_get_option('linkedin'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
									<a href="https://api.whatsapp.com/send/?phone=9807983698&text&app_absent=0" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
								</div>
                                </div>
                            </div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span><?php echo ot_get_option('copy_rights'); ?> Design by <a href="https://www.codewraps.com/" target="_blank"><strong class="codewraps"> Codewraps</strong></a></span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>User Login</h3>
		<span>Click To Login With Demo User</span>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit">Login</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Sign Up</h3>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Email" />
				<i class="la la-envelope-o"></i>
			</div>
			<div class="dropdown-field">
				<select data-placeholder="Please Select Specialism" class="chosen">
					<option>Web Development</option>
					<option>Web Designing</option>
					<option>Art & Culture</option>
					<option>Reading & Writing</option>
				</select>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Phone Number" />
				<i class="la la-phone"></i>
			</div>
			<button type="submit">Signup</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- SIGNUP POPUP -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/select-chosen.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
