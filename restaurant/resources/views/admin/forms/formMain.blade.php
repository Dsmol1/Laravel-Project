@extends ('adminLayouts.master')

@section('content')

  <form class="container" action="{{isset($main)?route('mains.update', $main):route('mains.store')}}" method="post">

    @if (isset($main))
      @method('PUT')
    @endif

    @csrf
    
      <div class="row">
        <div class="form-group mt-3">
          <label for="Title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Title..." name="title" value="{{isset($main)? $main->title : old('title')}}">
            @if ($errors->has('title'))
              <div class="alert alert-danger mt-4 col-sm-4">
                <b>{{$errors->first('title')}}</b>
              </div>
            @endif
        </div>
      </div>

      <input type="submit" name="submit" class="btn btn-primary mb-3" value="{{isset($main)?"Edit":"Add"}} main"></input>

  </form>
@endsection()
