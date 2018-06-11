@extends ('adminLayouts.master')

@section('content')

  <form class="container" action="{{isset($reservation)?route('reservations.update', $reservation):route('reservations.store')}}" method="post">

    @if (isset($reservation))
      @method('PUT')
    @endif

    @csrf
    <div class="row">
        <div class="form-group mt-3">
          <label for="title">Name</label>
            <input type="text" class="form-control" id="title" placeholder="Name..." name="name" value="{{isset($reservation)? $reservation->name : old('name')}}">
            @if ($errors->has('name'))
              <div class="alert alert-danger mt-4 col-sm-4">
                <b>{{$errors->first('name')}}</b>
              </div>
            @endif
        </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="surname">Last name</label>
        <input type="text" class="form-control" id="surname" placeholder="Last name..." name="surname" value="{{isset($reservation)? $reservation->surname : old('surname')}}">
        @if ($errors->has('surname'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('surname')}}</b>
          </div>
        @endif
      </div>
    </div>


    <div class="row">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email..." name="email" value="{{isset($reservation)? $reservation->email : old('email')}}">
        @if ($errors->has('email'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('email')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" placeholder="Phone..." name="phone" value="{{isset($reservation)? $reservation->phone : old('phone')}}">
        @if ($errors->has('phone'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('phone')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="people">People</label>
        <input type="text" class="form-control" id="people" placeholder="People..." name="people" value="{{isset($reservation)? $reservation->people : old('people')}}">
        @if ($errors->has('people'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('people')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" placeholder="Date..." name="date" value="{{isset($reservation)? $reservation->date : old('date')}}">
        @if ($errors->has('date'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('date')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="time">Time</label>
        <input type="text" class="form-control" id="time" placeholder="Time..." name="time" value="{{isset($reservation)? $reservation->time : old('time')}}">
        @if ($errors->has('time'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('time')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="message">Message</label>
        <textarea type="text" class="form-control" id="message" placeholder="Message..." rows="8" cols="80" name="message">{{isset($reservation)? $reservation->message : old('message')}}</textarea>
        @if ($errors->has('message'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('message')}}</b>
          </div>
        @endif
      </div>
    </div>

    <input type="submit" name="submit" class="btn btn-primary mb-3" value="{{isset($reservation)?"Edit":"Add"}} reservation"></input>

</form>
@endsection()
