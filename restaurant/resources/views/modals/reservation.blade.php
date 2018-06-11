<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
          <div class="col-lg-8 p-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <small>CLOSE </small><span aria-hidden="true">&times;</span>
            </button>
            <h1 class="mb-4">Reserve A Table</h1>
            <form action="{{route('user.reservation')}}" method="post">
              @csrf

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="m_fname">First Name</label>
                  <input type="text" class="form-control" id="m_fname" name="name" value="{{Auth::user() ? Auth::user()->name : old('name')}}">
                </div>

                <div class="col-md-6 form-group">
                  <label for="m_lname">Last Name</label>
                  <input type="text" class="form-control" id="m_lname" name="surname" value="{{Auth::user() ? Auth::user()->surname : old('surname')}}">
                </div>
              </div>

              <div class="row">
                @if ($errors->has('name'))
                  <div class="alert alert-danger mt-4 col-sm-6 form-group">
                    <b>{{$errors->first('name')}}</b>
                  </div>
                @endif

                @if ($errors->has('surname'))
                  <div class="alert alert-danger mt-4 col-sm-6 form-group">
                    <b>{{$errors->first('surname')}}</b>
                  </div>
                @endif
              </div>



              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="m_email">Email</label>
                  <input type="email" class="form-control" id="m_email" name="email" value="{{Auth::user() ? Auth::user()->email : old('email')}}">
                </div>
                @if ($errors->has('email'))
                  <div class="alert alert-danger mt-4 col-sm-4">
                    <b>{{$errors->first('email')}}</b>
                  </div>
                @endif
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="m_people">How Many People</label>
                  <select name="people" id="m_people" class="form-control" value="">
                    <option {{old('people') == 1?'selected':''}} value="1">1 People</option>
                    <option {{old('people') == 2?'selected':''}} value="2">2 People</option>
                    <option {{old('people') == 3?'selected':''}} value="3">3 People</option>
                    <option {{old('people') == "4+"?'selected':''}} value="4+">4+ People</option>
                  </select>
                </div>
                @if ($errors->has('people'))
                  <div class="alert alert-danger mt-4 col-sm-4">
                    <b>{{$errors->first('people')}}</b>
                  </div>
                @endif

                <div class="col-md-6 form-group">
                  <label for="m_phone">Phone</label>
                  <input type="text" class="form-control" id="m_phone" name="phone" value="{{old('phone')}}">
                </div>

              </div>

              @if ($errors->has('phone'))
                <div class="alert alert-danger mt-4 col-sm-4">
                  <b>{{$errors->first('phone')}}</b>
                </div>
              @endif

              <div class="row">

                <div class="col-md-6 form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}">
                </div>

                @if ($errors->has('date'))
                  <div class="alert alert-danger mt-4 col-sm-4">
                    <b>{{$errors->first('date')}}</b>
                  </div>
                @endif
                <div class="col-md-6 form-group">
                  <label for="m_time">Time</label>
                  <input type="text" class="form-control" id="m_time" name="time">
                </div>
                @if ($errors->has('time'))
                  <div class="alert alert-danger mt-4 col-sm-4">
                    <b>{{$errors->first('time')}}</b>
                  </div>
                @endif
            </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="m_message">Message</label>
                  <textarea class="form-control" id="m_message" cols="30" rows="7" name="message">{{old('message')}}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- END Modal -->

<section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center ftco-vh-100">
      <div class="col-md-12">
        @if(session('success'))
          <div class="row">
            <div class="col-sm-4 mx-auto">
              <div class="alert alert-success text-center mt-4">
                {{session('success')}}
              </div>
            </div>
        </div>
        @endif
        <h1 class="ftco-heading ftco-animate mb-3">Welcome To Taste Restaurant</h1>
        <h2 class="h5 ftco-subheading mb-5 ftco-animate">A free template for Restaurant Websites Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></h2>
        <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>
      </div>
    </div>
  </div>
</section>
