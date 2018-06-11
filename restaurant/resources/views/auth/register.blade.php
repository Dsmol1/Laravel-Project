<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-lg">
        <form method="post" action="{{route('register')}}">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="first_name" class="col-form-label">First Name</label>
              <input type="text" class="form-control" id="First_name" name="name">
              @if ($errors->has('name'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('name')}}</b>
                </div>
              @endif
            </div>


            <div class="form-group col-sm-6">
              <label for="last_name" class="col-form-label">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="surname">
              @if ($errors->has('surname'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('surname')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group col-sm-6">
              <label for="email" class="col-form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email"></input>
              @if ($errors->has('email'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('email')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group col-sm-6">
              <label for="pass" class="col-form-label">Password</label>
              <input type="password" class="form-control" id="pass" name="password"></input>
              @if ($errors->has('password'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('password')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group col-sm-6">
              <label for="passconfirm" class="col-form-label">Confirm password</label>
              <input type="password" class="form-control" id="passconfirm" name="password_confirmation"></input>
            </div>

            <div class="form-group  col-sm-6">
              <label for="country" class="col-form-label">Country</label>
              <select class="form-control" name="country" id="country">
                @foreach ($countries as $country)
                  <option class="form-control" value="{{$country->name->common}}">{{$country->name->common}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group  col-sm-6">
              <label for="city" class="col-form-label">City</label>
              <input class="form-control" id="city" name="city"></input>
              @if ($errors->has('city'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('city')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group  col-sm-6">
              <label for="address" class="col-form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address"></input>
              @if ($errors->has('address'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('address')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group  col-sm-6">
              <label for="zip" class="col-form-label">Zip code</label>
              <input class="form-control" id="zip" name="zip_code"></input>
              @if ($errors->has('zip_code'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('zip_code')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group  col-sm-6">
              <label for="dob" class="col-form-label">Date of birth</label>
              <input type="date" class="form-control" id="dob" name="date_of_birth">
              @if ($errors->has('date_of_birth'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('date_of_birth')}}</b>
                </div>
              @endif
            </div>

            <div class="form-group col-sm-12">
              <label for="phone" class="col-form-label">Phone number</label>
              <input type="text" class="form-control" id="phone" name="phone_number">
              @if ($errors->has('phone_number'))
                <div class="alert alert-danger mt-4 mb-0 form-group">
                  <b>{{$errors->first('phone_number')}}</b>
                </div>
              @endif
            </div>
            <div class="form-group col-sm-6">
              <button type="submit" class="btn btn-success">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
