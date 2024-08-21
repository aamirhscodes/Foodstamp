@extends('layout.app')
@section('content')
<div class="bg-p d-flex justify-content-between align-items-center" id="promo">
   <span style="color:#009af4;">Your No. 1 Trade Sign Partner!</span>
   <a href="{{route('contact')}}" style="width: 230px !important;padding-top: 0.2rem; letter-spacing: 0.5px; padding-bottom: 0.2rem; font-size: 1rem; background: #171717; background: -webkit-linear-gradient(top left, #171717, #293382); background: -moz-linear-gradient(top left, #171717, #293382); background: linear-gradient(to bottom right, #171717, #293382);" class="text-uppercase bg-primary rounded px-1 text-white"> <span>
                     <svg style="height:1em;position:relative;top:-5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="white" d="M21 14.655l-5.799.908 3.393 6.917-3.111 1.52-3.413-6.982-4.07 3.651v-15.857l13 9.843m-12.792-10.905l-1.042.519-1.536-3.087 1.043-.519 1.535 3.087zm2.599-3.577l-1.152-.173-.513 3.409 1.152.173.513-3.409zm-4.779 5.848l.557-1.023-3.028-1.648-.557 1.023 3.028 1.648z" />
                     </svg>
                  </span> Custom Enquiry </a>
</div>
<div id="c" data-checkout-url="/checkout" data-countdown="2022-05-08T00:00:00+01:00">
	<h1 class="text-center display-1">Contact Us</h1>
	<div class="col-lg-10 offset-lg-1 text-center">
		<h3 class="nw mt-0 mb-">If you've got a question our friendly team are always happy to help.
<hr></h3> </div>
	<div class="d-flex flex-wrap col-lg-10 offset-lg-1" id="contact-details">
		<div class="col-12 col-lg-6 p-0" id="contact-form-container">
			<form name="contact" method="post" novalidate="novalidate" id="contact-form">
				<h5>Send us a message</h5>
				<div class="cfe-c">
					<label for="cf-name">
						<label for="contact_name" class="required">Your name</label>
					</label>
					<input type="text" id="contact_name" name="contact[name]" required="required"> </div>
				<div class="cfe-c">
					<label for="cf-email">
						<label for="contact_email" class="required">Email Address</label>
					</label>
					<input type="email" id="contact_email" name="contact[email]" required="required"> </div>
				<div class="cfe-c">
					<label for="cf-subject">
						<label class="required" for="contact_subject">How can we help?</label>
					</label>
					<select id="contact_subject" name="contact[subject]" required="required" class="form-control">
						<option value="" selected="selected"></option>
						<option value="I have a question about a product">I have a question about a product</option>
						<option value="I have a custom enquiry">I have a custom enquiry</option>
						<option value="I'd like to give some feedback">I'd like to give some feedback</option>
						<option value="I have a general enquiry">I have a general enquiry</option>
						<option value="Other">Other</option>
					</select>
				</div>
        <div class="cfe-c">
					<label for="cf-subject">
						<label class="required" for="contact_subject">Attachment (Optional)</label>
					</label>
					<input type="file" />
				</div>
				<div class="cfe-c">
					<label for="cf-enquiry">
						<label for="contact_message" class="required">Message</label>
					</label>
					<textarea id="contact_message" name="contact[message]" required="required" rows="10" class="form-control"></textarea>
				</div>
				</script>
				<script async="" type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LfmXccUAAAAAHFVK9xY0YaI8oj8b3pLHnZyj_jp&amp;onload=recaptchaCallback_contact_captcha" defer="" nonce=""></script>
				<button type="submit" id="contact-submit-enquiry">Send Enquiry</button> <span class="icon-cross" id="cross-1"></span> <span class="icon-cross" id="cross-2"></span>
			</form>
		</div>
		<div class="col-12 col-lg-5 offset-lg-1 p-0 pl-lg-2">
			<h5>Telephone Number</h5>
			<p><a href="tel:03301757557">0330 17 57 557</a> (Mon-Fri 9.30am-4.30pm)</p>
			<h5>Email Address</h5>
			<ul class="no-bullet">
				<li><strong>General Enquiries:</strong> <a href="mailto:sales@signhq.co.uk">sales@signhq.co.uk</a> </li>
			</ul>
			<p class="note">Please note: We aim to respond to all email messages within 24 hours of initial contact.</p>
			<h5>Office Address</h5>
			<p>Unit 22 Harwood street, Furthergate business park , Blackburn Lancashire BB13BS</p>
		</div>
	</div>
	<div class="full bg-g" id="contact-offset">
		<div class="d-flex flex-wrap align-items-end">
			<div class="col-12 col-lg-5 offset-lg-1 pl-lg-2" id="contact-reg">
				<p class="note">Sign HQ.
					<br>Company Registered in England: 41321321.
					<br>VAT No: 123 456 78. </p>
			</div>
		</div>
	</div>
	<div class="usps row d-flex justify-content-between pt-lg-3">
		<div class="col-12 col-lg-4 mb-3 mb-lg-0 d-flex usp-c">
			<div class="usp-i" id="usp-install">
				<div class="icon-thumb"></div>
			</div>
			<div class="usp-t">
				<h5>Quick &amp; easy to install</h5>
				<p>Fit your new sign in a jiffy with just a drill and screwdriver as every sign comes with the required fixings. Take a look out our Assembly Instructions for more details.</p>
			</div>
		</div>
		<div class="col-12 col-lg-4 mb-3 mb-lg-0 d-flex usp-c">
			<div class="usp-i" id="usp-secure">
				<div class="icon-lock"></div>
			</div>
			<div class="usp-t">
				<h5>Secure online payment</h5>
				<p>Have peace of mind when purchasing through our website with the knowledge that you’re protected by Sucuri, one of the market leaders in cyber security.</p>
			</div>
		</div>
		<div class="col-12 col-lg-4 mb-3 mb-lg-0 d-flex usp-c">
			<div class="usp-i" id="usp-materials">
				<div class="icon-diamond"></div>
			</div>
			<div class="usp-t">
				<h5>High quality materials</h5>
				<p> All our suppliers produce superior materials that will withstand all weathers. From our responsibly sourced timber to our UV inks, you can be sure your new sign will last.</p>
			</div>
		</div>
	</div>
</div>
@endsection
