@extends ('adminLayouts.master')

@section('content')

  <form class="container" action="{{isset($user)?route('users.update', $user):route('users.store')}}" method="post">

    @if (isset($user))
      @method('PUT')
    @endif

    @csrf

      <div class="form-group">
        <label for="first_name" class="col-form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="name" value="{{isset($user)? $user->name : old('name')}}">
      </div>

      <div class="form-group">
        <label for="last_name" class="col-form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="surname" value="{{isset($user)? $user->surname : old('surname')}}">
      </div>

      <div class="form-group">
        <label for="email" class="col-form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{isset($user)? $user->email : old('email')}}"></input>
      </div>

      <div class="form-group">
        <label for="country" class="col-form-label">Country</label>
        <input class="form-control" id="country" name="country" value="{{isset($user)? $user->country : old('country')}}"></input>
      </div>

      <div class="form-group">
        <label for="city" class="col-form-label">City</label>
        <input class="form-control" id="city" name="city" value="{{isset($user)? $user->city : old('city')}}"></input>
      </div>

      <div class="form-group">
        <label for="address" class="col-form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{isset($user)? $user->address : old('address')}}"></input>
      </div>

      <div class="form-group">
        <label for="zip" class="col-form-label">Zip code</label>
        <input class="form-control" id="zip" name="zip_code"  value="{{isset($user)? $user->zip_code : old('zip_code')}}"></input>
      </div>

      <div class="form-group">
        <label for="dob" class="col-form-label">Date of birth</label>
        <input type="date" class="form-control" id="dob" name="date_of_birth" value="{{isset($user)? $user->date_of_birth : old('date_of_birth')}}">
      </div>

      <div class="form-group">
        <label for="phone" class="col-form-label">Phone number</label>
        <input type="text" class="form-control" id="phone" name="phone_number" value="{{isset($user)? $user->phone_number : old('phone_number')}}">
      </div>

      @if (Auth::user()->isAdmin() && $user->id !== Auth::id())
        <div class="form-group">
          <label for="admin" class="col-form-label">Admin (change to 1 to give full access to all admin priveleges)</label>
          <input type="number" class="form-control" id="admin" name="admin" value="{{isset($user)? $user->admin : old('admin')}}">
        </div>
      @endif

      <input type="submit" name="submit" class="btn btn-primary mb-3" value="{{isset($user)?"Edit":"Add"}} user"></input>

    </form>
@endsection()
