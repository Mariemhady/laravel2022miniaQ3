@extends("layout.app")
@section('title')
    Edit Article
@endsection
{{-- post get --}}
@section('body')
<form action="/update/{{$data->id}}"   method="POST">
    @method("PUT")
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      value="{{$data->title}}">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Author Name:</label>
      <input type="text" name="name" class="form-control" value="{{$data->name}}">

    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Articles Number:</label>
        <input type="number" name="number" class="form-control" value="{{$data->number}}">
  
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection