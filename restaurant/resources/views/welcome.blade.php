@extends('layout.master')
@section('content')

@include('modals.reservation')

<section class="ftco-section" id="section-about">
  <div class="container">
    <div class="row">
      <div class="col-md-5 ftco-animate mb-5">
        <h4 class="ftco-sub-title">Our Story</h4>
        <h2 class="ftco-primary-title display-4">Welcome</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p><a href="#" class="btn btn-secondary btn-lg">Our Story</a></p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
        <img src="images/about_img_1.jpg" alt="Free Template by Free-Template.co">
      </div>
    </div>
  </div>
</section>
<!-- END section -->


<section class="ftco-section bg-light" id="section-offer">
  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h4 class="ftco-sub-title">Our Offers</h4>
        <h2 class="display-4">Offers &amp; Promos</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="owl-carousel ftco-owl">
          @foreach ($dishes->take(9) as $dish)
            <div class="item flex-1">
              <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                <div class="media-body p-md-5 p-4">
                  <h5 class="text-primary">${{$dish->price}}</h5>
                  <h5 class="mt-0 h4">{{$dish->title}}</h5>
                  <p class="mb-4">{{$dish->description}}</p>
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>

    </div>
  </div>
</section>
<!-- END section -->

<section class="ftco-section" id="section-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h2 class="display-4">Today's Menu</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>

      <div class="col-md-12 text-center">

        <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
        @foreach ($mains as $main)
            <li class="nav-item ftco-animate">
              <a class="nav-link {{($main->id == 2)? 'active':''}}" id="pills-{{$main->id}}-tab" data-toggle="pill" href="#pills-{{$main->id}}" role="tab" aria-controls="pills-{{$main->id}}" aria-selected="true">{{$main->title}}</a>
            </li>
        @endforeach
      </ul>

        <div class="tab-content text-left">
          @foreach ($mains as $main)
            <div class="tab-pane fade {{($main->id == 2)? 'show active':''}}" id="pills-{{$main->id}}" role="tabpanel" aria-labelledby="pills-{{$main->id}}-tab">
              <div class="row">
              @foreach ($main->dishes as $dish)
              <div class="col-md-6 ftco-animate">
                 <div class="media menu-item">
                   <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                   <div class="media-body">
                     <h5 class="mt-0">{{$dish->title}}</h5>
                     <p>{{$dish->description}}</p>
                     <h6 class="text-primary menu-price">{{$dish->price}}</h6>
                   </div>
                 </div>
               </div>
              @endforeach
              </div>
            </div>
          @endforeach
        </div>
    </div>
  </div>
</section>
<!-- END section -->

<section class="ftco-section bg-light" id="section-news">
  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h2 class="display-4">News &amp; Events</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="media d-block mb-4 text-center ftco-media ftco-animate">
          <img src="images/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          <div class="media-body p-md-5 p-4">
            <h5 class="mt-0 h4">In Taste Restaurant</h5>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="media d-block mb-4 text-center ftco-media ftco-animate">
          <img src="images/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          <div class="media-body p-md-5 p-4">
            <h5 class="mt-0 h4">Chef Special Menu</h5>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="media d-block mb-4 text-center ftco-media ftco-animate">
          <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          <div class="media-body p-md-5 p-4">
            <h5 class="mt-0 h4">Merriage Celebrations</h5>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END section -->

<section class="ftco-section" id="section-gallery">
  <div class="container">
    <div class="row ftco-custom-gutters">

      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h2 class="display-4">Food Gallery</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
          <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
          <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
          <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>

      <div class="col-md-4 ftco-animate">
        <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
          <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
          <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
          <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>

    </div>
  </div>
</section>
<!-- END section -->

<section class="ftco-section bg-light" id="section-contact">
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h2 class="display-4">Contact Us</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>

      <div class="col-md mb-5 ftco-animate">
        <form action="" method="post">
          <div class="form-group">
            <label for="name" class="sr-only">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message" class="sr-only">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
          </div>
        </form>
      </div>

    </div>
  </div>
</section>
<div id="map"></div>
{{-- <iframe src="https://snazzymaps.com/embed/71266" width="100%" height="600px" style="border:none;"></iframe> --}}
<!-- END section -->
@endsection
