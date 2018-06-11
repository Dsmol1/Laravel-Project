@extends('adminLayouts.master')

@section('content')

  @if(session('success'))
    <div class="alert alert-success text-center mt-4">
      {{session('success')}}
    </div>
  @endif

  @if(session('danger'))
    <div class="alert alert-danger text-center mt-4">
      {{session('danger')}}
    </div>
  @endif

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">USER_ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Created_at</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        <tr>
          <td class="col-sm-1">{{$order->user_id}}</td>
            @foreach ($order->cart->products as $item)
              <td class="col-sm-1">{{$item['item']['title']}}</td>
              <td class="col-sm-1">{{str_limit($item['item']['description'], 10)}}</td>
              <td class="col-sm-1">{{$item['item']['image']}}</td>
              <td class="col-sm-1">{{$item['item']['price']}}</td>
              <td class="col-sm-1">{{$order->created_at}}</td>
            @endforeach
        </tr>
      @endforeach
    </tbody>
  </table>
  
@endsection
