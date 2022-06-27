@extends("layout.app")
@section('title')
    Create Post
@endsection

@section('body')

<form   action="/posts/update/{{$data->id}}"  method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input type="text" name="title" class="form-control">

    </div>
    <div class="mb-3">
      <label class="form-label">Body</label>
      <textarea class="form-control" name="body" placeholder="Leave a body here" id="floatingTextarea"></textarea>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection