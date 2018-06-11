@extends('adminLayouts.master')

@section('content')

  @if(session('success'))
    <div class="row">
      <div class="col-sm-4 mx-auto">
        <div class="alert alert-success text-center mt-4">
          {{session('success')}}
        </div>
      </div>
    </div>
  @endif

  @if(session('info'))
    <div class="row">
      <div class="col-sm-4 mx-auto">
        <div class="alert alert-info text-center mt-4">
          {{session('info')}}
        </div>
      </div>
    </div>
  @endif

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">USER_ID</th>
        <th scope="col">ORDER_ID</th>
        <th scope="col">Total_paid</th>
        <th scope="col">Created_at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        <tr>
          <td class="col-sm-1">{{$order->user_id}}</td>
          <td class="col-sm-1"><a href="{{route('orders.orderItems', $order)}}">{{$order->id}}</a></td>
          <td class="col-sm-1">{{$order->total_paid}}</td>
          <td class="col-sm-1">{{$order->created_at}}</td>
          <td class="col-sm-1">
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
        </tr>
      @endforeach
    </tbody>
  </table>
  
@endsection
