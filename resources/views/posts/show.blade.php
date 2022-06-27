@extends("layout.app")
  @section("title")
      Show Post
  @endsection

  @section("body")

      {{-- @dd($data) --}}
    <div class="container text-center my-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h3>Title: </h3>
          <h5 class="card-title">{{$data->title}}</h5>
          <h3>Description: </h3>
          <p class="card-text">{{$data->body}}</p>
        </div>
      </div>
    </div>
    @endsection