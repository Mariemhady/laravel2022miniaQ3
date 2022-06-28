@extends("layout.app")
  @section("title")
      Show Post for {{$data->name}}
  @endsection

  @section("body")

      {{-- @dd($data) --}}
    <div class="container text-center my-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h3>Title: </h3>
          @foreach ($data->posts as $item)
          <h5 class="card-title">{{$item->title}}</h5>
          <h3>Description: </h3>
          <p class="card-text">{{$item->body}}</p>
          @endforeach
          
        </div>
      </div>
    </div>
    @endsection