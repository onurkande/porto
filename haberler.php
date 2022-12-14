<?php require_once "header.php" ?>

			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none">Law Firm Attorneys</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="row">

							<div class="col-md-12">

							<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
								<span class="thumb-info-side-image-wrapper p-none hidden-xs">
									<a title="" href="demo-law-firm-news-detail.html">
										<img src="img/demos/law-firm/blog/blog-law-firm-1.jpg" class="img-responsive" alt="" style="width: 195px;">
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="demo-law-firm-news-detail.html">Award of Honor</a></h2>
										<span class="post-meta">
											<span>January 10, 2016 | <a href="#">John Doe</a></span>
										</span>
										<p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
										<a class="mt-md" href="demo-law-firm-news-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
									</span>
								</span>
							</span>

							</div>

							</div>

						</div>


						<!-- Sidebar -->

						<div class="col-md-3">
							<aside class="sidebar">
								<div id="combinationFilters" class="filters">

									<h4 class="mt-xl mb-md">Practice Area:</h4>
									<ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group1">
										<li data-option-value="" class="active"><a href="#">Show All</a></li>
										<li data-option-value=".criminal-law"><a href="#">Criminal Law</a></li>
										<li data-option-value=".business-law"><a href="#">Business Law</a></li>
										<li data-option-value=".divorce-law"><a href="#">Divorce Law</a></li>
										<li data-option-value=".health-law"><a href="#">Health Law</a></li>
										<li data-option-value=".capital-law"><a href="#">Capital Law</a></li>
									</ul>

									<h4 class="mt-xl mb-md">Location:</h4>
									<ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group2">
										<li data-option-value="" class="active"><a href="#">Show All</a></li>
										<li data-option-value=".new-york"><a href="#">New York</a></li>
										<li data-option-value=".london"><a href="#">London</a></li>
									</ul>

								</div>

								<h4 class="mt-xl mb-md">Contact Us</h4>
								<p>Contact us or give us a call to discover how we can help.</p>

								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>

								<form id="contactForm" action="php/contact-form.php" method="POST">
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Your name *</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Your email address *</label>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Subject</label>
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Message *</label>
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading...">

											<div class="alert alert-success hidden" id="contactSuccess">
												Message has been sent to us.
											</div>

											<div class="alert alert-danger hidden" id="contactError">
												Error sending your message.
											</div>
										</div>
									</div>
								</form>

							</aside>
						</div>
					</div>

				</div>
			</div>

<?php require_once "footer.php"; ?>