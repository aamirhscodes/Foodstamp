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
<div id="c">
  <h1 class="text-center display-1">Create An Account</h1>
  <div class="col-lg-10 offset-lg-1 text-center">
    <h3 class="nw mt-0 mb-">Please provide your details below to create your account on Sign HQ
      <hr>
    </h3>
  </div>
  <div class="d-flex flex-wrap col-lg-10 offset-lg-1" id="contact-details">
    <div class="col-12 col-lg-6 p-0" id="">
      <form name="contact" method="post" novalidate="novalidate" id="contact-form" action="{{route('register')}}">
        @csrf
        <h5>Account Details</h5>
        @if ($errors->any())
            <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
          </div>
        @endif
        <div class="cfe-c">
          <label for="cf-subject">
            <label class="required" for="contact_subject">Account Type</label>
          </label>
          <select id="contact_subject" name="account_type" required="required" class="form-control">
            <option value="" selected="selected">Please choose account type</option>
            <option value="Customer">Customer</option>
            <option value="Trader">Trader</option>
          </select>
        </div>
        <div class="cfe-c">
          <label for="cf-name">
            <label for="contact_name" class="required">Your name</label>
          </label>
          <input type="text" id="contact_name" name="name" required="required">
        </div>
        <div class="cfe-c">
          <label for="cf-email">
            <label for="contact_email" class="required">Email Address</label>
          </label>
          <input type="email" id="contact_email" name="email" required="required">
        </div>
        <div class="cfe-c">
          <label for="cf-email">
            <label for="contact_phone" class="required">Contact No.</label>
          </label>
          <input type="tel" id="contact_phone" name="phone" required="required" style="width:100%">
        </div>
        <div class="cfe-c">
          <label for="cf-email">
            <label for="contact_company" class="required">Company</label>
          </label>
          <input type="text" id="contact_company" name="company" required="required" style="width:100%">
        </div>
        <div class="cfe-c">
          <label for="cf-email">
            <label for="contact_registration_number" class="required">Company Registration No.</label>
          </label>
          <input type="text" id="contact_registration_number" name="registration_number" required="required" style="width:100%">
        </div>
        <div class="cfe-c">
          <label for="cf-email">
            <label for="contact_password" class="required">Password</label>
          </label>
          <input type="password" id="contact_password" name="password" required="required" style="width:100%">
        </div>
        <div class="cfe-c">
          <label for="cf-email">
            <label for="contact_password_confirm" class="required">Confirm Password</label>
          </label>
          <input type="password" id="contact_password_confirm" name="password_confirmation" required="required" style="width:100%">
        </div>
        <button type="submit" id="contact-submit-enquiry">Create Account</button>
      </form>
    </div>
    <div class="col-12 col-lg-5 offset-lg-1 p-0 pl-lg-2">
      <h5>Telephone Number</h5>
      <p>
        <a href="tel:03301757557">0330 17 57 557</a> (Mon-Fri 9.30am-4.30pm)
      </p>
      <h5>Email Address</h5>
      <ul class="no-bullet">
        <li>
          <strong>General Enquiries:</strong>
          <a href="mailto:sales@signhq.co.uk">sales@signhq.co.uk</a>
        </li>
      </ul>
      <p class="note">Please note: We aim to respond to all email messages within 24 hours of initial contact.</p>
      <h5>Office Address</h5>
      <p>Unit 22 Harwood street, Furthergate business park , Blackburn Lancashire BB13BS</p>
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
