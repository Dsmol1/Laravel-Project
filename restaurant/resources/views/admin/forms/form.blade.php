@extends ('adminLayouts.master')

@section('content')

  <form class="container" action="{{isset($dish)?route('update.dish', $dish):route('add.dish')}}" method="post">
    @if (isset($dish))
      @method('PUT')
    @endif
    
    @csrf
    <div class="row">
        <div class="form-group mt-3">
          <label for="Title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title..." name="title" value="{{isset($dish)? $dish->title : old('title')}}">
            @if ($errors->has('title'))
              <div class="alert alert-danger mt-4 col-sm-4">
                <b>{{$errors->first('title')}}</b>
              </div>
            @endif
        </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" id="description" placeholder="Description..." rows="8" cols="80" name="description">{{isset($dish)? $dish->description : old('description')}}</textarea>
        @if ($errors->has('description'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('description')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="image">Image</label>
        <input type="url" class="form-control" id="image" placeholder="Url..." name="image" value="{{isset($dish)? $dish->image : old('image')}}">
        @if ($errors->has('image'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('image')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" placeholder="Price..." name="price" value="{{isset($dish)? $dish->price : old('price')}}">
        @if ($errors->has('price'))
          <div class="alert alert-danger mt-4 col-sm-4">
            <b>{{$errors->first('price')}}</b>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      @if (!isset($dish))
        <div class="form-group">
          <label for="main_id">Dish section</label>
          <select class="form-control" id="main_id" name="main_id" select="{{ old('main_id') }}">
            <option value="">Select section</option>
            @foreach($mains as $main)
              <option value="{{$main->id}}">{{$main->id}} {{$main->title}}</option>
            @endforeach
          </select>
          @if ($errors->has('main_id'))
            <div class="alert alert-danger mt-4 col-sm-4">
              <b>{{$errors->first('main_id')}}</b>
            </div>
          @endif
        </div>
      @endif
    </div>

    <div class="row">
      @if (isset($dish))
        <div class="form-group">
          <label for="main_id">Dish section</label>
          <select class="form-control" id="main_id" name="main_id" select="{{ old('main_id') }}">
            @foreach($mains as $main)
              <option value="{{$main->id}}" {{ $dish->main_id == $main->id ? 'selected' : '' }}>{{$main->id}} {{$main->title}}</option>
            @endforeach
          </select>
          @if ($errors->has('main_id'))
            <div class="alert alert-danger mt-4 col-sm-4">
              <b>{{$errors->first('main_id')}}</b>
            </div>
          @endif
        </div>
      @endif
    </div>
      <input type="submit" name="submit" class="btn btn-primary mb-3" value="{{isset($dish)?"Edit":"Add"}} dish"></input>
  </form>
@endsection()
