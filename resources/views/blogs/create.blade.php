@extends("layout.app")
@section('title')
    Create Blog
@endsection
{{-- {{$data->name}} --}}
@section('body')
<form   action="{{route('blogs.store')}}"  method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="title" class="form-control"  
        value={{old("title")}} >
      <label class="text-danger" >  {{$errors->first("title")}}  </label>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Blog Name:</label>
      <input type="text" name="name" class="form-control" >
      
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Blogs Number:</label>
        <input  type="text" name="number" class="form-control" 
        value={{old("number")}}>
        <label class="text-danger" >  {{$errors->first("number")}}  </label>
      </div>
      <select class="form-select" name="user_id">
        @foreach ($data as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

      </select>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection