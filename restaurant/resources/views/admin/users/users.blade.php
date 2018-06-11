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
      <a type="button" class="btn btn-success btn-lg btn-block mt-3 col-sm-4" href="{{route('users.create')}}">Add user</a>
    </div>
  </div>

  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">DOB</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Zip_code</th>
        <th scope="col">Country</th>
        <th scope="col">Admin</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th class="col-sm-1" scope="row">{{$user->id}}</th>
        <th class="col-sm-2" scope="row">{{$user->name}}</th>
        <td class="col-sm-2">{{$user->surname}}</td>
        <td class="col-sm-2">{{$user->date_of_birth}}</td>
        <td class="col-sm-2">{{$user->phone_number}}</td>
        <td class="col-sm-2">{{$user->email}}</td>
        <td class="col-sm-2">{{$user->address}}</td>
        <td class="col-sm-2">{{$user->city}}</td>
        <td class="col-sm-2">{{$user->zip_code}}</td>
        <td class="col-sm-2">{{$user->country}}</td>
        <td class="col-sm-2">
          @if($user->admin === 1)
            <b>Yes</b>
          @else
            <b>no</b>
          @endif
        </td>

        <th class="col-sm-2">
          <a type="submit" class="btn btn-primary btn-sm mt-3" href="{{route('users.edit', $user)}}" name="Edit">Edit</a>
            @if($user->id !== Auth::id())
              <form action="{{route('users.destroy', $user)}}" method="post">
                @method('DELETE')
                @csrf
                  <button type="submit" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            @endif
        </th>
      </tr>
    @endforeach

    </tbody>
  </table>

  <div class="">
    {{$users->links()}}
  </div>

@endsection
