@extends("layout.app")
@section('title')
    Create Post
@endsection

@section('body')
<form   action="/posts/store"  method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <textarea class="form-control" name="body" placeholder="Leave a body here" id="floatingTextarea"></textarea>

    </div>
    {{-- {{$data}} --}}
    <select class="form-select" name="user_id">
     
      @foreach ($data as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach

    </select>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection