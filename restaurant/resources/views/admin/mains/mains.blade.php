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
        <a type="button" class="btn btn-success btn-lg btn-block mt-3 col-sm-4" href="{{route('mains.create')}}"> Add a new main</a>
      </div>
    </div>

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mains as $main)
        <tr>
          <th class="col-sm-1" scope="row">{{$main->id}}</th>
          <td class="col-sm-1">{{$main->title}}</td>
          <th class="col-sm-1">
            <a type="submit" class="btn btn-primary btn-sm mt-3" href="{{route('mains.edit', $main)}}" name="Edit">Edit</a>
            <form action="{{route('mains.destroy', $main)}}" method="post">
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
    {{$mains->links()}}
  </div>

@endsection
