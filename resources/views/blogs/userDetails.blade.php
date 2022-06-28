@extends("layout.app")
  @section("title")
      Show Blogs For {{$data->name}}
  @endsection

  @section("body")

      {{-- @dd($data) --}}
    <div class="container text-center my-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h3>Blogs: </h3>
          <ul>
            {{-- {{$data->blogs}} --}}
            @foreach ($data->blogs as $item)
                <li>{{$item ->name}}</li>
            
            @endforeach

          </ul>
         
          
        </div>
      </div>
    </div>
    @endsection


