@extends('layout.master')

@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center ftco-vh-70">
        <div class="col-md-12">
          <h1 class="ftco-heading ftco-animate mb-3 mt-5">{{$dish->title}} dish</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-sm-4 my-4 mx-auto">
      <div class="card">
        <img class="card-img-top" src="{{$dish->image}}" alt="{{$dish->title}}" title="{{$dish->title}}" height="300" width="150">
        <div class="card-body">
          <h4 class="card-title">{{$dish->title}}</h4>
          <p class="card-text">{{str_limit($dish->description,100)}}</p>
        </div>


      </div>
      <form class="text-primary menu-price" action="{{route('add.cart')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$dish->id}}">
        <button type="submit" class="btn btn-success add2cart">Add to cart</button>
      </form>
    </div>
  </div>

@endsection
