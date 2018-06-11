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
      <a type="button" class="btn btn-success btn-lg btn-block mt-3 col-sm-4" href="{{route('create.dish')}}">Add a new dish</a>
    </div>
  </div>

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">ID</th>

        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Main_Section</th>
      </tr>
    </thead>
    <tbody>
      @for ($i=0; $i < count($dishes); $i++)
        <tr>
          <th class="col-sm-1" scope="row">{{$dishes[$i]->id}}</th>
          <td class="col-sm-1">{{$dishes[$i]->title}}</td>
          <td class="col-sm-4">{{$dishes[$i]->description}}</td>
          <td class="col-sm-1"><img src= "{{$dishes[$i]->image}}" alt="Dish image" height="80"></td>
          <td class="col-sm-1">{{$dishes[$i]->price}} &euro;</td>
          <td class="col-sm-1">{{$dishes[$i]->menu->title}}</td>
          <th class="col-sm-1">
            <a type="submit" class="btn btn-primary btn-sm mt-3" href="{{route('edit.dish', $dishes[$i])}}" name="Edit">Edit</a>
            <form action="{{route('delete.dish', $dishes[$i])}}" method="post">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </th>
        </tr>
      @endfor
    </tbody>
  </table>

  <div class="">
    {{$dishes->links()}}
  </div>
  
@endsection
