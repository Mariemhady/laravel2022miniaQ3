@extends("layout.app")
@section('title')
    Create Article
@endsection

@section('body')
<form   action="/store"  method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Author Name:</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Articles Number:</label>
        <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection