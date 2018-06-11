@extends('layout.master')

@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center ftco-vh-70">
        <div class="col-md-12">
          <h1 class="ftco-heading ftco-animate mb-3 mt-5">Welcome To Taste Restaurant</h1>
        </div>
      </div>
    </div>
  </section>
  @if(session('danger'))
    <div class="row">
      <div class="col-sm-4 mx-auto">
        <div class="alert alert-danger text-center mt-4">
          {{session('danger')}}
        </div>
      </div>
    </div>
  @endif

  @if(session('success'))
    <div class="alert alert-success text-center mt-4">
      {{session('success')}}
    </div>
  @endif

  <div class="row col-sm-10 mx-auto">
    @foreach($dishes as $dish)
      <div class="col-sm-3 my-4 d-flex">
        <div class="card">
          <img class="card-img-top" src="{{$dish->image}}" alt="{{$dish->title}}" title="{{$dish->title}}">
          <div class="card-body">
            <h4 class="card-title">{{$dish->title}}</h4>
            <p class="card-text">{{str_limit($dish->description,100)}}</p>
          </div>
          <div class="card-footer">
            <a href="{{route('single.dish', $dish)}}" class="btn btn-primary">Find Out More!</a>
            <a data-dish={{$dish->id}} class="cart btn btn-success btn-product add2cart"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
    <div class="row col-sm-10 ">
      {{$dishes->links()}}
    </div>

    <script
           src="https://code.jquery.com/jquery-3.3.1.js"
           integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
           crossorigin="anonymous"></script>
    <script type="text/javascript">
   //
   //     $(document).ready(function () {
   //         $.ajaxSetup({
   //             headers: {
   //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //             }
   //         });
   //
   //
   //         $('.cart').click(function () {
   //             var dish_id = $(this).data('id');
   //             var url = "/addToCart";
   //             console.log(dish_id);
   //
   //             $.ajax({
   //                 type:'Post',
   //                 url: url,
   //                 data:{id:dish_id},
   //                 dataType:'json',
   //                 success: function (data) {
   //                     console.log(data);
   //                     $('#totalQty').html(data.totalQty);
   //                 },
   //                 error: function (data){
   //                     console.log('Error:', data);
   //                 }
   //
   //             });
   //         });
   //     });
   // </script>

@endsection
