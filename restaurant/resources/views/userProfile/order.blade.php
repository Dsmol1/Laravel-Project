@extends('layout.master')

@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center ftco-vh-70">
        <div class="col-md-12">
          <h1 class="ftco-heading ftco-animate mb-3 mt-5  ">Your orders</h1>
          <h2 class="h5 ftco-subheading mb-5 ftco-animate">A free template for Restaurant Websites Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></h2>
          {{-- <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p> --}}
        </div>
      </div>
    </div>
  </section>
<div class="row">
  <div class="container">
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th scope="col">ORDER_ID</th>
          <th scope="col">Total_paid</th>
          <th scope="col">Created_at</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
          <tr>
            <td><a href="{{route('profileOrders.orderItems', $order)}}">{{$order->id}}</a></td>
            <td>{{$order->total_paid}}</td>
            <td>{{$order->created_at}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>


  </div>
</div>

@endsection
