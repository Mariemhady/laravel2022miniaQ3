@extends("layout.app")
  @section("title")
      Show Blog
  @endsection

  @section("body")


      @dd($data)
    <div class="container text-center my-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h3>Title: </h3>
          <h5 class="card-title">{{$data->title}}</h5>
          <h3>Blogger name: </h3>
          <p class="card-text">{{$data->name}}</p>
          <h3>Number of Blogs: </h3>
          <p class="card-text">{{$data->number}}</p>
        </div>
      </div>
    </div>
    @endsection





    {{-- {{$data->blogs}} --}}

{{-- @foreach ($data->blogs as $blog)
{{-- @dd($item) --}}
{{-- <tr>  --}}
 
    {{-- <td> --}}
        {{-- {{$blog->name}} --}}
    {{-- </td>
</tr> --}}

{{-- @endforeach  --}}


{{-- $table->unsignedBigInteger('user_id');

$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); --}}


{{-- public function show(User $user)
{
    // dd($user);
    return view("blogs.showuser", ["data"=> $user]);

} --}}


{{-- 
// public function __construct()
// {
//     $this->middleware('auth');
// } --}}