@extends('layout.app')
@section('content')
<!-- home slider start -->
<section class="home-section home-style-2 pt-0">
   <div class="container-fluid p-0">
      <div class="slick-2 dot-dark">
         <div>
            <div class="home-slider">
               <div class="home-wrap row m-0">
                  <div class="col-xxl-12 col-lg-12 p-0 left-content">
                     <img src="assets/images/fashion/slider/1.jpg" class="bg-img blur-up lazyload" alt="">
                     <div class="home-content row">
                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-5 col-6">
                           <h1 data-animation-in="fadeInUp">Donations Redefined
                           </h1>
                           <h6 class="mb-4" data-animation-in="fadeInUp" data-delay-in="0.4">STOP GIVING CASH - START GIVING FOOD
                           </h6>
                           <div class="discover-block" data-animation-in="fadeInUp" data-delay-in="0.7">
                              <div class="d-flex">
                                 <a href="javascript:void(0)" class="play-icon theme-bg-color">
                                 <i class="fas fa-play"></i>
                                 </a>
                                 <div class="discover-content">
                                    <h4 class="theme-color mb-1">Start</h4>
                                    <h6>Get Stamps Now</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- home slider end -->
<!-- product section start -->
<section class="ratio_asos">
   <div class="container">
      <div class="row m-0">
         <div class="col-sm-12 p-0">
            <div class="title title-2 text-center">
               <h2>Get Stamps Now</h2>
               <h5 class="text-color">Delivered To Your Doorstep</h5>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
  <div class="container">
    <div class="row gx-4 gy-5">
      <div class="col-12">
        <div class="details-items">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="degree-section">
                <div class="details-image ratio_asos">
                  <div>
                    <div class="product-image-tag">
                      <img src="assets/images/fashion/1.jpg" id="zoom_01" data-zoom-image="assets/images/fashion/1.jpg" class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                      <div class="label-tag">
                        <h6>
                          <i class="fas fa-star"></i> 4.8 <span class="font-light">120</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="cloth-details-size">
                <div class="product-count">
                  <ul>
                    <li>
                      <img src="assets/images/gif/fire.gif" class="img-fluid blur-up lazyload" alt="image">
                      <span class="p-counter">{{rand(40, 140)}}</span>
                      <span class="lang">stamps delivered in last 24 hours</span>
                    </li>
                  </ul>
                </div>
                <div class="details-image-concept">
                  <h2>Food Stamp</h2>
                </div>
                <div id="selectSize" class="addeffect-section product-description border-product">
                  <h6 class="product-title size-text">select stamp value
                  </h6>
                  <h6 class="error-message">please stamp value</h6>
                  <div class="size-box">
                    <ul>
                      @foreach($stamps as $s)
                      <li>
                        <a href="javascript:void(0)">{{$s->price}}</a>
                      </li>
                      @endforeach

                    </ul>
                  </div>
                  <h6 class="product-title product-title-2 d-block">quantity</h6>
                  <div class="qty-box">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                          <i class="fas fa-minus"></i>
                        </button>
                      </span>
                      <input type="text" name="quantity" id="qtyText" class="form-control input-number" value="1">
                      <span class="input-group-prepend">
                        <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                          <i class="fas fa-plus"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="product-buttons">
                  <a href="#" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Add To Cart</span>
                  </a>
                </div>
                <div class="success_message">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="cloth-review">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button">Description</button>
              <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab" data-bs-target="#question" type="button">FAQs</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="desc">
              <div class="shipping-chart">
                <div class="part">
                  <h4 class="inner-title mb-2">How It Works</h4>
                  <p class="font-light">Families can use food stamps to buy certain foods for the household, such as fruits, vegetables, meat, poultry, fish, dairy products, breads and cereals. Food stamps cannot be used to purchase alcoholic beverages, cigarettes or nonfood items like cleaning supplies.</p>
                </div>
                <div class="row g-3 align-items-center">
                  <div class="col-lg-12">
                    <p class="font-light">We believe that instead of giving cah to deserving people, we should provide them with actual nessessities for their livelihood. Buy purchasing these stamps, which are usable at 100s of food retail outlets across Pakistan, you may be able to make a difference in their lives.</p>
                  </div>

                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="question">
              <div class="question-answer">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product section end -->

<!-- instagram shop section start -->
<section class="ratio_square">
   <div class="container-fluid">
      <div class="row">
         <div class="col">
            <div class="title title-2 text-center">
               <h2>Our Restaurants</h2>
               <h5 class="text-color">Some of our major restaurant partners</h5>
            </div>
            <div class="product-style-1 instagram-2 product-wrapper">
               <div class="insta-slider instagram-wrap">
                 <?php
                 $count = 0;
                 ?>
                 @foreach($restaurants as $r)
                 <?php

                 $count++;
                 ?>
                 <div>
                    <div class="product-box">
                       <div class="img-wrapper">
                          <a href="javascript:void(0)" class="text-center">
                          <img src="https://picsum.photos/200/300?random={{$count}}"
                             class="bg-img blur-up lazyload" alt="">
                          </a>
                       </div>
                       <div class="insta-hover insta-spacing text-center">
                          <div>
                            <h3 class="text-hide">{{$r->title}}</h3>
                            <h5>{{$r->address}}</h5>
                          </div>
                       </div>
                    </div>
                 </div>
                 @endforeach

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- instagram shop section end -->
<!-- service section start -->
<section class="service-section service-style-2 section-b-space">
   <div class="container">
      <div class="row g-4 g-sm-3">
         <div class="col-xl-3 col-sm-6">
            <div class="service-wrap">
               <div class="service-icon">
                  <svg>
                     <use xlink:href="assets/svg/icons.svg#customer"></use>
                  </svg>
               </div>
               <div class="service-content">
                  <h3 class="mb-2">Customer Servcies</h3>
                  <span class="font-light">24/7 customer service.</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6">
            <div class="service-wrap">
               <div class="service-icon">
                  <svg>
                     <use xlink:href="assets/svg/icons.svg#shop"></use>
                  </svg>
               </div>
               <div class="service-content">
                  <h3 class="mb-2">Pickup At Any Store</h3>
                  <span class="font-light">Over 100 restaurant chains</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6">
            <div class="service-wrap">
               <div class="service-icon">
                  <svg>
                     <use xlink:href="assets/svg/icons.svg#secure-payment"></use>
                  </svg>
               </div>
               <div class="service-content">
                  <h3 class="mb-2">Secured Payment</h3>
                  <span class="font-light">Guaranteed payment to restaurants</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6">
            <div class="service-wrap">
               <div class="service-icon">
                  <svg>
                     <use xlink:href="assets/svg/icons.svg#return"></use>
                  </svg>
               </div>
               <div class="service-content">
                  <h3 class="mb-2">All Materials Recycled </h3>
                  <span class="font-light">Our stamps are recycled regularly</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- service section end -->
@endsection

@section('customJS')
<script>
$('#cartEffect').on('click', function(e){
  e.preventDefault();
  var data_to_post = {
    "_token": "{{ csrf_token() }}",
    'price': $('.size-box li.active a').text(),
    'quantity': $('#qtyText').val(),
  };
  $.ajax({
       type:'POST',
       url:"{{ route('addToCart') }}",
       data:data_to_post,
       success:function(data){
         $('.success_message').html('<div class="alert alert-success">Stamp has been added to your cart</div>');
         $('#cart_Total').html('Rs. '+data.Total);
         setTimeOut(function(){
                $(".alert-success").fadeOut('slow');
                $('.success_message').html('');
            },2000);

       }
    });
});
</script>
@endsection

@section('cart_data')
<li>
    <button type="button" class="btn btn-solid-default btn-spacing" onclick="window.location.href='{{route('cart')}}'">
        <i data-feather="shopping-cart" class="pe-2"></i>
        @if (isset($cart))
         <span id="cart_Total">Rs. {{$cart->total_amount}}</span>
        @else
         <span id="cart_Total">Rs. 0</span>
        @endif

    </button>
</li>
@endsection
