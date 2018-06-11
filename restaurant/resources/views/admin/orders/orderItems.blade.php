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

  <a href="{{route('orders.index')}}" class="btn btn-primary btn-sm mt-3">Back</a>

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">USER_ID</th>
        <th scope="col">ORDER_ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Main_section</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($order->orderItems as $orderItem)
        <tr>
          <td class="col-sm-1">{{$order->user_id}}</td>
          <td class="col-sm-1">{{$order->id}}</td>
          <td class="col-sm-1">{{$orderItem->dish->title}}</td>
          <td class="col-sm-1">{{str_limit($orderItem->dish->description, 20)}}</a></td>
          <td class="col-sm-1"><img src="{{$orderItem->dish->image}}" alt="Dish image" height="50"></td>
          <td class="col-sm-1">{{$orderItem->dish->price}}</td>
          <td class="col-sm-1">{{$orderItem->dish->menu->title}}</td>
        </tr>
      @endforeach

      <td><b>Total_paid: <i>{{$order->total_paid}}</i></b></td>
      <td>
        <form action="{{route('orders.shipped', $order)}}" method="post">
          @method('PUT')
          @csrf

          @if ($order->shipped === 0)
            <button type="submit" class="btn btn-danger btn-sm mt-3">Mark as shipped</button>
          @else
            <p class="btn btn-success btn-sm mt-3">Shipped</p>
            <button type="submit" class="btn btn-primary btn-sm mt-3">Mark as unshipped</button>
          @endif
        </form>
      </td>
    </tbody>
  </table>

@endsection
