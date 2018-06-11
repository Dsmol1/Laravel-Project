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

  <div class="row">
    <div class="col-sm-2">
      <a type="button" class="btn btn-success btn-lg btn-block mt-3 col-sm-4" href="{{route('reservations.create')}}"> Add reservation</a>
    </div>
  </div>

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">People</th>
        <th scope="col">Phone</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reservations as $reservation)
        <tr>
          <th class="col-sm-1" scope="row">{{$reservation->id}}</th>
          <td class="col-sm-1">{{$reservation->name}}</td>
          <td class="col-sm-1">{{$reservation->surname}}</td>
          <td class="col-sm-1">{{$reservation->email}}</td>
          <td class="col-sm-1">{{$reservation->people}}</td>
          <td class="col-sm-1">{{$reservation->phone}}</td>
          <td class="col-sm-1">{{$reservation->date}}</td>
          <td class="col-sm-1">{{$reservation->time}}</td>
          <td class="col-sm-1">{{$reservation->message}}</td>
          <th class="col-sm-1">
            <a type="submit" class="btn btn-primary btn-sm mt-3" href="{{route('reservations.edit', $reservation)}}" name="Edit">Edit</a>
            <form action="{{route('reservations.destroy', $reservation)}}" method="post">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </th>
        </tr>
      @endforeach

    </tbody>
  </table>
  
  <div class="">
    {{$reservations->links()}}
  </div>

@endsection
